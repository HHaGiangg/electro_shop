<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendTagRequest;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BackendTagController extends Controller
{
    protected $folder = 'backend.tag.';
    public function index()
    {
        $tags   = Tag::orderByDesc('id')->get();

        $viewData   = [
            'tags'  => $tags,
        ];
        return view($this->folder.'index', $viewData);
    }
    public function store(BackendTagRequest $request)
    {
        $data   = $request->except('_token');
        $data['t_slug']   = \Str::slug($request->t_name);
        $data['created_at'] = Carbon::now();
        $tag = Tag::create($data);

        return redirect()->route('get_backend.tag.index');
    }
    public function edit($id)
    {
        $tags   = Tag::orderByDesc('id')->get();
        $tag    = Tag::find($id);

        $viewData = [
            'tags'  => $tags,
            'tag'   => $tag,
        ];
        return view($this->folder.'update', $viewData);
    }
    public function update(BackendTagRequest $request ,$id)
    {
        $data   = $request->except('_token');
        $data['t_slug']   = \Str::slug($request->t_name);
        $data['updated_at'] = Carbon::now();
        Tag::find($id)->update($data);

        return redirect()->route('get_backend.tag.index');
    }
    public function delete($id)
    {
        \DB::table('tags')->where('id',$id)->delete();
        return redirect()->back();
    }
}
