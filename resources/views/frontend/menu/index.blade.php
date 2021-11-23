@extends('layouts.app_frontend')
@section('title','Bài viết')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-blog set-bg" data-setbg="{{ asset('frontend/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach($articles as $blog)
                    @include('frontend.components._inc_article',['item'=>$blog])
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
