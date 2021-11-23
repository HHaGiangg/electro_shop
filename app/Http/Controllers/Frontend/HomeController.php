<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //San pham noi bat
        $productsHot     = Product::where('pro_hot',Product::HOT)
        ->limit(9)
        ->select('id','pro_name','pro_slug','pro_price','pro_avatar')
        ->get();

        //Slide
        $slide  = Slide::where('s_active', 1)
            ->orderByDesc('id')
            ->get();

        // Category
        $categoriesHot = Category::where('c_hot', Category::HOT)
        ->orderByDesc('id')->limit(3)
        ->get();
        $viewData = [
            'productsHot' => $productsHot,
            'slide'       => $slide,
            'categoriesHot' => $categoriesHot,
        ];
        return view('frontend.home.index', $viewData);
    }
}
