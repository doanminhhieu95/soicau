@extends('admin.master') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php $date = date("d-m-Y")  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cập nhật kết quả xổ số
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li>
                <a href="#">Tables</a>
            </li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @if(Session::has('update'))
        <div class="alert alert-{{session('flag')}}">
            {{session('update')}}
        </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Cập nhật kết quả xổ số</h3>
                        <section class="content-header">
                            <div class="row">
                                <form action="{{route('ketqua')}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="">Chọn ngày</label>
                                            <input type="text" readonly="readonly" id="timeCheckIn" value="{{$date}}" class="form-control" name="date" placeholder="Chọn ngày" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Chọn đài</label>
                                            <select class="form-control" id="daido" name="city">
                                            </select>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="position:relative;min-height:300px">
                                            <div id="divkqxs" class="box-ketqua">
                                                <style>
                                                    b.hight-light {
                                                        background-color: #ff0;
                                                    }
                                                </style>
                                                <div class="bang-ketqua" id="ketqua">
                                                </div>
                                                <!-- end -->
                                            </div>
                                            <div id="divkqxs_load" class="form_load"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        Bảng cập nhật
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Đài</th>
                                                    <th>Tình trạng</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dai">
                                            </tbody>
                                        </table>
                                    </div>
                                    <input type="hidden" value="" id="dacbiet" name="giai_1" />
                                    <input type="hidden" value="" id="nhat" name="giai_2" />
                                    <input type="hidden" value="" id="nhi" name="giai_3" />
                                    <input type="hidden" value="" id="ba" name="giai_4" />
                                    <input type="hidden" value="" id="tu" name="giai_5" />
                                    <input type="hidden" value="" id="nam" name="giai_6" />
                                    <input type="hidden" value="" id="sau" name="giai_7" />
                                    <input type="hidden" value="" id="bay" name="giai_8" />
                                    <input type="hidden" value="" id="tam" name="giai_9" />
                                </form>
                            </div>
                        </section>
                        <script src="AdminLTE/dist/js/jquery.min.js"></script>
                        <script src="AdminLTE/dist/js/bootstrap.min.js"></script>
                        <script src="AdminLTE/dist/js/bootstrap-datepicker.js"></script>
                        <script>
                            $(function () {
                                'use strict';
                                var iddate = $('#timeCheckIn').val();
                                var day = iddate.substr(0, 2);
                                var month = iddate.substr(3, 2);
                                var year = iddate.substr(6, 4);
                                var date = year + "-" + month + "-" + day;
                                var ngay = year + "-" + month + "-" + day;
                                var d = new Date(date);
                                var dd = String(d);
                                var ddd = dd.slice(0, 3);
                                if (ddd == "Sun") var thu = 1;
                                if (ddd == "Mon") var thu = 2;
                                if (ddd == "Tue") var thu = 3;
                                if (ddd == "Wed") var thu = 4;
                                if (ddd == "Thu") var thu = 5;
                                if (ddd == "Fri") var thu = 6;
                                if (ddd == "Sat") var thu = 7;
                                $.get("ketqua/ajax/dai/" + thu + "/" + ngay, function (data) {
                                        $("#dai").html(data);
                                    });
                                $.get("ajax/city/" + thu, function (data) {
                                    $("#daido").html(data);
                                    var idcity = $('#daido').val();
                                    var day = $('#timeCheckIn').val();
                                    $.get("ajax/title/" + idcity + "/" + day, function (
                                        data) {
                                        $("#title").html(data);
                                    });
                                    $.get("ajax/ketqua/" + idcity + "/" + day, function (
                                        data) {
                                        $("#ketqua").html(data);
                                        var db = $("#db").html();
                                        var nhat = $("#giainhat").html();
                                        var nhi = $("#giainhi").html();
                                        var ba = $("#giaiba").html();
                                        var tu = $("#giaitu").html();
                                        var nam = $("#giainam").html();
                                        var sau = $("#giaisau").html();
                                        var bay = $("#giaibay").html();
                                        var tam = $("#giaitam").html();
                                        $("#dacbiet").val(db);
                                        $("#nhat").val(nhat);
                                        $("#nhi").val(nhi);
                                        $("#ba").val(ba);
                                        $("#tu").val(tu);
                                        $("#nam").val(nam);
                                        $("#sau").val(sau);
                                        $("#bay").val(bay);
                                        $("#tam").val(tam);
                                    });
                                });
                                var nowTemp = new Date();
                                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(),
                                    0, 0, 0, 0);

                                var checkin = $('#timeCheckIn').datepicker({
                                    onRender: function (date) {
                                        return date.valueOf() > now.valueOf() ? 'disabled' :
                                            '';
                                    }
                                }).on('changeDate', function (ev) {
                                    var iddate = $(this).val();
                                    var day = iddate.substr(0, 2);
                                    var month = iddate.substr(3, 2);
                                    var year = iddate.substr(6, 4);
                                    var date = year + "-" + month + "-" + day;
                                    var ngay = year + "-" + month + "-" + day;
                                    var d = new Date(date);
                                    var dd = String(d);
                                    var ddd = dd.slice(0, 3);
                                    if (ddd == "Sun") var thu = 1;
                                    if (ddd == "Mon") var thu = 2;
                                    if (ddd == "Tue") var thu = 3;
                                    if (ddd == "Wed") var thu = 4;
                                    if (ddd == "Thu") var thu = 5;
                                    if (ddd == "Fri") var thu = 6;
                                    if (ddd == "Sat") var thu = 7;
                                    $.get("ketqua/ajax/dai/" + thu + "/" + ngay, function (data) {
                                        $("#dai").html(data);
                                    });
                                    $.get("ajax/city/" + thu, function (data) {
                                        $("#daido").html(data);
                                        var idcity = $('#daido').val();
                                        var day = $('#timeCheckIn').val();
                                        $.get("ajax/title/" + idcity + "/" + day, function (
                                            data) {
                                            $("#title").html(data);
                                        });
                                        $.get("ajax/ketqua/" + idcity + "/" + day, function (
                                            data) {
                                            $("#ketqua").html(data);
                                            var db = $("#db").html();
                                            var nhat = $("#giainhat").html();
                                            var nhi = $("#giainhi").html();
                                            var ba = $("#giaiba").html();
                                            var tu = $("#giaitu").html();
                                            var nam = $("#giainam").html();
                                            var sau = $("#giaisau").html();
                                            var bay = $("#giaibay").html();
                                            var tam = $("#giaitam").html();
                                            $("#dacbiet").val(db);
                                            $("#nhat").val(nhat);
                                            $("#nhi").val(nhi);
                                            $("#ba").val(ba);
                                            $("#tu").val(tu);
                                            $("#nam").val(nam);
                                            $("#sau").val(sau);
                                            $("#bay").val(bay);
                                            $("#tam").val(tam);
                                        });
                                    });
                                });
                                $("#daido").change(function () {
                                    var idcity = $('#daido').val();
                                    var day = $('#timeCheckIn').val();
                                    $.get("ajax/title/" + idcity + "/" + day, function (data) {
                                        $("#title").html(data);
                                    });
                                    $.get("ajax/ketqua/" + idcity + "/" + day, function (data) {
                                        $("#ketqua").html(data);
                                        var db = $("#db").html();
                                        var nhat = $("#giainhat").html();
                                        var nhi = $("#giainhi").html();
                                        var ba = $("#giaiba").html();
                                        var tu = $("#giaitu").html();
                                        var nam = $("#giainam").html();
                                        var sau = $("#giaisau").html();
                                        var bay = $("#giaibay").html();
                                        var tam = $("#giaitam").html();
                                        $("#dacbiet").val(db);
                                        $("#nhat").val(nhat);
                                        $("#nhi").val(nhi);
                                        $("#ba").val(ba);
                                        $("#tu").val(tu);
                                        $("#nam").val(nam);
                                        $("#sau").val(sau);
                                        $("#bay").val(bay);
                                        $("#tam").val(tam);
                                    });
                                });
                            });
                        </script>
                    </div>
                    <!-- /.box-header -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection