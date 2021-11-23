<div class="row product__filter">
    @foreach($productHot as $proHot)
    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">

            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{ pare_url_file($proHot->pro_avatar)}}" alt="{{ $proHot->pro_name }}">
{{--                    <span class="label">New</span>--}}
                    <ul class="product__hover">
                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""><span>Yêu Thích</span></a></li>
                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
{{--                        <li><a class="js-preview-product" href="{{ route('get_ajax.product_preview', $proHot->id) }}"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Xem Nhanh</span></a></li>--}}
                        <li><a href="{{ route('get.product_detail',['slug' => $proHot->pro_slug]) }}"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""> <span>Xem Chi Tiết</span></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>{{ $proHot->pro_name }}</h6>
                    <a href="{{ route('get_ajax.shopping.add', $proHot->id) }}" class="js-add-cart">+ Thêm Vào Giỏ Hàng</a>
{{--                    <div class="rating">--}}
{{--                        <i class="fa fa-star-o"></i>--}}
{{--                        <i class="fa fa-star-o"></i>--}}
{{--                        <i class="fa fa-star-o"></i>--}}
{{--                        <i class="fa fa-star-o"></i>--}}
{{--                        <i class="fa fa-star-o"></i>--}}
{{--                    </div>--}}
                    <h5>{{ number_format($proHot->pro_price,0,',','.') }} VNĐ</h5>
{{--                    <div class="product__color__select">--}}
{{--                        <label for="pc-1">--}}
{{--                            <input type="radio" id="pc-1">--}}
{{--                        </label>--}}
{{--                        <label class="active black" for="pc-2">--}}
{{--                            <input type="radio" id="pc-2">--}}
{{--                        </label>--}}
{{--                        <label class="grey" for="pc-3">--}}
{{--                            <input type="radio" id="pc-3">--}}
{{--                        </label>--}}
{{--                    </div>--}}
                </div>
            </div>

    </div>
    @endforeach
    {{--                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">--}}
    {{--                    <div class="product__item">--}}
    {{--                        <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/product-2.jpg')}}">--}}
    {{--                            <ul class="product__hover">--}}
    {{--                                <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""></a></li>--}}
    {{--                                <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>--}}
    {{--                                <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""></a></li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                        <div class="product__item__text">--}}
    {{--                            <h6>Piqué Biker Jacket</h6>--}}
    {{--                            <a href="#" class="add-cart">+ Add To Cart</a>--}}
    {{--                            <div class="rating">--}}
    {{--                                <i class="fa fa-star-o"></i>--}}
    {{--                                <i class="fa fa-star-o"></i>--}}
    {{--                                <i class="fa fa-star-o"></i>--}}
    {{--                                <i class="fa fa-star-o"></i>--}}
    {{--                                <i class="fa fa-star-o"></i>--}}
    {{--                            </div>--}}
    {{--                            <h5>$67.24</h5>--}}
    {{--                            <div class="product__color__select">--}}
    {{--                                <label for="pc-4">--}}
    {{--                                    <input type="radio" id="pc-4">--}}
    {{--                                </label>--}}
    {{--                                <label class="active black" for="pc-5">--}}
    {{--                                    <input type="radio" id="pc-5">--}}
    {{--                                </label>--}}
    {{--                                <label class="grey" for="pc-6">--}}
    {{--                                    <input type="radio" id="pc-6">--}}
    {{--                                </label>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
</div>
