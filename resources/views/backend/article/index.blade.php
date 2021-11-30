@extends('layouts.app_backend')
@section('title','Danh sách bài viết')
@section('content')
    <h1>Danh sách bài viết <a href="{{ route('get_backend.article.create') }}" class="btn btn-xs btn-success">Thêm mới</a></h1>
    <div class="block-content">
        <table class="table table-vcenter">
            <thead class="thead-light">
            <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th class="text-center">Ảnh</th>
                <th class="text-center">Danh mục</th>
                <th>Tên</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <th class="text-center" scope="row">{{ $article->id }}</th>
                    <th class="text-center" scope="row">
                        <a href="">
                            <img src="{{pare_url_file($article->a_avatar )}}" class="img-thumbnail" style="width: 60px; height: 60px" alt="">
                        </a>
                    </th>
                    <th class="text-center" scope="row">{{ $article->menu->mn_name ?? "[N\A]" }}</th>
                    <td class="font-w600 font-size-sm">{{ $article->a_name }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                <a href="{{ route('get_backend.article.update', $article->id) }}" class="fa fa-fw fa-pencil-alt"></a>
                            </button>
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                <a href="{{ route('get_backend.article.delete', $article->id) }}" class="fa fa-fw fa-times"></a>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="float-right">
        {!! $articles->appends($query ?? [])->links('vendor.pagination.bootstrap-4') !!}
    </div>

@endsection
