@extends('layouts.app_backend')
@section('title','Chi tiết đơn hàng')
@section('content')
    <h1>
        Chi tiết đơn hàng #{{ $transaction->id }} - Tổng tiền <b>{{ number_format($transaction->t_total_money,0,',','.') }} VNĐ</b>
    </h1>
    <p>Trạng thái <span class="text-{{ $transaction->getStatus($transaction->t_status)['class'] }}">{{ $transaction->getStatus($transaction->t_status)['name'] }}</span>
        - <a href="{{ route('get_backend.transaction.index') }}" class="btn btn-sm btn-alt-primary">Danh sách</a>
    </p>
    <div>
        <a href="{{ route('get_backend.transaction.success', $transaction->id) }}" class="btn btn-sm btn-success">Hoàn Thành</a>
        <a href="{{ route('get_backend.transaction.cancel', $transaction->id) }}" class="btn btn-sm btn-danger">Hủy bỏ</a>
    </div>
    <div class="block-content">
        <table class="table table-vcenter">
            <thead class="thead-light">
            <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th class="text-center">Ảnh</th>
                <th class="text-center">Tên</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Tổng tiền</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $product)
                <tr>
                    <th class="text-center" scope="row">{{ $product->id }}</th>
                    <th class="text-center" scope="row">
                        <a href="">
                            <img src="{{pare_url_file($product->product->pro_avatar )}}" class="img-thumbnail" style="width: 60px; height: 60px" alt="">
                        </a>
                    </th>
                    <td class="text-center">{{ $product->product->pro_name }}</td>
                    <td class="text-center"><span>{{ number_format($product->od_price,0,',','.') }} đ</span></td>
                    <td class="text-center">{{ $product->od_qty }}</td>
                    <td class="text-center"><span>{{ number_format($product->od_price * $product->od_qty,0,',','.') }} đ</span></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                <a href="{{ route('get_backend.order.delete', $product->id) }}" class="fa fa-fw fa-times"></a>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
