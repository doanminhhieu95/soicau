@extends('master') @section('content')
<div class="site-content container">
    @if(Session::has('dangky'))
    <div class="alert alert-success">
        {{Session::get('dangky')}}
    </div>
    @endif @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err) {{$err}}
        <br/> @endforeach
    </div>
    @endif
    <h3 class="section-title">Đăng Ký Thành Viên</h3>
    <form action="{{route('dangky')}}" method="post">
        {{csrf_field()}}

        <div>
            <label for="phone">Số điện thoại</label>
            <input id="phone" type="text" name="phone" onkeypress="return USER.keypress(event);" maxlength="12" minlength="11" required
                 class="form-control"/>
            <p class="p_title">
                Hãy đảm bảo là số điện thoại của bạn để:
                <br /> - Hỗ trợ trực tiếp.
                <br /> - Lấy lại mật khẩu khi Bạn quên mật khẩu.

            </p>

        </div>
        <div>
            <label for="phone">Nick Name</label>
            <input id="nickname" type="text" name="name" required minlength="6" maxlength="255" class="form-control"/>
            <p class="p_title">
                - Nick name CHỈ gồm chữ cái và số và dấu gạch dưới. KHÔNG bao gồm kí tự tiếng việt và ký tự đặc biệt.
            </p>
        </div>
        <div>
            <label for="phone">Email:</label>
            <input id="email" type="email" name="email" required maxlength="255" class="form-control"/>
            <p class="p_title">
                - Nhập email đang sử dụng để có thể lấy lại mật khẩu.

            </p>
        </div>
        <div>
            <label for="password">Mật Khẩu</label>
            <input type="password" name="password" id="password" minlength="6" maxlength="255" required class="form-control"/>
        </div>
        <div>
            <label for="password">Nhập lại mật khẩu</label>
            <input type="password" name="repassword" id="repassword" required minlength="6" maxlength="255" class="form-control"/>
        </div>

        <div class="div_submit">
            <input class="btn btn-success" type="submit" value="Đăng ký">
            <a href="/" class="btn btn-warning">Hủy bỏ</a>
        </div>
    </form>
</div>
@endsection