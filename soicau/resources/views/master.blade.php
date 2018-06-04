<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Soi cau,bach thu lo, xsmb, soi lo de, soi cau lo de mien bac, soi cau mien bac, dien dan soi cau, dien dan chem gio, soi cau mb, soi cau xs, soi cau lo de mien phi, soi cau lo de hang ngay,rong bach kim,gio vang chot so,soi au mien trung,soi cau mien nam">
    <meta name="description" content="Soi cầu,bạch thủ lô, xsmb,soi cầu lô đề miền bắc,soi cầu miền bắc,soi cầu miền nam,soi cầu miền trung,diễn đàn soi cầu, diễn đàn chém gió, soi cầu mb, soi cầu xs, soi cầu lô đề miễn phí, soi cầu lô đề hàng ngày,rồng bạch kim,giờ vàng chốt số ngày 12/03/2018 ">
    <title> Soi cầu miền Bắc hôm nay 12/03/2018|diễn đàn xổ số |bạch thủ lô chuẩn - Soi Cầu 366 </title>


    <meta property="og:title" content="Soi Cầu 366 ">
    <meta property="og:type" content="article">
    <meta property="og:url" content="/">
    <meta property="og:image" content="/upload/files/2016/09/logopng1474901806.png">

    <meta name="twitter:card" content="Soi Cầu 366 ">
    <meta name="twitter:site" content="soicau366.com">
    <meta name="twitter:title" content="Soi Cầu 366 ">
    <meta name="twitter:description" content=" Soi cầu,bạch thủ lô, xsmb,soi cầu lô đề miền bắc,soi cầu miền bắc,soi cầu miền nam,soi cầu miền trung,diễn đàn soi cầu, diễn đàn chém gió, soi cầu mb, soi cầu xs, soi cầu lô đề miễn phí, soi cầu lô đề hàng ngày,rồng bạch kim,giờ vàng chốt số ngày 12/03/2018 ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="soicau/img/favicon.ico" />
    <link href="soicau/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <link href="soicau/misc/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="soicau/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="soicau/css/maps/jquery-jvectormap-2.0.3.min.css" />
    <link href="soicau/css/icheck/flat/green.css" rel="stylesheet" />
    <link rel="stylesheet" href="soicau/css/site.css">
    <link rel="stylesheet" href="soicau/frontend/css/home4.css">
</head>

<body>
    <noscript id="deferred-styles">
    </noscript>
    <script>
        var loadDeferredStyles = function () {
            var addStylesNode = document.getElementById("deferred-styles");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
            webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) raf(function () {
            window.setTimeout(loadDeferredStyles, 0);
        });
        else window.addEventListener('load', loadDeferredStyles);
    </script>
    <div class="container">
        <div id="site">
        @include('header')
        @yield('content')
        @include('footer')
        
        </div>
    </div>
    <!-- Bootstrap JavaScript -->
    @include('script')
    @yield('script')
</body>

</html>