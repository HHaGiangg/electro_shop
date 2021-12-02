<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BackendArticleController extends Controller
{
    protected $folder = 'backend.article.';
    public function index()
    {
        $articles    = Article::with('menu:id,mn_name')->orderByDesc('id')->get();

        $viewData  = [
            'articles' =>  $articles,
        ];
        return view($this->folder.'index',$viewData);
    }
    public function create()
    {
        $menus  = Menu::all();
        $tags   = Tag::all();
        $tagOld = [];
        $viewData = [
            'menus' => $menus,
            'tags'  => $tags,
            'tagOld' => $tagOld,
        ];
        return view($this->folder.'create', $viewData);
    }

    public function syncTag($tags, $articleID)
    {
        $datas = [];
        foreach ($tags as $tag)
        {
            $datas[] = [
                'at_article_id' => $articleID,
                'at_tag_id'     => $tag,
            ];
        }
        \DB::table('articles_tags')->where('at_article_id', $articleID)->delete();
        \DB::table('articles_tags')->insert($datas);

    }

    public function store(BackendArticleRequest $request)
    {
        $data = $request->except('_token','a_avatar','tags');
        $data['a_slug'] = \Illuminate\Support\Str::slug($request->a_name);
        $data['created_at'] = Carbon::now();
        if ($request->a_avatar){
            $image  = upload_image('a_avatar');
            if (isset($image['code']))
            {
                $data['a_avatar'] = $image['name'];
            }
        }
        $article = Article::create($data);
        if ($request->tags)
            $this->syncTag($request->tags, $article->id);

        return redirect()->back();

    }

    public function edit($id)
    {
        $menus = Menu::all();
        $article    = Article::find($id);
        $tags       = Tag::all();
        $tagOld     = \DB::table('articles_tags')
                ->where('at_article_id', $id)->pluck('at_tag_id')->toArray() ?? [];
        $viewData = [
            'menus' => $menus,
            'article'   => $article,
            'tags'  => $tags,
            'tagOld' => $tagOld,
        ];
        return view($this->folder.'update', $viewData);
    }
    public function update(BackendArticleRequest $request, $id)
    {
        $data = $request->except('_token','a_avatar','tags');
        $data['a_slug'] = \Illuminate\Support\Str::slug($request->a_name);
        $data['created_at'] = Carbon::now();
        if ($request->a_avatar){
            $image  = upload_image('a_avatar');
            if (isset($image['code']))
            {
                $data['a_avatar'] = $image['name'];
            }
        }
        Article::find($id)->update($data);
        if ($request->tags)
            $this->syncTag($request->tags, $id);

        return redirect()->route('get_backend.article.index');
    }
    public function delete($id)
    {
        \DB::table('articles')->where('id', $id)->delete();
        return redirect()->route('get_backend.article.index');
    }
}
