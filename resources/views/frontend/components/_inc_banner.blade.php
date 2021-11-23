<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        @foreach($slide as $item)
        <div class="hero__items set-bg" data-setbg="{{ pare_url_file($item->s_banner) }}" style="width: 1519px; height: 800px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Shop Electro</h6>
                            <h2>Cam Kết Hàng Chính Hãng </h2>
                            <p >Miễn phí vận chuyển, hỗ trợ khách hàng tận nhà, 1 đổi 1 trong vòng 3 ngày nếu sản phẩm lỗi.</p>
                            <a href="#" class="primary-btn">Mua Ngay <span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
{{--        <div class="hero__items set-bg" data-setbg="{{ asset('frontend/img/hero/hero-2.jpg')}}">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-5 col-lg-7 col-md-8">--}}
{{--                        <div class="hero__text">--}}
{{--                            <h6>Summer Collection</h6>--}}
{{--                            <h2>Fall - Winter Collections 2030</h2>--}}
{{--                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering--}}
{{--                                commitment to exceptional quality.</p>--}}
{{--                            <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>--}}
{{--                            <div class="hero__social">--}}
{{--                                <a href="#"><i class="fa fa-facebook"></i></a>--}}
{{--                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                                <a href="#"><i class="fa fa-pinterest"></i></a>--}}
{{--                                <a href="#"><i class="fa fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
<!-- Hero Section End -->
