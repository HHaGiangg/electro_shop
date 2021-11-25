<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">Đăng nhập</a>
{{--            <a href="#">FAQs</a>--}}
        </div>
{{--        <div class="offcanvas__top__hover">--}}
{{--            <span>Usd <i class="arrow_carrot-down"></i></span>--}}
{{--            <ul>--}}
{{--                <li>USD</li>--}}
{{--                <li>EUR</li>--}}
{{--                <li>USD</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""></a>
        <a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""></a>
        <a href="#"><img src="{{ asset('frontend/img/icon/cart.png')}}" alt="" > <span>1</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Miễn phí vận chuyển, hoàn trả trong 30 ngày hoặc đảm bảo hoàn lại tiền.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
{{--                        <div class="header__top__links">--}}
{{--                            <a href="{{ route('get.login') }}">Đăng nhập</a>--}}
{{--                            <a href="#">FAQs</a>--}}
{{--                        </div>--}}
                        <div class="header__top__hover">
                            <li>
                                @if(get_data_user('web'))
                                   <span><a href="#" ><i class="fa fa-user"></i>{{ get_data_user('web','name') }}</a></span>
                                    <ul>
                                        <li><a href="{{ route('get.logout') }}">Đăng Xuất</a></li>
                                        <li><a href="#">Đơn Hàng</a></li>
                                    </ul>
                                @else
                                    <a href="{{ route('get.login') }}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                                @endif
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ route('get.home') }}"><img src="{{ asset('frontend/img/lo_go.png')}}" alt="" style="height: 35px; width: 196px" ></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('get.home') }}">Home</a></li>
{{--                        <li><a href="./shop.html">Shop</a></li>--}}
                        <li><a href="">Danh Mục</a>
                            <ul class="dropdown">
                                @foreach($categoriesGlobal as $item)
                                <li><a title="{{ $item->c_name }}" href="{{ route('get.category', $item->c_slug) }}">{{ $item->c_name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
{{--                        <li><a href="#">Pages</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li><a href="./about.html">About Us</a></li>--}}
{{--                                <li><a href="./shop-details.html">Shop Details</a></li>--}}
{{--                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>--}}
{{--                                <li><a href="./checkout.html">Check Out</a></li>--}}
{{--                                <li><a href="./blog-details.html">Blog Details</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="{{ route('get.blog') }}" title="Bài viết">Bài Viết</a></li>
                        <li><a href="./contact.html">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""></a>
                    <a href="{{ route('get.shopping') }}"><img src="{{ asset('frontend/img/icon/cart.png')}}" alt="" title="Giỏ Hàng" style="width: 22px; height: 24px"> <span>{{ \Cart::count() }}</span></a>
                    <div class="price">$0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->


@yield('content')

<!-- Footer Section Begin -->
@include('frontend.components._inc_footer')
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.slicknav.js')}}"></script>
<script src="{{ asset('frontend/js/mixitup.min.j')}}s"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('frontend/js/main.js')}}"></script>

<script>
    $(function () {
        // $(".js-preview-product").click(function (event) {
        //         event.preventDefault()
        //         let $this = $(this)
        //         let URL     = $this.attr('href')
        //     $.ajax({
        //         url: URL,
        //     }).done(function( results ) {
        //             if(results.status === 200)
        //             {
        //                 $("#productView").html(results.html).modal({
        //                     show : true
        //                 })
        //             }
        //             console.log(results)
        //         });
        // });
        // $("body").on('click','js-add-cart',function (event) {
        $(".js-add-cart").click( function (event) {
            event.preventDefault()
            let $this   = $(this)
            let URL     = $this.attr('href')
            let qty     = 1
            let $elementQty = $this.parents('.box-qty').find(".val-qty")
            if($elementQty.length)
            {
                qty = $elementQty.val()
            }
            $.ajax({
                url: URL,
                data : {
                    qty : qty
                }
            }).done(function( results ) {
                console.log(results)
            });
        })

         //$("body").on('click','js-delete-cart',function (event) {
        $(".js-delete-cart").click( function (event) {
            event.preventDefault()
            let $this   = $(this)
            let URL     = $this.attr('href')

            $.ajax({
                url: URL,
            }).done(function( results ) {
                console.log(results)
                if(results.status === 200)
                {
                    $this.parents('tr').remove()
                }
            });
        })


        $(".js-update-cart").click( function (event) {
            event.preventDefault()
            let $this   = $(this)
            let URL     = $this.attr('href')

            let $elementQty = $this.parents('tr').find(".value-qty")
            if($elementQty.length)
            {
                qty = $elementQty.val()
            }
             console.log(qty)
            $.ajax({
                url: URL,
                data : {
                    qty : qty
                }
            }).done(function( results ) {
                // console.log(results)
                location.reload();
            });
        })

    })
</script>
</body>

</html>
