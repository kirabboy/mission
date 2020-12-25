@extends('layout.master')
@section('content')
<main id="main">
    <div class="container-fluid p-0">
        <div style="background:rgb(25, 26, 26)">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- Add images to <div class="fotorama"></div> -->
                    <div class="fotorama" data-autoplay="true">
                        @foreach($banners as $val)
                            <img src="{{asset("/resources/image/img_app/".$val->name)}}">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="ranking block"  onclick="location.href='{{URL::to('/rank')}}'">
                        <h4 class="title-block">Bảng xếp hạng</h4>
                        <img src="{{asset('/resources/image/img_app/ranking_vip.png')}}"/>
                    </div>
                    
                </div>
            </div>
            <marquee class="notice-spin block">
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 1: <span class="sdt">✳✳✳✳✳✳4561</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 2: <span class="sdt">✳✳✳✳✳✳3451</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 3: <span class="sdt">✳✳✳✳✳✳8231</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 4: <span class="sdt">✳✳✳✳✳✳9323</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 5: <span class="sdt">✳✳✳✳✳✳5621</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 6: <span class="sdt">✳✳✳✳✳✳0812</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 7: <span class="sdt">✳✳✳✳✳✳4231</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 8: <span class="sdt">✳✳✳✳✳✳5423</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 9: <span class="sdt">✳✳✳✳✳✳1835</span></span>
                <span class="spin-not"><img  src="{{asset("/resources/image/img_app/vip-avatar.png")}}"/>Top 10: <span class="sdt">✳✳✳✳✳✳1782</span></span>
                
            </marquee>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="shopping block">
                        <i class="fa fa-shopping-cart"></i> <span class="shopping-text">Mua sắm</span>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="flashsale block">
                       
                        <h4 class="title-block"> 
                            <img width="25px" src="{{asset("/resources/image/img_app/star_gold.png")}}"/> 
                            Flash sale
                        </h4>
                        <marquee  class="form-control"/><span>100.000vnđ Viettel chỉ với 10.000vnđ</span></marquee>
                    </div>
                </div>
            </div>
    
            <div class="row no-gutters">
                <div class="col-6">
                    <div class="gioi-thieu text-center block">
                        <i class="fa fa-info-circle"></i><span> Giới thiệu</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="giai-dap text-center block"  onclick="location.href='{{URL::to('/helpcenter')}}'">
                        <i class="fa fa-question-circle"></i><span> Giải đáp</span>
                    </div>
                </div>
            </div>
            
            <div class="row no-gutters">
                <div class="col-6">
                    <div class="hotro block">
                        <h4 class="title-block">Hỗ trợ 24/7</h4>
                        <img  src="{{asset("/resources/image/img_app/tuvan.png")}}" onclick="location.href='{{URL::to('/contact')}}'"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hotro block">
                        <h4 class="title-block">Mua điểm VIP</h4>
                        <img  src="{{asset("/resources/image/img_app/vip-upgrade.png")}}" onclick="location.href='{{URL::to('/buycoin')}}'"/>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="qua block">
                        <h4 class="title-block">Hộp quà may mắn</h4>
                        <img  src="{{asset("/resources/image/img_app/gift.png")}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection