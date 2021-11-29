@extends('layouts.app_frontend')
@section('title',$product->pro_name)
@section('content')
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{ route('get.home') }}">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Chi Tiết Sản Phẩm</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ pare_url_file($product->pro_avatar) }}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ asset('frontend/img/shop-details/thumb-2.png')}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ asset('frontend/img/shop-details/thumb-3.png')}}">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ asset('frontend/img/shop-details/thumb-4.png')}}">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ pare_url_file($product->pro_avatar) }}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset('frontend/img/shop-details/product-big-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset('frontend/img/shop-details/product-big.png')}}" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset('frontend/img/shop-details/product-big-4.png')}}" alt="">
                                    <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{ $product->pro_name }}</h4>
{{--                            <div class="rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-o"></i>--}}
{{--                                <span> - 5 Reviews</span>--}}
{{--                            </div>--}}
                            <h3>{{ number_format($product->pro_price,0,',','.') }} VNĐ</h3>
{{--                            <h3>$270.00 <span>70.00</span></h3>--}}
                            <p> {{ $product->pro_description }}</p>
{{--                            <div class="product__details__option">--}}
{{--                                <div class="product__details__option__size">--}}
{{--                                    <span>Size:</span>--}}
{{--                                    <label for="xxl">xxl--}}
{{--                                        <input type="radio" id="xxl">--}}
{{--                                    </label>--}}
{{--                                    <label class="active" for="xl">xl--}}
{{--                                        <input type="radio" id="xl">--}}
{{--                                    </label>--}}
{{--                                    <label for="l">l--}}
{{--                                        <input type="radio" id="l">--}}
{{--                                    </label>--}}
{{--                                    <label for="sm">s--}}
{{--                                        <input type="radio" id="sm">--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="product__details__option__color">--}}
{{--                                    <span>Color:</span>--}}
{{--                                    <label class="c-1" for="sp-1">--}}
{{--                                        <input type="radio" id="sp-1">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-2" for="sp-2">--}}
{{--                                        <input type="radio" id="sp-2">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-3" for="sp-3">--}}
{{--                                        <input type="radio" id="sp-3">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-4" for="sp-4">--}}
{{--                                        <input type="radio" id="sp-4">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-9" for="sp-9">--}}
{{--                                        <input type="radio" id="sp-9">--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="product__details__cart__option  box-qty">
                                <div class="quantity">
                                    <div class="pro-qty ">
                                        <input type="text" class="val-qty" value="1">
                                    </div>
                                </div>
                                <a href="{{ route('get_ajax.shopping.add', $product->id) }}" class="primary-btn js-add-cart">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Đảm Bảo Thanh Toán An Toàn</span></h5>
                                <img src="{{ asset('frontend/img/shop-details/details-payment.png')}}" alt="">
                                <ul>
{{--                                    <li><span>SKU:</span> 3812912</li>--}}
                                    <li><span>Danh Mục:</span><a href="{{ route('get.category',['slug' => $product->category->c_slug ?? '']) }}"> {{ $product->category->c_name ?? "[N\A]" }}</a> </li>
                                    @if($product->keywords && !$product->keywords->isEmpty())
                                    <li>
                                        @foreach($product->keywords as $keyword)
                                        <span>Từ Khóa:</span>
                                            <a href="{{ route('get.keyword',['slug' => $keyword->k_slug]) }}" title="{{ $keyword->k_name }}">{{ $keyword->k_name }}</a>
                                        @endforeach
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                       role="tab">Mô Tả Sản Phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Thông Số Kỹ Thuật</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
{{--                                        <p class="note">{{ $product->pro_description }}</p>--}}
                                        <div class="product__details__tab__content__item">
                                            <h5>Giới Thiệu Sản Phẩm</h5>
                                            <p>{!! $product->pro_content !!}</p>
                                        </div>
{{--                                        <div class="product__details__tab__content__item">--}}
{{--                                            <h5>Material used</h5>--}}
{{--                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made--}}
{{--                                                from synthetic materials, not natural like wool. Polyester suits become--}}
{{--                                                creased easily and are known for not being breathable. Polyester suits--}}
{{--                                                tend to have a shine to them compared to wool and cotton suits, this can--}}
{{--                                                make the suit look cheap. The texture of velvet is luxurious and--}}
{{--                                                breathable. Velvet is a great choice for dinner party jacket and can be--}}
{{--                                                worn all year round.</p>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="col-xl-12">
                                            <!-- Striped Table -->
                                            <div class="block block-rounded">
                                                <div class="block-header">
                                                    <h3 class="block-title">Thông số kỹ thuật</h3>
                                                </div>
                                                <div class="block-content">
                                                    <table class="table table-striped table-vcenter">
                                                        <tbody>
                                                        <tr>
                                                            <td class="font-w600 font-size-sm">
                                                                <a href="be_pages_generic_profile.html">Justin Hunt</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-primary">Personal</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 font-size-sm">
                                                                <a href="be_pages_generic_profile.html">Brian Cruz</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-success">VIP</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 font-size-sm">
                                                                <a href="be_pages_generic_profile.html">Danielle Jones</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-info">Business</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 font-size-sm">
                                                                <a href="be_pages_generic_profile.html">Carol Ray</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-info">Business</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 font-size-sm">
                                                                <a href="be_pages_generic_profile.html">Melissa Rice</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-primary">Personal</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 font-size-sm">
                                                                <a href="be_pages_generic_profile.html">Melissa Rice</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-danger">Disabled</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END Striped Table -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản Phẩm Liên Quan</h3>
                </div>
            </div>
            <div class="row">
            @foreach($productsRelated as $item)
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ pare_url_file($item->pro_avatar) }}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="{{ route('get.product_detail',['slug' => $item->pro_slug]) }}"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""><span>Xem Chi Tiết</span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $item->pro_name }}</h6>
                            <a href="#" class="add-cart">+ Thêm Vào Giỏ Hàng</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>{{ number_format($item->pro_price,0,',','.') }} VNĐ</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->
@endsection
