<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductBaseController extends BaseFrontendController
{
    //Show danh mục dản phẩm
    public function getCategory()
    {
        return Category::orderByDesc('id')->get();
    }
    //Show Tags sản phẩm
    public function getKeyWords()
    {
        return Keyword::orderByDesc('id')->get();
    }
}
