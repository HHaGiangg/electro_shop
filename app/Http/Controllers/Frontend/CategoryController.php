<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Keyword;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends ProductBaseController
{
    public function index(Request $request, $slug)
    {
        $paramAtbSearch = $request->except('price');
        $paramAtbSearch = array_values($paramAtbSearch);

        $categories = Category::all();
        $category   = Category::where('c_slug', $slug)->first();

        if (!$category) return abort(404);

//        $categories      = $this->getCategory();

        $products = Product::with('category:id,c_name,c_slug')->where('pro_category_id',$category->id);
        //loc tim kiem sp theo ten
        if ($name = $request->k)
        {
            $products->where('pro_name','like','%'.$name.'%');
        }

        //        loc tim sp theo gia
        if ($request->price){
            $price = $request ->price;
            if ($price == 6){
                $products->where('pro_price','>',10000000);
            }else{
                $products->where('pro_price','<=',2000000 * $price);
            }
        }
        $products    = $products->select('id','pro_name','pro_slug','pro_price','pro_avatar')
          ->paginate(9);

        $viewData = [
            'categories' => $categories,
            'keywords'  => $this->getKeyWords(),
            'title' => $category->c_name,
            'category' => $category,
            'products'   => $products,
            'query'     => $request->query()
        ];
        return view('frontend.category.index',$viewData);
    }
}
