@extends('layouts.app_frontend')
@section('title','Giỏ hàng của bạn')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ Hàng Của Bạn</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('get.home') }}">Trang Chủ</a>
{{--                            <a href="#">Shop</a>--}}
                            <span>Giỏ Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{ pare_url_file($product->options->image)}}" alt="" style="width: 90px; height: 90px">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{ $product->name }}</h6>
                                        <h5>{{ number_format($product->price) }} VNĐ</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="{{ $product->qty }}">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">{{ number_format($product->price * $product->qty) }} VNĐ</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{ route('get.home') }}">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Cập nhật giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Code khuyến mãi</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Áp dụng</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Tổng giỏ hàng</h6>
                        <ul>
{{--                            <li>Tổng phụ <span>{{ \Cart::subtotal() }} VNĐ</span></li>--}}
                            <li>Tổng tất cả <span>{{ \Cart::subtotal(0) }} VNĐ</span></li>
                        </ul>
                        <a href="{{ route('get.shopping.checkout') }}" class="primary-btn">Xác nhận thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
