@extends('layouts.app_backend')
@section('content')
    <!-- Overview -->
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <!-- Pending Orders -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $countProduct }}</dt>
                        <dd class="text-muted mb-0">Sản phẩm</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-database font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('get_backend.product.index') }}">
                        Xem tất cả sản phẩm
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Pending Orders -->
        </div>
        <div class="col-sm-6 col-xl-3">
            <!-- New Customers -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $countUser }}</dt>
                        <dd class="text-muted mb-0">Thành viên</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-users font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('get_backend.user.index') }}">
                        Xem tất cả thành viên
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END New Customers -->
        </div>
        <div class="col-sm-6 col-xl-3">
            <!-- Messages -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $countTransaction }}</dt>
                        <dd class="text-muted mb-0">Đơn hàng</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-shopping-cart font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('get_backend.transaction.index') }}">
                        Xem tất cả đơn hàng
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Messages -->
        </div>
        <div class="col-sm-6 col-xl-3">
            <!-- Conversion Rate -->
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $countArticle }}</dt>
                        <dd class="text-muted mb-0">Blog</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-blog font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{ route('get_backend.article.index') }}">
                        Xem tất cả bài viết
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
            <!-- END Conversion Rate-->
        </div>
    </div>
    <!-- END Overview -->
    <!-- Đơn hàng mới -->
    <div class="row">
        <div class="col-xl-12 d-flex flex-column">
            <!-- Earnings Summary -->
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Đơn hàng mới</h3>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <div class="block-content">
                        <table class="table table-vcenter">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-center" style="width: 50px;">ID</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Số tiền</th>
                                <th class="text-center">Ghi Chú</th>
                                <th class="text-center">Thời gian</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <th class="text-center" scope="row">{{ $transaction->id }}</th>
                                    <th class="text-center" scope="row">{{ $transaction->t_name }}</th>
                                    <td class="text-center">{{ $transaction->t_phone }}</td>
                                    <td class="text-center"><span>{{ number_format($transaction->t_total_money,0,',','.') }} đ</span></td>
                                    <td class="text-center">{{ $transaction->t_note }}</td>
                                    <td class="text-center">{{ $transaction->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- END Earnings Summary -->
        </div>
        <!-- Thành viên mới -->
        <div class="col-xl-12 d-flex flex-column">
            <!-- Earnings Summary -->
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Thành viên mới</h3>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <div class="block-content">
                        <table class="table table-vcenter">
                            <thead class="thead-light">
                            <tr>
                                <th class="text-center" style="width: 50px;">ID</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Điện thoại</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th class="text-center" scope="row">{{ $user->id }}</th>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <th class="text-center" >{{ $user->email }}</th>
                                    <th class="text-center" >{{ $user->phone }}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Earnings Summary -->
        </div>
        <!-- End -->
    </div>
    <!-- End -->

@endsection
