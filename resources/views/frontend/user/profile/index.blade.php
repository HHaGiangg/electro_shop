@extends('layouts.app_user')
@section('title','Cập nhật thông tin')
@section('content')
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Tên</label>
            <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Tên">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ email</label>
            <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Địa chỉ </label>
            <input type="text" class="form-control" value="{{ $user->address }}" name="address" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số điện thoại</label>
            <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" placeholder="Số điện thoại">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
