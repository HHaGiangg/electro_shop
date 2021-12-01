<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendProductRequest;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BackendProductController extends Controller
{
    protected $folder = 'backend.product.';
    public function index()
    {
        $products       =   Product::with('category:id,c_name')->orderByDesc('id')->paginate(10);
        $viewData       = [
            'products'      => $products
        ];
        return view($this->folder.'index', $viewData);
    }
    public function create()
    {
        $categories     =   Category::all();
        $keywords       =   Keyword::all();
        $viewData       =   [
            'categories'  => $categories,
            'keywords'    => $keywords,
            'keywordOld'   => [],
        ];
        return view($this->folder.'create',$viewData);
    }
    // Lưu Keyword sản phẩm
    public function syncKeyword($keywords, $productID)
    {
        $datas = [];
        foreach ($keywords as $keyword)
        {
            $datas[] = [
                'pk_product_id' => $productID,
                'pk_keyword_id'     => $keyword,
            ];
        }
        \DB::table('products_keywords')->where('pk_product_id', $productID)->delete();
        \DB::table('products_keywords')->insert($datas);

    }
    public function store(BackendProductRequest $request)
    {
        $data   = $request->except('_token','pro_avatar');
        $data['pro_slug']   = \Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        //Upload anh
        if ($request->pro_avatar)
        {
            $image  = upload_image('pro_avatar');
            if(isset($image['code']))
            {
                $data['pro_avatar'] = $image['name'];
            }
        }
        $product = Product::create($data);
        //Save Keyword
        if ($request->keywords)
            $this->syncKeyword($request->keywords, $product->id);
        return redirect()->back();

        return redirect()->route('get_backend.product.index');
    }
    public function edit($id)
    {
        $categories     =   Category::all();
        $product        =   Product::find($id);
        $keywords       =   Keyword::all();
        $keywordOld     = \DB::table('products_keywords')
                ->where('pk_product_id', $id)->pluck('pk_keyword_id')->toArray() ?? [];
        $viewData       =   [
            'categories'  => $categories,
            'product'     => $product,
            'keywords'    => $keywords,
            'keywordOld'   => $keywordOld,
        ];
        return view($this->folder.'update', $viewData);
    }
    public function update(BackendProductRequest $request, $id)
    {
        $data   = $request->except('_token','pro_avatar');
        $data['pro_slug']   = \Str::slug($request->pro_name);
        $data['updated_at'] = Carbon::now();
        //Upload anh
        if ($request->pro_avatar)
        {
            $image  = upload_image('pro_avatar');
            if(isset($image['code']))
            {
                $data['pro_avatar'] = $image['name'];
            }
        }

        Product::find($id)->update($data);

        if ($request->keywords)
            $this->syncKeyword($request->keywords, $id);
        return redirect()->route('get_backend.product.index');

        return redirect()->route('get_backend.product.index');
    }
    public function delete($id)
    {
        \DB::table('products')->where('id',$id)->delete();
        return redirect()->back();
    }

}
