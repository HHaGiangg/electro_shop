<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleDetailController extends BlogBaseController
{
    public function index(Request $request, $slug)
    {
        $article   = Article::where('a_slug',$slug)->first();
        if (!$article) return abort(404);
        $articleNext        = Article::where('id','>',$article->id)->limit(1)->orderBy('id','asc')->first();
        $articlePrevious    = Article::where('id','<',$article->id)->limit(1)->orderBy('id','desc')->first();
        $viewData = [
            'article' => $article,
            'menus' => $this->getMenus(),
            'tags'  => $this->getTags(),
            'LatestArticle' => $this->getLatestArticle(),
            'articleNext'   => $articleNext,
            'articlePrevious' => $articlePrevious,
        ];
        return view('frontend.article_detail.index', $viewData);
    }
}
