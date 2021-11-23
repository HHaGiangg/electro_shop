@extends('layouts.app_backend')
@section('title','Danh sách tags')
@section('content')
    <h1>Danh sách Tag</h1>
    <div class="row">
        <div class="col-sm-7">
            <!-- Table Head Light -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Danh sách</h3>
                </div>
                @include('backend.tag.list')
            </div>
            <!-- END Table Head Light -->
        </div>
        <div class="col-md-5">
            @include('backend.tag.form',['route' => route('get_backend.tag.store')])
        </div>
    </div>

@endsection
