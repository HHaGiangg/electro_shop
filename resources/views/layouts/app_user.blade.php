<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    <style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

        .vertical-nav {
            min-width: 17rem;
            width: 17rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.4s;
        }

        .page-content {
            width: calc(100% - 17rem);
            margin-left: 17rem;
            transition: all 0.4s;
        }

        /* for toggle behavior */

        #sidebar.active {
            margin-left: -17rem;
        }

        #content.active {
            width: 100%;
            margin: 0;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -17rem;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content {
                width: 100%;
                margin: 0;
            }
            #content.active {
                margin-left: 17rem;
                width: calc(100% - 17rem);
            }
        }

        /*
        *
        * ==========================================
        * FOR DEMO PURPOSE
        * ==========================================
        *
        */

        body {
            /*background: #599fd9;*/
            /*background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);*/
            /*background: linear-gradient(to right, #599fd9, #c2e59c);*/
            min-height: 100vh;
            overflow-x: hidden;
        }

        .separator {
            margin: 3rem 0;
            border-bottom: 1px dashed #fff;
        }

        .text-uppercase {
            letter-spacing: 0.1em;
        }

        .text-gray {
            color: #aaa;
        }

    </style>
</head>
<body>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="https://bootstrapious.com/i/snippets/sn-v-nav/avatar.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">{{ get_data_user('web','name') }}</h4>
                <p class="font-weight-light text-muted mb-0">{{ get_data_user('web','phone') }}</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

    <ul class="nav flex-column bg-white mb-0">
        @foreach(config('nav.user') as $item)
        <li class="nav-item">
            <a href="{{ route($item['route'], isset($item['param']) ? get_data_user('web') : '') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa {{ $item['icon'] }} mr-3 text-primary fa-fw"></i>
                {{ $item['name'] }}
            </a>
        </li>
        @endforeach
    </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

    <!-- Demo content -->
    @yield('content')
</div>
<!-- End demo content -->
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
    $(function() {
        // Sidebar toggle behavior
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
        });
    });
</script>
</body>
</html>
