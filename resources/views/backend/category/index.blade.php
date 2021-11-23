@extends('layouts.app_backend')
@section('content')
    <h1>Danh sách danh mục sản phẩm</h1>
    <div class="row">
        <div class="col-sm-7">
            <!-- Table Head Light -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Danh sách</h3>
                </div>
                @include('backend.category.list')
            </div>
            <!-- END Table Head Light -->
        </div>
        <div class="col-md-5">
            @include('backend.category.form',['route' => route('get_backend.category.store')])
        </div>
    </div>
@endsection
