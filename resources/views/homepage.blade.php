@extends('layout.master')
@section('content')
<main id="main">
    <div class="container-fluid p-0">
        <div style="background:#0e1526">
        <div style="z-index: 999; ">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- Add images to <div class="fotorama"></div> -->
                    <div class="fotorama"  data-width="100%" data-nav="false"  data-autoplay="true">
                        @foreach($banners as $val)
                            <img src="{{asset('/resources/image/'.$val->name)}}" width="100%">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-6">
                    <div class="area-hdkt text-center block">
                        <button class="btnc btn-hdkt"><i class='fas fa-dollar-sign'></i> Hướng dẫn kiếm tiền</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="area-battery block text-center">
                            <button class="btnc text-center btn-battery progress-bar progress-bar-primary progress-bar-striped active" role="progressbar">
                                <i class='fas fa-user-check'> {{rand(33333,55555)}} online <i class='fas fa-circle'></i></i> 
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            {{-- <div class="col-6">
                <div class="area-notice-spin block" style="z-index: 9999">
                    <script>
                            var counter = 0;
                            function change() {
                                $("#list-notice-spin").addClass('fades');

                            setTimeout(function(){
                                $("#list-notice-spin").removeClass('fades');
                                counter++;
                                if (counter >= h2text.length) {
                                    counter = 0;
                                }  
                            }, 500);
                            }
                            change();
                    </script>
                    <ul class="list-notice-spin" id="list-notice-spin">
                        <li>
                            <div class="row-notice-spin">
                                <div class="col-spin-notice-avatar text-center">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-spin-notice-content">
                                    <h6 class="spin-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã trúng thưởng 1 iphone 12 pro max 512gb</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-notice-spin">
                                <div class="col-spin-notice-avatar text-center">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-spin-notice-content">
                                    <h6 class="spin-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã trúng thưởng 1 iphone 12 pro max 512gb</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-12">
            <div class="area-btn-spin text-center block" onclick="location.href='{{URL::to('/spin')}}'">
                   
                    <div class="gif-spin">
                        {{-- <img onclick="location.href='{{URL::to('/spin')}}'" src="{{asset('/resources/image/spin-wheel.gif')}}"/> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="block">
                    <marquee class="notice-spin">
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳4561</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1346</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳6724</span> đã trúng 1000.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳8120</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳9812</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳9257</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1620</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳4926</span> đã trúng 100.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳5984</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳9371</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳3859</span> đã trúng 100.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1672</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳3638</span> đã trúng 100.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳9560</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳7216</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1341</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳4567</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1783</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1902</span> đã trúng 20.000vnđ</span>
                        <span class="spin-not"><img  src="{{asset("/resources/image/star.gif")}}"/>Chúc mừng <span class="sdt">✳✳✳✳✳✳1276</span> đã trúng 1 đôi giày Gucci</span>


                    </marquee>
                </div>
            </div>
        </div>
		<div class="row no-gutters">
			<div class="col-6">
				<div class="area-zalo block block-social">
					<div class="row no-gutters" onclick="location.href='https://www.youtube.com/channel/UCKcxoGpxOJx3nt83MCG-nuQ'">
						<div class="col-4">
							<img src="{{asset("/resources/image/youtube.png")}}"/>
						</div>
						<div class="col-8" >
							<h5>Youtube</h5>
							<span>Xem video để nhận thưởng</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="area-facebook block block-social">
					<div class="row no-gutters" onclick="location.href='https://www.facebook.com/LazadaVietnam'">
						<div class="col-4">
							<img src="{{asset("/resources/image/facebook.png")}}"/>
						</div>
						<div class="col-8" >
							<h5>Facebook</h5>
							<span>Yêu thích hoặc theo dõi</span>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="area-invite text-center block">
                    <button class="btnc btn-invite waviy" onclick="location.href='{{URL::to('/my-referal')}}'">
                        <i class='fas fa-paper-plane'></i>
                        <span style="--i:2">M</span>
                        <span style="--i:3">ờ</span>
                        <span style="--i:4">i</span>
                        <span style="--i:5">b</span>
                        <span style="--i:6">ạ</span>
                        <span style="--i:7">n</span>
                        <span style="--i:8">b</span>
                        <span style="--i:9">è</span>
                        <span style="--i:10">.</span>
                        <span style="--i:11">.</span>
                        <span style="--i:12">.</span>
                    </button>
                </div>
            </div>
		</div>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="area-buy-spin block text-center">
                    <div class="title title-buy-spin text-center">
                        <h6>Mua lượt quay</h6>
                    </div>
                    <div class="gif-buy-spin">
                        <img onclick="location.href='{{URL::to('/buy-spin')}}'" src="{{asset("/resources/image/slotmac.gif")}}"/>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="area-cskh block text-center">
                    <div class="title title-cskh text-center" onclick="location.href='{{URl::to('/contact')}}'">
                        <h6>CSKH 24/7</h6>
					</div>
					

                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="block">
                <h4>Danh sách thành viên</h4>
                </div>
            </div>
        </div>

    </div>
        
        <div class="row no-gutters">
            <div class="col-12">
                <div class="outer">
                    <div class="inner" id="">
						<div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******0246</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 750.000 vnđ!</p>
							</div>
						</div>
						<div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******4561</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 1.500.000 vnđ!</p>
							</div>
						</div>
						<div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******4891</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 700.000 vnđ!</p>
							</div>
						</div>
						<div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******9102</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 350.000 vnđ!</p>
							</div>
						</div>
						<div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******1823</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 250.000 vnđ!</p>
							</div>
                        </div>
                        <div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******0145</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 1.700.000 vnđ!</p>
							</div>
                        </div>
                        <div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******1205</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 350.000 vnđ!</p>
							</div>
                        </div>
                        <div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******1226</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 150.000 vnđ!</p>
							</div>
                        </div>
                        <div class="row-dstv">
							<div class="col-dstv-avatar">
								<img src="{{asset('/resources/image/avatar-default.png')}}"/>
							</div>
							<div class="col-dstv-content">
								<h6 class="dstv-notice-name">Chúc mừng ******1926</h6>
								<p>Đã hoàn thành nhiệm vụ và rút thành công 100.000 vnđ!</p>
							</div>
						</div>
						
                        

                    </div>
                </div>

            </div>
            <script>
                
                function autoScrollUp(){
                    $(".inner").css({top:0}) // jump back
                            .animate({top:-$(".outer").outerHeight()},14000,"linear", autoScrollUp); // and animate
                }
                // fix hight of outer:
                // duplicate content of inner:
                $('.inner').html($('.inner').html()+$('.inner').html()+$('.inner').html());
                autoScrollUp();

            </script>
			
        </div>
        
    </div>
</main>
@endsection