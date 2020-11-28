<html lang="zh-cmn-Hans" style="font-size: 55.2px;"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-Control" content="no-transform ">
	<link rel="Shortcut Icon" href="./images/favicon.ico" type="image/x-icon">
<!-- 	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/> -->
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover">
    <meta name="format-detection" content="telephone=no, email=no">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta name="robots" content="index">
    <!-- Safari浏览器私有meta属性 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="APP name">
	<!-- jQuery 1.8 or later, 33 KB -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!-- Fotorama from CDNJS, 19 KB -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>	
	<link rel="stylesheet" type="text/css" href="{{URL::to('/resources/css/app.css')}}">

	<link rel="stylesheet" type="text/css" href="{{URL::to('/resources/css/reset.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/resources/css/layui3a97.css?v=02')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/resources/css/layer3a97.css?v=02')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/resources/css/swiper.min3a97.css?v=02')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/resources/css/style08dd.css?v=03')}}">
	<title>LIKE MEVIVU</title>
<link href="https://like345.com/H5/js/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss"></head>
<body>
<div class="header bg">
	<div class="layui-row  my-contianer">
		<div class="layui-col-xs3 textl">
			<a href="index.html"><img src="images/back.png" class="back fl" alt=""></a>
		</div>
		<div class="layui-col-xs6">
		   <h2 class="colfff font18 textc">&nbsp;</h2>
		</div>
		<div class="layui-col-xs3 textr">
			<a href="select_language.html" class="font14 colfff" data-lang="language_switch">Chọn ngôn ngữ</a>
		</div>
	</div>
</div>


<div class="login_top"></div>

<form action="" method="post">
	{{ csrf_field() }}
	<div class="form_box">
		<div class="fb_item">
			<ul class="clearfix">
				<li class="fl"><i class='fas fa-user'></i></li>
		
				<li class="fl"><input type="text" name="phone" placeholder="Hãy nhập số điện thoại di động của bạn" id="userphone" required></li>
			</ul>
			<ul class="clearfix">
				<li class="fl"><i class='fas fa-lock'></i></li>
				<li class="fl"><input type="password" name="password" placeholder="Hãy nhập mật khẩu đăng nhập của bạn" id="userpw" required></li>
				<li class="fr"><i class='fas fa-eye'></i></li>
			</ul>
			<ul class="clearfix">
				<li class="login_checkbox"><label for="remember_info" class="font14 colbbb"><input type="checkbox" id="remember_info">&nbsp;&nbsp;<span data-lang="remember">Nhớ tên người dùng / mật khẩu</span></label></li>
			</ul>
		</div>
	</div>

	<div class="my-contianer">
		<button type="submit" id="loginsm" style="display: none"></button>
		<a href="javascript:void(0)" id="tosmlogin" class="btn_login btn_bg1 textc colfff font16 mart40" data-lang="login_now">Đăng nhập ngay</a>
	</div>
</form>
<script>
		$('#tosmlogin').click(function(){
			$('#loginsm').trigger('click');
		});
	
</script>


<div class="my-contianer mart30">
	<p class="fl colfff font14 textl"><span data-lang="no_like share_account">Không có số tài khoản like share</span>？<a href="{{URL::to('/register')}}" class="colbbb font12" data-lang="register">Đăng ký</a></p>
</div>

<script src="{{URL::to('/resources/js/jquery-2.1.1.min.js')}}"></script>
<script src="{{URL::to('/resources/js/swiper.js')}}"></script>
<script src="{{URL::to('/resources/js/baseAjax.js')}}"></script>
<script src="{{URL::to('/resources/js/jsrem.js')}}"></script>
<script src="{{URL::to('/resources/js/jquery.params.js')}}"></script>
<script src="{{URL::to('/resources/js/layer.js')}}"></script>
<script src="{{URL::to('/resources/js/layui.js')}}"></script>
<script src="{{URL::to('/resources/js/jquery.i18n.properties-min.js')}}"></script>
<script src="{{URL::to('/resources/js/language.js')}}"></script>
<script src="{{URL::to('/resources/js/config08dd.js?v=03')}}"></script>
<script src="{{URL::to('/resources/js/jquery.params.js')}}"></script>



<!-- 提示 -->
<img src="images/ts.png" class="ts" style="display: none;">




</body></html>