@extends('layouts.app_backend')
@section('title','Danh sách thành viên')
@section('content')
    <h1>Danh sách thành viên</h1>
    <div class="row">
        <div class="col-sm-9">
            <!-- Table Head Light -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Danh sách</h3>
                </div>
                @include('backend.user.list')
            </div>
            <!-- END Table Head Light -->
        </div>
        <div class="col-md-5">
{{--            @include('backend.user.form',['route' => route('get_backend.user.update')])--}}
        </div>
    </div>

@endsection
