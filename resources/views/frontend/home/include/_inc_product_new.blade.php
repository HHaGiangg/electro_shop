<div class="row product__filter">
@foreach($productNew as $proNew)
    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
    <div class="product__item sale">
        <div class="product__item__pic set-bg"  data-setbg="{{ pare_url_file($proNew->pro_avatar)}}" alt="{{ $proNew->pro_name }}">
            <span class="label">New</span>
            <ul class="product__hover">
                <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""><span>Yêu Thích</span></a></li>
                <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                {{--                        <li><a class="js-preview-product" href="{{ route('get_ajax.product_preview', $proHot->id) }}"><img src="{{ asset('frontend/img/icon/compare.png')}}" alt=""> <span>Xem Nhanh</span></a></li>--}}
                <li><a href="{{ route('get.product_detail',['slug' => $proNew->pro_slug]) }}"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""> <span>Xem Chi Tiết</span></a></li>
            </ul>
        </div>
        <div class="product__item__text">
            <h6>{{ $proNew->pro_name }}</h6>
            <a href="{{ route('get_ajax.shopping.add', $proNew->id) }}" class="js-add-cart">+ Thêm Vào Giỏ Hàng</a>
            {{--                    <div class="rating">--}}
            {{--                        <i class="fa fa-star-o"></i>--}}
            {{--                        <i class="fa fa-star-o"></i>--}}
            {{--                        <i class="fa fa-star-o"></i>--}}
            {{--                        <i class="fa fa-star-o"></i>--}}
            {{--                        <i class="fa fa-star-o"></i>--}}
            {{--                    </div>--}}
            <h5>{{ number_format($proNew->pro_price,0,',','.') }} VNĐ</h5>
        </div>
    </div>
</div>
@endforeach
</div>
