@extends('layouts.app_backend')
@section('title','Cập nhật danh mục blog')
@section('content')
    <h1>Danh sách Tag</h1>
    <div class="row">
        <div class="col-sm-7">
            <!-- Table Head Light -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Danh sách</h3>
                </div>
                @include('backend.menu.list')
            </div>
            <!-- END Table Head Light -->
        </div>
        <div class="col-md-5">
            @include('backend.menu.form',['route' => route('get_backend.menu.update', $menu->id)])
        </div>
    </div>

@endsection
