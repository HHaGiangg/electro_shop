@extends('layouts.app_frontend')
@section('title','Trang thanh toán')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Thanh Toán</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('get.home') }}">Trang Chủ</a>
                            <span>Thanh toán đơn hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
{{--                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Bạn có phiếu giảm gía? <a href="#">Click--}}
{{--                                    here</a> to enter your code</h6>--}}
                            <h6 class="checkout__title">Chi tiết hóa đơn</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ Tên<span>*</span></p>
                                        <input type="text" name="t_name" value="{{ $user->name ?? '' }}" required>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="checkout__input">--}}
{{--                                <p>Quốc gia<span>*</span></p>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" name="t_phone" value="{{ $user->phone ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text"  name="t_email" value="{{ $user->email ?? '' }}"required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input name="t_address" required type="text" value="{{ $user->address ?? '' }}" placeholder="Số nhà, ngõ, tên đường, xóm, xã/phường, quận/huyện..." class="checkout__input__add">
{{--                                <input type="text" placeholder="Số nhà, ngõ,...">--}}
                            </div>
{{--                            <div class="checkout__input">--}}
{{--                                <p>Quận/Huyện/Thành phố<span>*</span></p>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
{{--                            <div class="checkout__input">--}}
{{--                                <p>Country/State<span>*</span></p>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
{{--                            <div class="checkout__input">--}}
{{--                                <p>Postcode / ZIP<span>*</span></p>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}

{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="acc">--}}
{{--                                    Create an account?--}}
{{--                                    <input type="checkbox" id="acc">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                                <p>Create an account by entering the information below. If you are a returning customer--}}
{{--                                    please login at the top of the page</p>--}}
{{--                            </div>--}}
{{--                            <div class="checkout__input">--}}
{{--                                <p>Account Password<span>*</span></p>--}}
{{--                                <input type="text">--}}
{{--                            </div>--}}
{{--                            <div class="checkout__input__checkbox">--}}
{{--                                <label for="diff-acc">--}}
{{--                                    NLưu ý về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt để giao hàng--}}
{{--                                    <input type="checkbox" id="diff-acc">--}}
{{--                                    <span class="checkmark"></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <input type="text" name="t_note" required
                                       placeholder=" Lưu ý về đơn đặt hàng của bạn, ví dụ: lưu ý đặc biệt để giao hàng.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Tổng</span></div>
                                <ul class="checkout__total__products">
                                    <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
{{--                                    <li>Subtotal <span>$750.99</span></li>--}}
                                    <li>Tổng tiền: <span>{{ \Cart::subtotal() }}</span></li>
                                </ul>
{{--                                <div class="checkout__input__checkbox">--}}
{{--                                    <label for="acc-or">--}}
{{--                                        Create an account?--}}
{{--                                        <input type="checkbox" id="acc-or">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt--}}
{{--                                    ut labore et dolore magna aliqua.</p>--}}
{{--                                <div class="checkout__input__checkbox">--}}
{{--                                    <label for="payment">--}}
{{--                                        Check Payment--}}
{{--                                        <input type="checkbox" id="payment">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="checkout__input__checkbox">--}}
{{--                                    <label for="paypal">--}}
{{--                                        Paypal--}}
{{--                                        <input type="checkbox" id="paypal">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
                                <button type="submit" class="site-btn">Xác Nhận Thanh Toán</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
