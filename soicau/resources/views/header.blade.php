<header id="header">
    <div id="banner">
        <a href="/">
            <img src="soicau/upload/files/2018/02/logopng1519257730.png" alt="logo">
        </a>
        <div class="divbanner">
            <div class="col-xs-12">
                <div class="row">
                    <div id="adv" class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div id="hide_float_right_zone3" class="hideQCAlign">
                                    <a href="javascript:HOME.hide_float_right_zone3()">Tắt [X]</a>
                                </div>
                                <div id="float_content_right_zone3" class="QCAlign" style="display: block;">
                                    <div class="zone">
                                        <a href="http://ketquamienbac.top" rel="nofollow" target="_blank">
                                            <img alt="" src="soicau/upload/files/2018/02/soicaumienbac-topgif1519802574.gif" class="img-responsive center-block">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <style>
            @media screen and (max-width: 500px) {
                #site #header #banner {
                    min-height: 165px !important;
                }
            }
        </style>
    </div>
    <ul id="menu">
        <li class="li_home">
            <a href="/">Home</a>
        </li>
        <li class="li_menu_des">
            <a href="/ket-qua/mien-bac">Kết Quả Xổ Số</a>
        </li>
        <li class="li_menu_mobi">
            <a href="/ket-qua/mien-bac">KQXS</a>
        </li>
        <li class="li_menu_sub">
            <a href="#"> Soi cầu</a>
            <ul class="sub-menu" style="display: none">
                <li>
                    <img src="soicau/frontend/t.png" />
                    <a href="/soi-cau/mien-bac">Miền bắc</a>
                </li>
                <li>
                    <img src="soicau/frontend/t.png" />
                    <a href="/soi-cau/mien-trung">Miền trung</a>
                </li>
                <li>
                    <img src="soicau/frontend/t.png" />
                    <a href="/soi-cau/mien-nam">Miền nam</a>
                </li>
            </ul>

        </li>
        <li>
            <a href="/loto-online"> Loto online</a>
        </li>
        <li class="show-sub-menu">
            <img src="soicau/images/icon_menu.png">
            <ul class="sub-menu" style="display: none">
                <li>
                    <img src="soicau/frontend/t.png" />
                    <a href="/so-mo">Sổ mơ</a>
                </li>
                <li>
                    <img src="soicau/frontend/t.png" />
                    <a href="/quay-thu">Quay thử xổ số</a>
                </li>
                <li>
                    <img src="soicau/frontend/t.png" />
                    <a href="/tim-kiem-thanh-vien">tìm thành viên</a>
                </li>
            </ul>

        </li>
    </ul>
    <ul id="sub-menu">

        <li>
            <a class="current" href="/mien-bac">Miền bắc</a>
        </li>
        <li>
            <a class="" href="/mien-trung/phu-yen">Miền trung</a>
        </li>
        <li>
            <a class="" href="/mien-nam/ho-chi-minh">Miền nam</a>
        </li>
    </ul>
</header>
@if(Auth::check())
<div id="user-info">
    Thành viên:
    <a href="/me">{{Auth::user()->name}}</a> |
    <a href="/inbox">Hộp Thư
        <sup class="new-messages">1</sup>
    </a> |
    <a href="{{route('dangxuat')}}">Thoát</a>
    <br>
    <span>Loại tài khoản:
        <b style="color: red;">
            <b style="color: #0C528E;"><?php if(Auth::user()->vip==0) echo "Thường"; else echo"VIP";?></b>
        </b>
    </span>
</div>
@else
<div id="login-box" class="btn-group">
    <a class="btn btn-success" href="{{route('dangky')}}">Đăng Ký</a>
    <a class="btn btn-success" href="{{route('dangnhap')}}">Đăng Nhập</a>
</div>
@endif