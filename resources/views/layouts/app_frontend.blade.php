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
    {{--Thong bao--}}
    <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css">
    @if(session('toastr'))
        <script>
            var TYPE_MESSAGE = "{{session('toastr.type')}}";
            var MESSAGE = "{{session('toastr.message')}}";
        </script>
    @endif
    {{-- Chat bot   --}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">--}}
    <style>
        html, body {
            background: #fff;
        }
    </style>
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

                                @if(get_data_user('web'))
                                   <span><a href="{{ route('get_user.home') }}" ><i class="fa fa-user"></i>{{ get_data_user('web','name') }}</a></span>
                                    <ul>
                                        <li><a href="{{ route('get.logout') }}">Đăng Xuất</a></li>
                                        <li><a href="{{ route('get_user.home') }}">Profile</a></li>
                                    </ul>
                                @else
                                    <a href="{{ route('get.login') }}" class="login-panel"><i class="fa fa-user"></i> Đăng nhập</a>
                                @endif

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
                        <li class="active"><a href="{{ route('get.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        @foreach($categoriesGlobal as $item)
                            <li><a class="nav-link " title="{{ $item->c_name }}" href="{{ route('get.category', $item->c_slug) }}">{{ $item->c_name }}</a></li>
                        @endforeach
                        <li><a class="nav-link " href="{{ route('get.blog') }}" title="Bài viết">Bài Viết</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('frontend/img/icon/heart.png')}}" alt=""></a>
                    <a href="{{ route('get.shopping') }}"><img src="{{ asset('frontend/img/icon/cart.png')}}" alt="" title="Giỏ Hàng" style="width: 22px; height: 24px"> <span  id="totalCart">{{ \Cart::count() }}</span></a>
{{--                    <div class="price">$0.00</div>--}}
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

<!-- ChatBot -->
{{--<div id="body">--}}
{{--    <div id="chat-circle" class="btn btn-raised">--}}
{{--        <div id="chat-overlay"></div>--}}
{{--        <i class="fa-facebook-messenger">Chat</i>--}}
{{--    </div>--}}

{{--    <div class="chat-box">--}}
{{--        <div class="chat-box-header">--}}
{{--            ChatBot--}}
{{--            <span class="chat-box-toggle"><i class="material-icons">Tắt</i></span>--}}
{{--        </div>--}}
{{--        <div class="chat-box-body">--}}
{{--            <div class="chat-box-overlay">--}}
{{--            </div>--}}
{{--            <div class="chat-logs">--}}

{{--            </div><!--chat-log -->--}}
{{--        </div>--}}
{{--        <div class="chat-input">--}}
{{--            <form>--}}
{{--                <input type="text" id="chat-input" placeholder="Send a message..."/>--}}
{{--                <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">Gửi</i></button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Chatbot End -->

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>

{{--<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>--}}
{{--<script>--}}
{{--    var botmanWidget = {--}}
{{--        aboutText: 'ssdsd',--}}
{{--        introMessage: "✋ Hi! Mình là Bot. Bạn cần giúp đỡ gì không?"--}}
{{--    };--}}
{{--</script>--}}


<script>
    if(typeof TYPE_MESSAGE != "undefined" )
    {
        switch(TYPE_MESSAGE) {
            case 'success':
                toastr.success(MESSAGE)
                break;
            case 'error':
                toastr.error(MESSAGE)
                break;
        }
    }

    $(".js-show-login").click(function (event) {
        event.preventDefault();
        toastr.warning("Vui lòng đăng nhập để thực hiện chức năng này");
        return false
    });
</script>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
    intent="WELCOME"
    chat-title="ShopBot"
    agent-id="96270e85-cd4e-43f5-b963-93ef4ff7f5f1"
    language-code="en"
></df-messenger>
<script>
    $(function () {
        //Chatbot
        //     var INDEX = 0;
        //     $("#chat-submit").click(function(e) {
        //         e.preventDefault();
        //         var msg = $("#chat-input").val();
        //         if(msg.trim() == ''){
        //             return false;
        //         }
        //         generate_message(msg, 'self');
        //         var buttons = [
        //             {
        //                 name: 'Existing User',
        //                 value: 'existing'
        //             },
        //             {
        //                 name: 'New User',
        //                 value: 'new'
        //             }
        //         ];
        //         setTimeout(function() {
        //             generate_message(msg, 'user');
        //         }, 1000)
        //
        //     })
        //
        //     function generate_message(msg, type) {
        //         INDEX++;
        //         var str="";
        //         str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
        //         str += "          <span class=\"msg-avatar\">";
        //         str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
        //         str += "          <\/span>";
        //         str += "          <div class=\"cm-msg-text\">";
        //         str += msg;
        //         str += "          <\/div>";
        //         str += "        <\/div>";
        //         $(".chat-logs").append(str);
        //         $("#cm-msg-"+INDEX).hide().fadeIn(300);
        //         if(type == 'self'){
        //             $("#chat-input").val('');
        //         }
        //         $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
        //     }
        //
        //     function generate_button_message(msg, buttons){
        //         /* Buttons should be object array
        //           [
        //             {
        //               name: 'Existing User',
        //               value: 'existing'
        //             },
        //             {
        //               name: 'New User',
        //               value: 'new'
        //             }
        //           ]
        //         */
        //         INDEX++;
        //         var btn_obj = buttons.map(function(button) {
        //             return  "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\""+button.value+"\">"+button.name+"<\/a><\/li>";
        //         }).join('');
        //         var str="";
        //         str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";
        //         str += "          <span class=\"msg-avatar\">";
        //         str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
        //         str += "          <\/span>";
        //         str += "          <div class=\"cm-msg-text\">";
        //         str += msg;
        //         str += "          <\/div>";
        //         str += "          <div class=\"cm-msg-button\">";
        //         str += "            <ul>";
        //         str += btn_obj;
        //         str += "            <\/ul>";
        //         str += "          <\/div>";
        //         str += "        <\/div>";
        //         $(".chat-logs").append(str);
        //         $("#cm-msg-"+INDEX).hide().fadeIn(300);
        //         $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
        //         $("#chat-input").attr("disabled", true);
        //     }
        //
        //     $(document).delegate(".chat-btn", "click", function() {
        //         var value = $(this).attr("chat-value");
        //         var name = $(this).html();
        //         $("#chat-input").attr("disabled", false);
        //         generate_message(name, 'self');
        //     })
        //
        //     $("#chat-circle").click(function() {
        //         $("#chat-circle").toggle('scale');
        //         $(".chat-box").toggle('scale');
        //     })
        //
        //     $(".chat-box-toggle").click(function() {
        //         $("#chat-circle").toggle('scale');
        //         $(".chat-box").toggle('scale');
        //     })


        //Thêm Giỏ Hàng
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
                alert(results.message)
                if (typeof results.totalCart !== "undefined")
                    $("#totalCart").text(results.totalCart)
                console.log(results)
            });
        })

        //Xóa giỏ hàng
         //$("body").on('click','js-delete-cart',function (event) {
        $(".js-delete-cart").click( function (event) {
            event.preventDefault()
            let $this   = $(this)
            let URL     = $this.attr('href')

            $.ajax({
                url: URL,
            }).done(function( results ) {
                alert(results.message)
                console.log(results)
                if(results.status === 200)
                {
                    $this.parents('tr').remove()

                    if (typeof results.totalCart !== "undefined")
                        $("#totalCart").text(results.totalCart)
                }
            });
        })

        // Cập nhật giỏ hàng
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
                alert(results.message)
                if (typeof results.totalCart !== "undefined")
                    $("#totalCart").text(results.totalCart)
                location.reload();
            });
        })

    })
</script>
</body>

</html>
