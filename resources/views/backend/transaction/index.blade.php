@extends('layouts.app_backend')
@section('title','Danh sách đơn hàng')
@section('content')
    <h1>Danh sách đơn hàng</h1>
    <div class="block-content">
        <table class="table table-vcenter">
            <thead class="thead-light">
            <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th class="text-center">Tên</th>
                <th class="text-center">Số điện thoại</th>
                <th class="text-center">Số tiền</th>
                <th class="text-center">Trạng Thái</th>
                <th class="text-center">Thời gian</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <th class="text-center" scope="row">{{ $transaction->id }}</th>
                    <th class="text-center" scope="row">{{ $transaction->t_name }}</th>
                    <td class="text-center">{{ $transaction->t_phone }}</td>
                    <td class="text-center"><span>{{ number_format($transaction->t_total_money,0,',','.') }} đ</span></td>
                    <td class="text-center"><span class="text-{{ $transaction->getStatus($transaction->t_status)['class'] }}">{{ $transaction->getStatus($transaction->t_status)['name'] }}</span></td>
                    <td class="font-w600 font-size-sm">{{ $transaction->created_at}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                <a href="{{ route('get_backend.transaction.view', $transaction->id) }}" class="fa fa-eye"></a>
                            </button>
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                <a href="{{ route('get_backend.transaction.delete', $transaction->id) }}" class="fa fa-fw fa-times"></a>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
