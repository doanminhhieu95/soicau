<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	include('simple_html_dom.php');
	$r = array();
	if( isset( $_GET['ngay'] ) ) {
		$html = file_get_html( 'http://ketqua.net/xo-so-truyen-thong.php?ngay=' . $_GET['ngay'] );
	} else {
		$html = file_get_html( 'http://ketqua.net/' );
	}
	
	$input = array(
		'result_date' => $html -> find( '#result_date', 0 ) -> plaintext,
		'rs_0_0' => '<img class="a1" src="Clock.gif" width="25" />',
		'rs_1_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_2_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_2_1' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_3_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_3_1' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_3_2' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_3_3' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_3_4' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_3_5' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_4_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_4_1' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_4_2' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_4_3' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_5_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_5_1' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_5_2' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_5_3' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_5_4' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_5_5' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_6_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_6_1' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_6_2' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_7_0' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_7_1' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_7_2' => '<img class="a" src="Clock.gif" width="25" />',
		'rs_7_3' => '<img class="a" src="Clock.gif" width="25" />'
	);
	
	if( date( 'H' ) > 19 || ( isset( $_GET['ngay'] ) && $_GET['ngay'] !== date( 'd-m-Y' ) ) ) {
		foreach( $input as $key => $value ) {
			$r[$key] = $html -> find( '#' . $key, 0 ) -> plaintext;
		}
	} else {
		$r = $input;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kết Quả Xổ Số Truyền Thống Hôm Nay</title>
		<link href="http://static.ketqua.net/main_bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://static.ketqua.net/css/font-awesome.min.css" rel="stylesheet">
		<!-- <link href="http://static.ketqua.net/metis/metisMenu.css" rel="stylesheet"> -->
		<link href="http://static.ketqua.net/main_css/province_menu.css" rel="stylesheet">
		<link href="http://static.ketqua.net/css/bootstrap-datepicker3.min.css" rel="stylesheet">
		<!-- <link href="http://static.ketqua.net/main_css/row_no_gutter.css" rel="stylesheet"> -->
		<link href="http://static.ketqua.net/main_css/table_kq.css" rel="stylesheet">
		<link href="http://static.ketqua.net/main_css/global.css" rel="stylesheet">
		<!-- <link href="http://static.ketqua.net/main_css/balloon.css" rel="stylesheet"> -->
	</head>
	<body>
		<div class="container big-container">
			<div class="row" style="text-align: center;">
				<a href="/"><img src="http://upload.ketqua.net/upload/2016/02/20/20160220172641-4a1ca3a3.png" alt="kqsx trực tiếp kết quả xổ số" height="90"></a>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<nav class="sidebar-nav kqvertimargin">
						<ul id="left_menu">
							<li class="active">
								<h2 class="lefth2" style="cursor: pointer;"><a class="title"><i class="fa fa-calendar" aria-hidden="true"></i> Trực tiếp xổ số</a></h2>
							</li>
							<li>
								<ul class="border collapse in">
									<li><a href="#">Truyền Thống<span class="dosam pull-right rolling" style="font-weight:400;" id="roll_marker_mb">18:15</span></a></li>
									<li><a href="#">Điện Toán 123<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_123">18:05</span></a></li>
									<li><a href="#">Thần Tài<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_tt4">18:05</span></a></li>
									<li><a href="#">Gia Lai<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_gl">17:15</span></a></li>
									<li><a href="#">Ninh Thuận<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_nt">17:15</span></a></li>
									<li><a href="#">Bình Dương<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_bdu">16:15</span></a></li>
									<li><a href="#">Vĩnh Long<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_vl">16:15</span></a></li>
									<li><a href="#">Trà Vinh<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_tv">16:15</span></a></li>
									<li><a href="#" target="_blank">Mega 6/45<span class="dosam pull-right rolling-notyet" style="font-weight:400;" id="roll_marker_mg645">18:10</span></a></li>
								</ul>
							</li>
							<li>
								<a class="title">Xổ số miền Bắc <span class="glyphicon"></span></a>
								<ul class="border collapse">
									<li><a href="#">Truyền Thống</a></li>
									<li><a href="#">Điện Toán 123</a></li>
									<li><a href="#">Điện Toán 6x36</a></li>
									<li><a href="#">Thần Tài</a></li>
								</ul>
							</li>
							<li>
								<a class="title">Xổ số miền Trung <span class="glyphicon"></span></a>
								<ul class="border collapse">
									<li><a href="#">Bình Định</a></li>
									<li><a href="#">Đà Nẵng</a></li>
									<li><a href="#">Đắc Lắc</a></li>
									<li><a href="#">Đắc Nông</a></li>
									<li><a href="#">Gia Lai</a></li>
									<li><a href="#">Khánh Hoà</a></li>
									<li><a href="#">Kon Tum</a></li>
									<li><a href="#">Ninh Thuận</a></li>
									<li><a href="#">Phú Yên</a></li>
									<li><a href="#">Quảng Bình</a></li>
									<li><a href="#">Quảng Nam</a></li>
									<li><a href="#">Quảng Ngãi</a></li>
									<li><a href="#">Quảng Trị</a></li>
									<li><a href="#">Thừa Thiên Huế</a></li>
								</ul>
							</li>
							<li>
								<a class="title">Xổ số miền Nam <span class="glyphicon"></span></a>
								<ul class="border collapse">
									<li><a href="#">An Giang</a></li>
									<li><a href="#">Bạc Liêu</a></li>
									<li><a href="#">Bến Tre</a></li>
									<li><a href="#">Bình Dương</a></li>
									<li><a href="#">Bình Phước</a></li>
									<li><a href="#">Bình Thuận</a></li>
									<li><a href="#">Cà Mau</a></li>
									<li><a href="#">Cần Thơ</a></li>
									<li><a href="#">Đà Lạt</a></li>
									<li><a href="#">Đồng Nai</a></li>
									<li><a href="#">Đồng Tháp</a></li>
									<li><a href="#">Hậu Giang</a></li>
									<li><a href="#">Hồ Chí Minh</a></li>
									<li><a href="#">Kiên Giang</a></li>
									<li><a href="#">Long An</a></li>
									<li><a href="#">Sóc Trăng</a></li>
									<li><a href="#">Tây Ninh</a></li>
									<li><a href="#">Tiền Giang</a></li>
									<li><a href="#">Trà Vinh</a></li>
									<li><a href="#">Vĩnh Long</a></li>
									<li><a href="#">Vũng Tàu</a></li>
								</ul>
							</li>
							<li>
								<a class="title">Xổ số Vietlott <span class="glyphicon"></span></a>
								<ul class="border collapse">
									<li><a href="#" target="_blank">Mega 6/45</a></li>
									<li><a href="#" target="_blank">Max 4D</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-6">
					<div class="kqbackground vien tb-phoi">
						<div id="outer_result_mb">
							<div class="result_div" id="result_mb">
								<div class="color3334">
									<table class="table table-condensed kqcenter kqvertimarginw table-kq-border table-kq-hover table-kq-north-west table-bordered kqbackground table-kq-bold-border tb-phoi-border watermark" id="result_tab_mb">
										<thead>
											<tr class="title_row">
												<td class="color333" colspan="13">
													<div class="col-sm-10">
														<h2 class="martop10 chu22 kqcenter viethoa dosam vietdam">Xổ số Truyền Thống</h2>
													</div>
													<div class="col-sm-10">
														<span class="chu15" id="result_date"><?php echo $r['result_date'];?></span>
													</div>
												</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="width:16%;vertical-align:middle;font-size:16px;color:red;">
													Đặc biệt
												</td>
												<td id="rs_0_0" colspan="12" style="width:84%;" class="phoi-size chu22 gray need_blank vietdam phoi-size chu30 maudo stop-reload" rs_len="5">
													<?php echo $r['rs_0_0'];?>
												</td>
											</tr>
											<tr>
												<td style="width:16%;vertical-align:middle;font-size:16px;">
													Giải nhất
												</td>
												<td id="rs_1_0" colspan="12" style="width:84%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_1_0'];?>
												</td>
											</tr>
											<tr>
												<td style="width:16%;vertical-align:middle;font-size:16px;">
													Giải nhì
												</td>
												<td id="rs_2_0" colspan="6" style="width:42%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_2_0'];?>
												</td>
												<td id="rs_2_1" colspan="6" style="width:42%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_2_1'];?>
												</td>
											</tr>
											<tr>
												<td rowspan="2" style="width:16%;vertical-align:middle;font-size:16px;">
													Giải ba
												</td>
												<td id="rs_3_0" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_3_0'];?>
												</td>
												<td id="rs_3_1" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_3_1'];?>
												</td>
												<td id="rs_3_2" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_3_2'];?>
												</td>
											</tr>
											<tr>
												<td style="display:none">
												</td>
												<td id="rs_3_3" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_3_3'];?>
												</td>
												<td id="rs_3_4" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_3_4'];?>
												</td>
												<td id="rs_3_5" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="5">
													<?php echo $r['rs_3_5'];?>
												</td>
											</tr>
											<tr>
												<td style="width:16%;vertical-align:middle;font-size:16px;">
													Giải tư
												</td>
												<td id="rs_4_0" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_4_0'];?>
												</td>
												<td id="rs_4_1" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_4_1'];?>
												</td>
												<td id="rs_4_2" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_4_2'];?>
												</td>
												<td id="rs_4_3" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_4_3'];?>
												</td>
											</tr>
											<tr>
												<td rowspan="2" style="width:16%;vertical-align:middle;font-size:16px;">
													Giải năm
												</td>
												<td id="rs_5_0" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_5_0'];?>
												</td>
												<td id="rs_5_1" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_5_1'];?>
												</td>
												<td id="rs_5_2" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_5_2'];?>
												</td>
											</tr>
											<tr>
												<td style="display:none">
												</td>
												<td id="rs_5_3" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_5_3'];?>
												</td>
												<td id="rs_5_4" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_5_4'];?>
												</td>
												<td id="rs_5_5" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="4">
													<?php echo $r['rs_5_5'];?>
												</td>
											</tr>
											<tr>
												<td style="width:16%;vertical-align:middle;font-size:16px;">
													Giải sáu
												</td>
												<td id="rs_6_0" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="3">
													<?php echo $r['rs_6_0'];?>
												</td>
												<td id="rs_6_1" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="3">
													<?php echo $r['rs_6_1'];?>
												</td>
												<td id="rs_6_2" colspan="4" style="width:28%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="3">
													<?php echo $r['rs_6_2'];?>
												</td>
											</tr>
											<tr>
												<td style="width:16%;vertical-align:middle;font-size:16px;">
													Giải bảy
												</td>
												<td id="rs_7_0" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="2">
													<?php echo $r['rs_7_0'];?>
												</td>
												<td id="rs_7_1" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="2">
													<?php echo $r['rs_7_1'];?>
												</td>
												<td id="rs_7_2" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="2">
													<?php echo $r['rs_7_2'];?>
												</td>
												<td id="rs_7_3" colspan="3" style="width:21%;" class="phoi-size chu22 gray need_blank vietdam" rs_len="2">
													<?php echo $r['rs_7_3'];?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="sidebar-nav">
						<h3 class="right-menu-title"><i class="fa fa-newspaper-o"></i> Xem theo ngày</h3>
					</div>
					<div class="panel-body pad0">
						<div id="left_date" class="kqbackground kqvertimarginw kqborder border"></div>
					</div>
				</div>
			</div>
			<div class="row" style="text-align: center;">
				<div style="margin: 10px; padding: 10px; border-top: 1px solid #ccc">@ Copyright</div>
			</div>
		</div>
		<script src="http://static.ketqua.net/js/jquery-2.1.3.min.js" type="text/javascript"></script>
		<!-- <script src="http://static.ketqua.net/custom_js/reload_function_v2.2.1b.js" type="text/javascript"></script> -->
		<script src="http://static.ketqua.net/main_bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- <script src="http://static.ketqua.net/back2top/code.js" type="text/javascript"></script> -->
		<script src="http://static.ketqua.net/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<!-- <script src="http://static.ketqua.net/custom_js/qxssupport.js" type="text/javascript"></script> -->
		<script src="http://static.ketqua.net/custom_js/customize_calendar.js" type="text/javascript"></script>
		<!-- <script src="http://static.ketqua.net/custom_js/balloon.js" type="text/javascript"></script> -->
		<script src="http://static.ketqua.net/metis/metisMenu.js" type="text/javascript"></script>
		<script src="http://static.ketqua.net/js/bootstrap-datepicker.vi.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				function getQueryVariable(variable) {
					var query = window.location.search.substring(1);
					var vars = query.split("&");
					for (var i=0;i<vars.length;i++) {
						var pair = vars[i].split("=");
						if(pair[0] == variable){return pair[1];}
					}
					return(false);
				}
				$('#left_menu').metisMenu({ toggle: false});
				$('#left_date').datepicker({
					format: 'd-m-yyyy', // site date format
					language: 'vi',
					endDate: new Date(),
					weekStart: 1,
					todayBtn: 'linked',
					todayHighlight: true,
					startDate: '-14y',
					daysOfWeekDisabled: []
				}).on('changeDate', function(e){
					date_obj = e.date;
					// Format the string according to site format
					new_link = '/index.php?ngay=' + ("0" + date_obj.getDate()).slice(-2) + '-' + ("0" + (date_obj.getMonth() + 1)).slice(-2) + '-' + date_obj.getFullYear();
					// Navigate
					window.location.href = new_link;
				}); 
				// Make a date picker for our format and set even listener
				// Disable by default
				disable_combine('mb', $('div#left_date'));
				// Set the selected date				
				$('#left_date').datepicker('update', getQueryVariable("ngay"));
			});
			$(window).load(function() {
				var d = new Date();
				if( d.getHours() == 18 ) {
					var a = setInterval(function(){
						if($('.a').length == 0) {
							$.ajax({
								url: "onl.php",
								type : "post",
								dataType: "text",
								data: {
									input: $( ".a1" ).parent().attr('id'),
								},
								success: function(result){
									if(result !== '') {
										$( ".a1" ).parent().html(result);
									}						
								}
							});
							clearInterval(a);
						}
						$.ajax({
							url: "onl.php",
							type : "post",
							dataType: "text",
							data: {
								input: $( ".a" ).first().parent().attr('id'),
							},
							success: function(result){
								if(result !== '') {
									$( ".a" ).first().parent().html(result);
								}						
							}
						});
					}, 34000);
				} else {
					setInterval(function(){
						window.location.reload();
					}, 900000)
				}				
			});
		</script>
	</body>
</html>