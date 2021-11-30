<?php

namespace App\Http\Controllers\Frontend\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AjaxShoppingCartController extends Controller
{
    //Them Gio Hang
    public function add(Request $request, $productID)
    {
        if ($request->ajax())
        {
            //1. Kiem tra sp
            $qty    = $request->qty;
            $product    = Product::find($productID);
            if (!$product){
                return response()->json([
                    'status' => 404,
                ]);
            }
            //2. Kiểm tra số lượng sản phẩm
            if($product->pro_number < 1) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Số lượng sản phẩm không đủ'
                ]);
            }
            $cart = \Cart::content();
            $idCartProduct  = $cart->search(function ($cartItem) use ($product){
               if ($cartItem->id == $product->id) return $cartItem->id;
            });
            if ($idCartProduct){
                $productByCart = \Cart::get($idCartProduct);
                if ($product->pro_number < ($productByCart->qty + $qty)){
                    return response()->json([
                        'status' => 200,
                        'message' => 'Số lượng sản phẩm không đủ'
                    ]);
                }
            }
            //3. Thêm sản phẩm vào giỏ hàng
            \Cart::add([
                'id' => $product->id,
                'name' => $product->pro_name,
                'qty' => $qty,
                'price' => $product->pro_price,
                'weight' => 1,
                'options' => [
//                    'sale' => $product->pro_sale,
//                    'pro_old' => $product ->pro_price,
                    'image' => $product->pro_avatar
                ]]);


            return response()->json([
               'status' => 200,
                'totalCart' => \Cart::count(),
                'message' => 'Thêm sản phẩm thành công',
            ]);
        }
    }

    //Xoa Gio Hang
    public function delete(Request $request, $id)
    {
        if ($request->ajax())
        {
            \Cart::remove($id);
            return response()->json([
               'status' => 200,
                'totalCart' => \Cart::count(),
                'message' => 'Xóa sản phẩm thành công',
            ]);
        }
    }

    //Cập nhật Gio Hang
    public function update(Request $request, $id)
    {
        if ($request->ajax())
        {
            \Cart::update($id, $request->qty);
            return response()->json([
                'status' => 200,
                'totalCart' => \Cart::count(),
                'message' => 'Cập nhật giỏ hàng thành công',
            ]);
        }
    }
}
