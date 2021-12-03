@extends('layouts.app_frontend')
@section('title',$title)
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('get.home') }}">Home</a>
                            <span>{{ $title }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                @include('frontend.category.components._inc_sidebar')
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Hiển Thị {{ $products->currentPage() }}–{{ $products->perPage() }} Của {{ $products->total() }} Kết Quả</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ pare_url_file($product->pro_avatar)}}" alt="{{ $product->pro_name }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="{{ route('get.product_detail', ['slug' => $product->pro_slug]) }}"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""> <span>Xem Chi Tiết</span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $product->pro_name }}</h6>
                                    <a href="{{ route('get_ajax.shopping.add', $product->id) }}" class=" js-add-cart">+ Thêm vào giỏ hàng</a>
{{--                                    <div class="rating">--}}
{{--                                        <i class="fa fa-star-o"></i>--}}
{{--                                        <i class="fa fa-star-o"></i>--}}
{{--                                        <i class="fa fa-star-o"></i>--}}
{{--                                        <i class="fa fa-star-o"></i>--}}
{{--                                        <i class="fa fa-star-o"></i>--}}
{{--                                    </div>--}}
                                    <h5>{{ number_format($product->pro_price,0,',','.') }} VNĐ</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="float-right">
                        {!! $products->appends($query ?? [])->links('vendor.pagination.bootstrap-4') !!}
                    </div>
                    {{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="product__pagination">--}}
{{--                                <a class="active" href="#">1</a>--}}
{{--                                <a href="#">2</a>--}}
{{--                                <a href="#">3</a>--}}
{{--                                <span>...</span>--}}
{{--                                <a href="#">21</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
