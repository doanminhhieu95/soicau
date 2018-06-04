@extends('admin.master') @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php $date = date("d-m-Y")  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý Kết quả xổ số
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
        @if(Session::has('edit'))
        <div class="alert alert-success">
            {{session('edit')}}
        </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Kết quả xổ số</h3>

                        <section class="content-header">
                            <div class="row">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Chọn ngày</label>
                                        <input type="text" readonly="readonly" id="timeCheckIn" value="{{$date}}" class="form-control" name="date" placeholder="Chọn ngày"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Chọn đài</label>
                                        <select class="form-control" id="daido" name="city">
                                        </select>
                                    </div>
                                </div>
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
                                $.get("ajax/city/" + thu, function (data) {
                                    $("#daido").html(data);
                                    var idcity = $("#daido").val();
                                    $.get("kqxs/ajax/ketqua/" + idcity + "/" + ngay, function (data) {
                                        $("#danhde").html(data);
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
                                    $.get("ajax/city/" + thu, function (data) {
                                        $("#daido").html(data);
                                        var idcity = $("#daido").val();
                                        $.get("kqxs/ajax/ketqua/" + idcity + "/" + ngay,
                                            function (data) {
                                                $("#danhde").html(data);
                                            });
                                    });
                                })
                                $("#daido").change(function () {
                                    var iddate = $('#timeCheckIn').val();
                                    var day = iddate.substr(0, 2);
                                    var month = iddate.substr(3, 2);
                                    var year = iddate.substr(6, 4);
                                    var date = year + "-" + month + "-" + day;
                                    var ngay = year + "-" + month + "-" + day;
                                    var idcity = $("#daido").val();
                                    $.get("kqxs/ajax/ketqua/" + idcity + "/" + ngay, function (data) {
                                        $("#danhde").html(data);
                                    });
                                });
                            });
                        </script>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="danhde">

                    </div>
                    <!-- /.box-body -->
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