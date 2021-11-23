<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        //Show chi tiet san pham
        $product    = Product::with('category:id,c_name,c_slug','keywords')->where('pro_slug', $slug)->first();
        if (!$product) return abort(404);
        //San pham lien quan
        $productsRelated    = Product::with('category:id,c_name,c_slug')->where('pro_category_id', $product->pro_category_id)
        ->where('id','<>',$product->id)
            ->limit(4)
            ->select('id','pro_name','pro_slug','pro_price','pro_avatar')
            ->get();
        //Từ khóa sản phẩm

        $viewData   = [
            'product'   => $product,
            'productsRelated' => $productsRelated,
        ];
        return view('frontend.product_detail.index', $viewData);
    }
}
