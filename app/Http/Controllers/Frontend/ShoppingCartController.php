<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //Hien thi số lượng trong giỏ hàng
    public function index()
    {
        $products   = \Cart::content();

        $viewData   = [
          'products'    => $products,
        ];
        return view('frontend.shopping.index', $viewData);
    }
    //Hiển thị trang thanh toán
    public function checkout()
    {
        $products   = \Cart::content();
        $user   = User::find(get_data_user('web'));

        $viewData   = [
            'products'    => $products,
            'user'        => $user,
        ];
        return view('frontend.shopping.checkout', $viewData);
    }
    //Thanh toán
    public function pay(Request $request)
    {
        $dataTransaction    = $request->except('_token');
        $dataTransaction['created_at']  = Carbon::now();
        $dataTransaction['t_user_id']   = get_data_user('web') ?? 0;
        $dataTransaction['t_total_money'] = (int)str_replace(',','', \Cart::subtotal(0));
        $transaction   = Transaction::create($dataTransaction);
        //kiểm tra đơn hàng có tồn tại hay không?
        if ($transaction)
        {
            $products   = \Cart::content();
            foreach ($products as $product)
            {
                Order::create([
                   'od_transaction_id' => $transaction->id,
                    'od_product_id'     => $product->id,
                    'od_qty'    => $product->qty,
                    'od_price'  => $product->price,
                    'created_at'=> Carbon::now(),
                ]);
            }
        }
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Đơn hàng của bạn đã được lưu'
        ]);
        \Cart::destroy();

        return redirect()->route('get.home');
    }

}
