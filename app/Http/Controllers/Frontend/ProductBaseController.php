<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductBaseController extends BaseFrontendController
{
    //Show danh mục dản phẩm
    public function getCategory()
    {
        return Category::orderByDesc('id')->get();
    }
}
