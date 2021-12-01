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
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" name="k" value="{{ Request::get('k') }}" placeholder="Tìm kiếm...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Danh Mục</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach($categories as $category)
                                                    <li><a href="{{ route('get.category',['slug'=> $category->c_slug]) }}">{{ $category->c_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="card">--}}
{{--                                    <div class="card-heading">--}}
{{--                                        <a data-toggle="collapse" data-target="#collapseTwo">Thương Hiệu</a>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="shop__sidebar__brand">--}}
{{--                                                <ul>--}}
{{--                                                    <li><a href="#">Louis Vuitton</a></li>--}}
{{--                                                    <li><a href="#">Chanel</a></li>--}}
{{--                                                    <li><a href="#">Hermes</a></li>--}}
{{--                                                    <li><a href="#">Gucci</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Giá</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">$0.00 - $50.00</a></li>
                                                    <li><a href="#">$50.00 - $100.00</a></li>
                                                    <li><a href="#">$100.00 - $150.00</a></li>
                                                    <li><a href="#">$150.00 - $200.00</a></li>
                                                    <li><a href="#">$200.00 - $250.00</a></li>
                                                    <li><a href="#">250.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            @foreach($keywords ?? [] as $item)
                                            <div class="shop__sidebar__tags">
                                                <a href="{{ route('get.keyword',['slug' => $item->k_slug]) }}" title="{{ $item->k_name }}">{{ $item->k_name }}</a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
