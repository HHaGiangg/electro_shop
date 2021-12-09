@extends('layouts.app_backend')
@section('title','Danh sách đơn hàng')
@section('content')
    <h1>Danh sách đơn hàng</h1>
    <form action="">
        <button type="submit" name="export" value="true" class="btn btn-info"><i class="fa fa-save">Export</i></button>
    </form>
    <div class="block-content">

        <table class="table table-vcenter" id="jsDatatable">
            <thead class="thead-light">
            <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th class="text-center">Tên</th>
                <th class="text-center">Số điện thoại</th>
                <th class="text-center">Thành viên</th>
                <th class="text-center">Số tiền</th>
                <th class="text-center">Trạng Thái</th>
                <th class="text-center">Ghi Chú</th>
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
                    <td class="text-center">
                        @if($transaction->t_user_id)
                            <span class="badge badge-success">Thành viên</span>
                        @else
                            <span class="badge badge-primary">Khách</span>
                        @endif
                    </td>
                    <td class="text-center"><span>{{ number_format($transaction->t_total_money,0,',','.') }} đ</span></td>
                    <td class="text-center"><span class="text-{{ $transaction->getStatus($transaction->t_status)['class'] }}">{{ $transaction->getStatus($transaction->t_status)['name'] }}</span></td>
                    <td class="text-center">{{ $transaction->t_note }}</td>
                    <td class="text-center">{{ $transaction->created_at}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                <a href="{{ route('get_backend.transaction.view', $transaction->id) }}" class="fa fa-eye"></a>
                            </button>
                            @if($transaction->t_status == \App\Models\Transaction::STATUS_DEFAULT)
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                <a href="{{ route('get_backend.transaction.delete', $transaction->id) }}" class="fa fa-fw fa-times"></a>
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
