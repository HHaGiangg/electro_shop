<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Menu;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogBaseController extends Controller
{
    //Show Menu bài viết
    public function getMenus()
    {
        $menus  = Menu::withCount('articles')
            ->orderByDesc('id')
            ->get();

        return $menus;
    }

    //Bai đăng mới nhất
    public function getLatestArticle()
    {
        return Article::orderByDesc('id')
            ->limit(4)
            ->select('id','a_name','a_avatar','a_slug')
            ->get();
    }

    //Show Tags bài viết
    public function getTags()
    {
        return Tag::orderByDesc('id')->get();
    }
}
