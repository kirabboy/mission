<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta http-equiv="Cache-Control" content="no-transform " />
	<link rel="Shortcut Icon" href="images/favicon.ico" type="image/x-icon">
<!-- 	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/> -->
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover">
    <meta name="format-detection" content="telephone=no, email=no">
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta name="robots" content="index"/>
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
</head>
<body id="body">

<div class="header">
	<div class="layui-row  my-contianer">
		<div class="layui-col-xs3 textl">
			<a href="javascript:void(0)" class="colbbb font14" data-lang="line"></a>
		</div>
		<div class="layui-col-xs6">
		  <img src="images/logo-zh-CN.png" class="logo" alt="">
		</div>
		<div class="layui-col-xs3 textr">
			<a href="select_language.html" class="colbbb font14" data-lang="language_switch"></a>
		</div>
	</div>
</div>
<div class="header_mar"></div>


<!-- banner -->
<div class="swiper-container banner-swiper">
	<div class="fotorama" data-autoplay="true" data-width="100%" data-height="auto" data-nav="false">
		<img src="https://s.fotorama.io/1.jpg">
		<img src="https://s.fotorama.io/2.jpg">
	  </div>
</div>


<!-- 公告 -->
<div class="gg-wrapper">
	<img src="images/gg.png" class="gg-img" alt="">
	<div class="swiper-container ggindex-swiper">
	  <div class="swiper-wrapper my-contianer" id="gonggao_swiper">
	   
	  </div>
	</div>
</div>


<!-- vip专区 视频教程 推广奖励 -->
<div class="fun_vip clearfix">
	<ul>
		<li>
			<div class="fun_vip_item">
				<p class="colfff font14 textl" ><a href="#" id="app" target="_blank" style="color: white" data-lang="Download_APP"></a></p>
				<img src="images/center_013.png" alt="">
			</div>
		</li>
		<li>
			<div class="fun_vip_item">
				<p class="colfff font14 textl" ><a href="my_video.html" style="color: white" data-lang="video_tutorial"></a></p>
				<img src="images/icon_video.png" alt="">
			</div>
		</li>
		<li>
			<div class="fun_vip_item">
				<p class="colfff font14 textl" ><a href="profit.html" style="color: white" data-lang="promotion_rewards"></a></p>
				<img src="images/icon_qian.png" alt="">
			</div>
		</li>
	</ul>
</div>


<!-- 广告条  邀请入口 -->
<div class="ad-wrapper clearfix">
	<a href="my_invite_friends.html"><img data-img="promote" src="#" class="ad-img" alt=""></a>
</div>


<!-- title -->
<div class="title">
	<h3 class="colfff font16" data-lang="task_hall" data-lang="task_hall"></h3>
</div>


<!-- 任务大厅列表 -->
<div class="task-list clearfix">
	<ul id="task_dt">
		<!-- <li>
			<div class="task_list_item">
				<a href="index_task.html" target="_blank">
					<p class="colfff font14">Line<br/><span data-lang="share">分享</span></p>
					<img src="images/icon_line.png" alt="">
				</a>
			</div>
		</li>
		<li>
			<div class="task_list_item">
				<p class="colfff font14"><span data-lang="facebook">脸书</span><br/><span data-lang="share">分享</span></p>
				<img src="images/icon_facebook.png" alt="">
			</div>
		</li>
		<li>
			<div class="task_list_item">
				<p class="colfff font14">TikTok<br/><span data-lang="like_follow">分享&nbsp;&nbsp;关注</span></p>
				<img src="images/icon_tiktok.png" alt="">
			</div>
		</li>
		<li>
			<div class="task_list_item">
				<p class="colfff font14">YouTube<br/><span data-lang="like_follow">分享&nbsp;&nbsp;关注</span></p>
				<img src="images/icon_youtube.png" alt="">
			</div>
		</li> -->
	</ul>
</div>


<!-- 商家发布任务大厅列表 -->
<!-- title -->
<div class="title clearfix">
	<h3 class="colfff font16" data-lang="business_hall"></h3>
</div>

<div class="task-list clearfix">
	<ul id="task_dt_pro">
		<!-- <li>
			<div class="task_list_item">
				<p class="colfff font14">Line<br/><span data-lang="share">分享</span></p>
				<img src="images/icon_line.png" alt="">
			</div>
		</li>
		<li>
			<div class="task_list_item">
				<p class="colfff font14"><span data-lang="facebook">脸书</span><br/><span data-lang="share">分享</span></p>
				<img src="images/icon_facebook.png" alt="">
			</div>
		</li>
		<li>
			<div class="task_list_item">
				<p class="colfff font14">TikTok<br/><span data-lang="like_follow">分享&nbsp;&nbsp;关注</span></p>
				<img src="images/icon_tiktok.png" alt="">
			</div>
		</li>
		<li>
			<div class="task_list_item">
				<p class="colfff font14">YouTube<br/><span data-lang="like_follow">分享&nbsp;&nbsp;关注</span></p>
				<img src="images/icon_youtube.png" alt="">
			</div>
		</li> -->
	</ul>
</div>


<!-- 会员 商家任务完成列表 -->
<div class="tab clearfix">
  <ul class="tab-title">
    <li class="active colfff font16"><img src="images/tab1.png" alt=""><span data-lang="membership_list"></span></li>
    <li class="colfff font16"><img src="images/tab2.png" alt=""><span data-lang="merchant_list"></span></li>
  </ul>
  <div class="tab-content">
    <div class="tab-item colfff" id="tabItem0">
      	<div class="swiper-container tab0-swiper-content">
		  <div class="swiper-wrapper" id="userList">
		    
		   
		   <!--  <div class="swiper-slide tab-swiper-slide">
		   				<dl>
		   					<dt><img src="images/head.png" alt=""></dt>
		   					<dd>
		   						<h4 class="colfff font14 textl">恭喜:****9026</h4>
		   						<p class="colbbb font12 textl">今天完成60单任务,赚取THB540!</p>
		   					</dd>
		   				</dl>
		   </div> -->
		  </div>
		</div>
    </div>
    <div class="tab-item colfff"  id="tabItem1" style="z-index: -1; opacity: 0;">
		<div class="swiper-container tab1-swiper-content">
		  <div class="swiper-wrapper" id="businessList">
		    
		    <!-- <div class="swiper-slide tab-swiper-slide">
		    				<dl class="clearfix">
		    					<dt><img src="images/head.png" alt=""></dt>
		    					<dd>
		    						<h4 class="colfff font14 textl">恭喜:****9026</h4>
		    						<p class="colbbb font12 textl">1111今天完成60单任务,赚取THB540!</p>
		    						<span class="font12"><img src="images/gold.png" alt="">165400</span>
		    					</dd>
		    				</dl>
		    </div> -->
		  </div>
		</div>
    </div>
  </div>
</div>

<div class="footer-box"></div>
<div class="footer-nav">
	<ul>
		<li class="active"><a href="javascript:void(0)"><img src="images/nav1_active.png" alt=""><p class="font12" data-lang="home"></p></a></li>
		<li><a href="task.html"><img src="images/nav2.png" alt=""><p class="font12" data-lang="task"></p></a></li>
		<li><a href="vip.html"><img src="images/nav3.png" alt=""><p class="font12" data-lang="vip"></p></a></li>
		<li><a href="profit.html"><img src="images/nav4.png" alt=""><p class="font12" data-lang="profit"></p></a></li>
		<li><a href="{{URL::to('/my')}}"><i class='far fa-user-circle'></i><p class="font12" data-lang="my">Của tôi</p></a></li>
	</ul>
</div>
<a class="box" href="customer.html"><img src="images/customer.png" width="100%"></a>

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



<style>
.gonggao{ position: relative; background: url(images/gonggao_bg.png) center top no-repeat; }
.gonggao p{ text-align: left; }
.gonggao p span{ background: rgba(0,0,0,0); }
.gonggao img.close{ position: absolute; left:50%; bottom: -1.2rem; margin-left: -0.3rem; width:0.6rem; height: 0.6rem; border-radius: 100%; }


</style>

<script type="text/javascript">


var currency = '';
 window.onload = function(){

    if ( window.localStorage.getItem("language") != '' && window.localStorage.getItem("language") != 'null' && window.localStorage.getItem("language") != null) {
    	language = window.localStorage.getItem("language");
    	loadProperties(language);
    }
    tokenId = $.query.get("tokenId") || window.localStorage.getItem("tokenId") || '';
    

  //   if (tokenId == '') {
  //   	layer.open({
		//     content: "请先登录"
		//     ,skin: 'msg'
		//     ,time: 2 //2秒后自动关闭
		// });
		// setTimeout(function(){window.location.href = "login.html"},1800) 
		
  //   }else{
    	window.localStorage.setItem("tokenId",tokenId);
    	indexAjax();
    	getMemberListAjax();
    // }

   	
	
	$('.tab-title li').on('touchstart',function(){
		var _index = $(this).index();
		$('.tab-title li').removeClass('active');
		$(this).addClass('active');
		$('.tab-item').css({'z-index':-1,'opacity':0});
		$('#tabItem' + _index).css({'z-index':1,'opacity':1});
	})
 }



var gonggao = null;
function indexAjax(){
	$.ajax({
		type: 'POST',
		url:  domain + '/api/index/getIndexInfo',
		headers: {'token': tokenId},
		data: {
			lang: language
		},
		success:function(data){

			window.localStorage.setItem("currency",data.data.currency);
			
			currency = data.data.currency;

			// banner
			window.localStorage.setItem("bannerList",JSON.stringify(data.data.bannerList));
			if(data.data.bannerList.length>0){
				for (var i = 0; i < data.data.bannerList.length; i++) {
	  			$('#banner_swiper').append('<div class="swiper-slide banner-swiper-slide"><img src="' + domain + data.data.bannerList[i].img + '" alt=""></div>')
	  		}
	        var bannerSwiper = new Swiper('.banner-swiper', {
				autoplay: {
					disableOnInteraction: false,   //开启这个就可以自动滑动了
					delay: 3000,
				},
				loop : true,
				pagination: {
				   el: '.swiper-pagination',
				},
			})  
			}
	  		

$('#app').attr('href',data.data.app_url);
			
        if(data.data.usercomissionList.length>0){
        	//公告
		for (var i = 0; i < data.data.usercomissionList.length; i++) {
			
  			$('#gonggao_swiper').append('<div class="swiper-slide gg-swiper-slide"><p class="font14 colfff textl">'+q_lang[language]['恭喜会员']+' '+ data.data.usercomissionList[i].username + '<br/>'+q_lang[language]['获得']+' '+data.data.currency + data.data.usercomissionList[i].amount +' '+q_lang[language]['推广奖励'] +'!</p></div>')
  		}
		var ggindexSwiper = new Swiper('.ggindex-swiper', {
			direction : 'vertical',
			autoplay: {
				disableOnInteraction: false,   //开启这个就可以自动滑动了
				delay: 3000,
			},
			loop : true
		})
        }
		
    		console.log(data.data)
        if(data.data.gonggaoList){
        	gonggao = layer.open({
			  className: 'gonggao'
			  ,title: [
			    data.data.gonggaoList.name,
			    'color:#fff;'
			  ]
			  ,anim: 'up'
			  ,content: '<div style="margin:0 auto; background:rgba(0,0,0,0.6);color:#bbb; font-size:0.28rem; line-height:1.4; width:5.4rem; height:4.4rem; overflow:auto;text-align:left; word-wrap:break-word; padding:0.1rem; 0.3rem; border-radius: 0.2rem;">' +  data.data.gonggaoList.content + '</div><img src="images/close.png" class="close" alt="" onclick="closeGongGao()">'
		});
        }
	   	

		window.localStorage.setItem("tasktypeList",JSON.stringify(data.data.tasktypeList));
		

//任务
	   	for (var i = 0; i < data.data.tasktypeList.length; i++) {
	   		// 任务大厅
  			$('#task_dt').append('<li><div class="task_list_item"><a href="index_task.html?id='+ data.data.tasktypeList[i].id +'"><p class="colfff font14">' + data.data.tasktypeList[i].name + '<br/></p><img src="'+domain+data.data.tasktypeList[i].img+'" alt=""></a></div></li>')
  			
  			//发布任务
  			$('#task_dt_pro').append('<li><div class="task_list_item"><a href="index_postTask.html?id='+ data.data.tasktypeList[i].id +'"><p class="colfff font14">' + data.data.tasktypeList[i].name + '<br/></p><img src="'+domain+data.data.tasktypeList[i].img+'" alt=""></a></div></li>')
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
			if(data.responseJSON.code === 401){
				window.localStorage.setItem("tokenId",'');
				layer.open({
				    content: data.responseJSON.msg
				    ,skin: 'msg'
				    ,time: 2 //2秒后自动关闭
				});
				setTimeout(function(){window.location.href = "login.html"},1800)
			}
		}
	})
}







// 会员榜单
function getMemberListAjax(){
	$.ajax({
		type: 'POST',
		url:  domain + '/api/index/getMemberList',
		headers: {'token': tokenId},
		data: {
			lang: language
		},
		success:function(data){
			for (var i = 0; i < data.data.userList.length; i++) {
				var tip = '<h4 class="colfff font14 textl">恭喜: '+ data.data.userList[i].username +'</h4><p class="colbbb font12 textl">今天完成 '+  data.data.userList[i].num +'单任务,赚取 '+currency + data.data.userList[i].amount + '!</p>';
				 if(language == 'en' || language == 'vi' || language == 'id'  ){
					tip = '<h4 class="colfff font14 textl">'+q_lang[language]['恭喜']+': '+ data.data.userList[i].username +'</h4><p class="colbbb font12 textl"> '+q_lang[language]['完成']+' '+data.data.userList[i].num + ' '+q_lang[language]['会员榜单提示']+' '+currency+' '+data.data.userList[i].amount+' !';

				}
				if(language == 'hi'){
					tip = '<h4 class="colfff font14 textl">'+q_lang[language]['恭喜']+': '+ data.data.userList[i].username +'</h4><p class="colbbb font12 textl"> '+q_lang[language]['完成']+' '+data.data.userList[i].num + ' '+q_lang[language]['会员榜单提示']+' '+currency+' '+data.data.userList[i].amount+q_lang[language]['会员榜单提示2']+' !';

				}
	  			$('#userList').append(' <div class="swiper-slide tab-swiper-slide"><dl><dt><img src="'  + data.data.userList[i].avatar + '" alt=""></dt><dd>'+tip+'</dd></dl></div>')
	  		}

	  		for (var i = 0; i < data.data.businessList.length; i++) {
	  			$('#businessList').append('<div class="swiper-slide tab-swiper-slide"><dl class="clearfix"><dt><img src="' + data.data.businessList[i].avatar + '" alt=""></dt><dd><h4 class="colfff font14 textl">'+q_lang[language]['恭喜']+': ' + data.data.businessList[i].username + '</h4><p class="colbbb font12 textl"> ' +q_lang[language]['今天发布']+' '+ data.data.businessList[i].num + ' '+q_lang[language]['单任务']+'</p><span class="font12"><img src="images/gold.png" alt="">' + data.data.businessList[i].amount + '</span></dd></dl></div>')
	  		}
			
			var tab0Swiper = new Swiper('.tab0-swiper-content', {
				direction : 'vertical',
				slidesPerView: 6,
				paginationClickable :false,
				observer:false,
				observeParents:false,
				autoplay: {
					disableOnInteraction: false,   //开启这个就可以自动滑动了
					delay: 2000,
				},
				loop : true
			})

			var tab1Swiper = new Swiper('.tab1-swiper-content', {
				direction : 'vertical',
				slidesPerView: 6,
				paginationClickable :false,
				observer:false,
				observeParents:false,
				autoplay: {
					disableOnInteraction: false,   //开启这个就可以自动滑动了
					delay: 2000,
				},
				loop : true
			})
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

		function closeGongGao(){
			layer.close(gonggao);
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
</body>

<!-- Mirrored from like345.com/H5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2020 13:14:26 GMT -->
</html>