<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends BlogBaseController
{
    public function index()
    {
        $articles   = Article::with('menu:id,mn_name,mn_slug')->orderByDesc('id')->paginate(10);
        $menus  = $this->getMenus();

        $viewData   = [
            'articles'  => $articles,
            'menus'     => $menus,
            'tags'     => $this->getTags(),
            'LatestArticle' => $this->getLatestArticle(),
        ];
        return view('frontend.menu.index', $viewData);
    }
}
