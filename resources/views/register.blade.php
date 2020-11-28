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
{{-- <link href="https://like345.com/H5/js/need/layer.css?2.0" type="text/css" rel="styleSheet" id="layermcss"> --}}
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/UFwvoDBMjc8LiYc1DKXiAomK/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-Gz4GRQQcVEYZAcxc5Yxon4APT+NJtG0PxbW6fa7hSJdStazmzdzqhiru1GRGOg3K"></script></head>
<body>
<div class="header bg">
	<div class="layui-row  my-contianer">
		<div class="layui-col-xs3 textl">
			<a href="login.html"><img src="images/back.png" class="back fl" alt=""></a>
		</div>
		<div class="layui-col-xs6">
		   <h2 class="colfff font18 textc">&nbsp;</h2>
		</div>
		<div class="layui-col-xs3 textr">
		</div>
	</div>
</div>


<div class="form_box">
    <h2 class="font26 colfff my-contianer" data-lang="welcome_to_register">Chào mừng đăng ký</h2>
    <form action="" method="POST" oninput='repassword.setCustomValidity(password.value != repassword.value ? "Passwords do not match." : "")'>
		{{ csrf_field() }}
		<div class="fb_item">
			<ul class="clearfix">
				<li class="fl"><i class='fas fa-user'></i></li>
				<li class="fl"><input name="phone" type="number" style="border: 0;width: 4.2rem;background: transparent!important;color: #ccc;font-size: 0.28rem;" placeholder="Hãy nhập số điện thoại di động của bạn" id="userphone" required></li>
			</ul>		
			<ul class="clearfix">
				<li class="fl"><i class='fas fa-lock'></i></li>
				<li class="fl"><input name="password" type="password" id="userpassword" placeholder="Hãy nhập mật khẩu đăng nhập của bạn" required></li>
			</ul>
			<ul class="clearfix">
				<li class="fl"><i class='fas fa-lock'></i></li>
				<li class="fl"><input name="repassword" type="password" id="re_userpassword" placeholder="Hãy xác nhận mật khẩu của bạn" required></li>
			</ul>
			<ul class="clearfix">
				<li class="fl"><i class='fas fa-user-plus'></i></li>
				<li class="fl"><input name="codeinvite" type="text" placeholder="Hãy nhập mã mời" id="code"></li>
			</ul>
		</div>
	</div>
	<div class="my-contianer">
		<button type="submit" id="registersm" style="display:none"></button>
		<a href="javascript:void(0)" id="register" class="btn_login btn_bg1 textc colfff font16 mart40" onclick="register()" data-lang="register_now">Đăng ký ngay</a>
		<a href="{{URL::to('/login')}}" class="btn_down  textc colsky font16 mart20" data-lang="Have_account_login_now">Đã có tài khoản, đăng nhập ngay</a>
	</div>
</form>



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
<script>
    function register(){
        $('#registersm').trigger('click');
    }
</script>



<script type="text/javascript">

 var isgoole = false;
var code = getUrlQueryString('code');
 window.onload = function(){
    if (window.localStorage.getItem("language") != '' && window.localStorage.getItem("language") != 'null' && window.localStorage.getItem("language") != null) {
    	language = window.localStorage.getItem("language");
    	loadProperties(language)
	}
	$('.yzm_img').attr('src',domain+'/api/auth/captcha');
    $('#code').val(code);

 }

 $('.yzm_img').on('click',function(){
 	$('.yzm_img').attr('src',domain+'/api/auth/captcha?a='+Math.random());
 });

 function robotVerified(token){
     if(token){
     	$('.gooleca').val(token);
     }
 }
 




isopen();
var text = '';
if(language == 'cn'){
text = '发送短信';
}else if(language == 'vi'){
text = 'gửi tin nhắn';
}else if(language == 'id'){
text = 'Kirim pesan';
}else if(language == 'hi'){
text = 'संदेश भेजो';
}else{
text = 'send messages';
}

$('#send').click(function(){
	sendsms();
});
function jishi(){
	var s=59;
	var time1=setInterval(function(){
  if(s<10){
  //如果秒数少于10在前面加上0
   $('#send').text('0'+s+'s');
  }else{
   $('#send').text(''+s+'s');
  }
  s--;
  if(s<0){
    window.clearInterval(time1);
    $('#send').text(text);
    $('#send').removeAttr('disabled');
  }
 },1000);
}
function sendsms(){
	var iphone = $('#userphone').val();
	$('#send').attr('disabled','disabled');
	if(iphone.length <= 0){
 		layer.open({
		    content: q_lang[language]['手机号不能为空或填写错误']
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
		$('#send').removeAttr('disabled');
 		return
 	}
	$.ajax({
		type: 'POST',
		url:  domain + '/api/index/sendSms',
		data:{iphone:iphone},
		success:function(data){
			
			if(data.code === 200){
				if(data.data.code == 200){
					jishi();
					layer.open({
		    content: data.data.msg
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});

				}else{
					 $('#send').removeAttr('disabled');
					 layer.open({
		    content: data.data.msg
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
				}
				
				
			}
		},
		error:function(data){
			$('#send').removeAttr('disabled');
			if(data.responseJSON.code === 500){
				layer.open({
				    content: data.responseJSON.msg
				    ,skin: 'msg'
				    ,time: 2 //2秒后自动关闭
				});
			}
		}
	})
}
function isopen(){
	$.ajax({
		type: 'POST',
		url:  domain + '/api/index/isopensms',
		success:function(data){
			
			if(data.code === 200){
				if(data.data.code == 1){
					$('#sendsms').css('display','block');

				}else if(data.data.code == 2){
					$('#sendcode').css('display','block');
				}else if(data.data.code == 3){
						var yuyan;
						if(language == 'cn'){
							yuyan ='zh-CN';
						}else if(language == 'en'){
							yuyan ='en';
	                    }else if(language == 'hi'){
	                        yuyan ='hi';
	                    }else if(language == 'id'){
	                        yuyan ='id';
	                    }else if(language == 'vi'){
	                        yuyan ='vi';
	                    }
	                    isgoole = true;
	                    $('.g-recaptcha').attr('data-sitekey',data.data.key);
	                    $.getScript(data.data.url+'?hl='+yuyan);
	                    $('.gooleca').css('display','block');
	                    $('.captcha_input').css('display','none');

				}
				
				
			}
		},
		error:function(data){
			
			if(data.responseJSON.code === 500){
				layer.open({
				    content: data.responseJSON.msg
				    ,skin: 'msg'
				    ,time: 2 //2秒后自动关闭
				});
			}
		}
	})
}

function getUrlQueryString(names, urls) {
	urls = urls || window.location.href;
	urls && urls.indexOf("?") > -1 ? urls = urls
			.substring(urls.indexOf("?") + 1) : "";
	var reg = new RegExp("(^|&)" + names + "=([^&]*)(&|$)", "i");
	var r = urls ? urls.match(reg) : window.location.search.substr(1)
			.match(reg);
	if (r != null && r[2] != "")
		return unescape(r[2]);
	return null;
};
function registerFun(obj){
	var _dest = $("#phone_dest option:selected").text(); 
	var _username = $('#userphone').val();
	var _captcha = $('#captcha').val(); //验证码
	if(isgoole){
		_captcha = $('.gooleca').val(); 
	}
	
	var _password = $('#userpassword').val();
	var _rePassword = $('#re_userpassword').val();
	var _code = $('#code').val();//邀请码

	//判断手机号 
 	if(_username.length <= 0){
 		layer.open({
		    content: q_lang[language]['手机号不能为空或填写错误']
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
 		return
 	}


 	//验证码
 	
 	if(_captcha.length <= 0){
 		layer.open({
		    content: q_lang[language]['验证码不能为空']
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
 		return
 	}

 	//密码
 	if(_password.length <= 0){
 		layer.open({
		    content: q_lang[language]['密码不能为空']
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
 		return
 	}

 	//重新输入密码
 	if(_rePassword.length <= 0){
 		layer.open({
		    content: q_lang[language]['密码不能为空']
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
 		return
 	}else {
 		if(_password != _rePassword){

 			layer.open({
			    content: q_lang[language]['密码不一致']
			    ,skin: 'msg'
			    ,time: 2 //2秒后自动关闭
			});
			return
 		}
 	}

 	//邀请码
 	if(_code.length <= 0){
 		layer.open({
		    content: q_lang[language]['邀请码不能为空']
		    ,skin: 'msg'
		    ,time: 2 //2秒后自动关闭
		});
 		return
 	}



 	var data = {
		username: _username,
		password: _password,
		re_password: _rePassword,
		code: _code,
		dest: _dest,
		lang:language,
		captcha: _captcha
	}
	$(obj).attr("disabled",true).css({"pointer-events":"none","background":"gray"}); 

 	register(data)
}


   





window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", hengshuping, false);

  function hengshuping() {
         if (window.orientation == 90 || window.orientation == -90) {
            location.reload()
         } else {
             //竖屏
             location.reload()
         }
 }

</script>


<div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=vi&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;k=6LegYecZAAAAALXfTiU4uecpp7V06y_78TQQXkgw&amp;cb=oranrb9wzqyp" name="c-ukt65a7ho1r" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>