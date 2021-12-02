@extends('layouts.app_frontend')
@section('title','Trang Chủ')
@section('content')
    @include('frontend.components._inc_banner')
    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                @if(isset($categoriesHot[0]) && $cate = $categoriesHot[0])
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ pare_url_file($cate->c_avatar)}}" alt="{{ $cate->c_name }}">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $cate->c_name }}</h2>
                            <a href="{{ route('get.category',['slug' => $cate->c_slug] ) }}" title="{{ $cate->c_name }}">Mua Ngay</a>
                        </div>
                    </div>
                </div>
                @endif
                    @if(isset($categoriesHot[1]) && $cate = $categoriesHot[1])
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ pare_url_file($cate->c_avatar)}}" alt="{{ $cate->c_name }}">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $cate->c_name }}</h2>
                            <a href="{{ route('get.category',['slug' => $cate->c_slug] ) }}" title="{{ $cate->c_name }}">Mua Ngay</a>
                        </div>
                    </div>
                </div>
                    @endif
                    @if(isset($categoriesHot[2]) && $cate = $categoriesHot[2])
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ pare_url_file($cate->c_avatar)}}" alt="{{ $cate->c_name }}" style="width: 480px; height: 400px">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $cate->c_name }}</h2>
                            <a href="{{ route('get.category',['slug' => $cate->c_slug] ) }}" title="{{ $cate->c_name }}">Mua Ngay</a>
                        </div>
                    </div>
                </div>
                    @endif
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản Phẩm Nổi Bật</li>
{{--                        <li data-filter=".hot-sales">Hot Sales</li>--}}
                    </ul>
                </div>
            </div>
            @include('frontend.home.include._inc_product_hot',['productHot'=>$productsHot])
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li data-filter=".new-arrivals">Sản Phẩm Mới</li>
                        {{--                        <li data-filter=".hot-sales">Hot Sales</li>--}}
                    </ul>
                </div>
            </div>
            @include('frontend.home.include._inc_product_new',['productNew'=>$productsNew])
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Bàn Phím Cơ <br /> <span>Laptop</span> <br /> Tai Nghe</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{ asset('frontend/img/rog.png')}}"  alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
{{--                            <h5>$29.99</h5>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Giao dịch trong tuần</span>
                        <h2>Nhiều mẫu laptop đẹp</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Ngày</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Tiếng</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Phút</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Giây</p>
                            </div>
                        </div>
{{--                        <a href="" class="primary-btn">Shop now</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/instagram/instagram-1.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/instagram/instagram-2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/instagram/instagram-3.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/instagram/instagram-4.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/instagram/instagram-5.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset('frontend/img/instagram/instagram-6.jpg')}}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <h3>#Electro_shop</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tin Tức Mới</span>
                        <h2>Xu Hướng Công Nghệ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('frontend.home.include._inc_lastest_blog')
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
@endsection
