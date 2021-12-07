<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <style>
        /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('https://bootstrapious.com/i/snippets/sn-page-split/bg.jpg');
            background-size: cover;
            background-position: center center;
        }
    </style>
    <title>Đăng Nhập</title>

</head>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-5 d-none d-md-flex bg-image"></div>

        <!-- The content half -->
        <div class="col-md-7 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">Lấy lại mật khẩu</h3>
                            <p class="text-muted mb-4">Điền email để lấy lại mật khẩu.</p>
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="inputEmail" type="email" name="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Gửi xác nhận</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>

</body>
</html>
