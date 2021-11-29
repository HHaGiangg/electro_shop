@extends('layouts.app_user')
@section('title','Chi tiết đơn hàng')
@section('content')
{{--    <div>--}}
{{--        <a href="{{ route('get_user.transaction.cancel', $transaction->id) }}" class="btn btn-sm btn-danger mb-2">Hủy bỏ</a>--}}
{{--    </div>--}}
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
                            @if($transaction->t_status == \App\Models\Transaction::STATUS_DEFAULT)
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                <a href="{{ route('get_user.order.delete', $product->id) }}" class="fa fa-fw fa-times"></a>
                            </button>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
