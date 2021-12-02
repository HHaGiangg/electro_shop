@extends('layouts.app_backend')
@section('title','Danh sách sản phẩm')
@section('content')
    <h1>Danh sách sản phẩm <a href="{{ route('get_backend.product.create') }}" class="btn btn-xs btn-success">Thêm mới</a></h1>
    <div class="block-content">
        <table class="table table-vcenter" id="jsDatatable">
            <thead class="thead-light">
            <tr>
                <th class="text-center" style="width: 50px;">ID</th>
                <th class="text-center">Ảnh</th>
                <th class="text-center">Tên</th>
                <th class="text-center">Danh Mục</th>
                <th>Trạng Thái</th>
                <th>Sản phẩm mới</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th class="text-center" scope="row">{{ $product->id }}</th>
                    <th class="text-center" scope="row">
                        <a href="">
                            <img src="{{pare_url_file($product->pro_avatar )}}" class="img-thumbnail" style="width: 60px; height: 60px" alt="">
                        </a>
                    </th>
                    <td class="font-w600 font-size-sm" style="width: 300px">{{ $product->pro_name }}</td>
                    <td class="font-w600 font-size-sm">{{ $product->category->c_name ?? "[N/A]" }}</td>
                    <td class="font-w600 font-size-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" disabled id="inlineRadio2" value="1" {{ $product->pro_hot == 1  ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineRadio2">Nổi bật</label>
                        </div>
                    </td>
                    <td class="font-w600 font-size-sm">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" disabled id="inlineRadio2" value="1" {{ $product->pro_active == 1  ? "checked" : "" }}>
                            <label class="form-check-label" for="inlineRadio2">Hiển thị</label>
                        </div>
                    </td>
                    <td class="text-danger"><span>{{ number_format($product->pro_price,0,',','.') }} đ</span></td>
                    <td class="font-w600 font-size-sm">{{ $product->pro_number }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                                <a href="{{ route('get_backend.product.update', $product->id) }}" class="fa fa-fw fa-pencil-alt"></a>
                            </button>
                            <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                                <a href="{{ route('get_backend.product.delete', $product->id) }}" class="fa fa-fw fa-times"></a>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
