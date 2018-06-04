@extends('master') @section('content')
<div class="site-content container">
@if(Session::has('dangnhap'))
    <div class="alert alert-danger">
        {{Session::get('dangnhap')}}
    </div>
    @endif
    <h3 class="section-title">Đăng Nhập</h3>
    <form method="POST" action="{{route('dangnhap')}}" autocomplete="off">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>
            <label for="phone">Số điện thoại</label>
            <input id="email" type="number" name="phone" autocomplete="off" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" class="form-control" required>
        </div>
        <div>
            <label for="password">Mật Khẩu</label>
            <input type="password" name="password" id="password" autocomplete="off" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" class="form-control" required>
        </div>
        <div style="padding: 10px;">
            <input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Ghi nhớ
        </div>
        <div>
            <button class="btn btn-success" type="submit">Đăng nhập</button>
            <a href="/resetPassword" class="btn btn-warning">Quên mật khẩu</a>
        </div>
    </form>
</div>
@endsection