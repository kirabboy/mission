@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
            <h4 class="title-block">Mua COIN VIP</h4>
            <br/>
				</div>
			</div>
			<div class="row  container-fluid">
				<div class="col-6">
					<div class="vip-coin  text-center"  >
                <img src="{{URL::to('/resources/image/img_app/vipcoin.png')}}"/>
                <h5>100 coin</h5>
                <p>giá 100.000 VNĐ</p>
                <a href="https://zalo.me/00855972374503" class="btn btn-danger">Mua ngay</a>
          </div>
        </div>
				<div class="col-6">
					<div class="vip-coin  text-center"  >
                <img src="{{URL::to('/resources/image/img_app/vipcoin.png')}}"/>
                <h5>500 coin</h5>
                <p>giá 250.000 VNĐ</p>
                <a href="https://zalo.me/00855972374503" class="btn btn-danger">Mua ngay</a>
          </div>
        </div>
      </div>
      <div class="row  container-fluid">
				<div class="col-6">
					<div class="vip-coin  text-center"  >
                <img src="{{URL::to('/resources/image/img_app/vipcoin.png')}}"/>
                <h5>1.000 coin</h5>
                <p>giá 500.000 VNĐ</p>
                <a href="https://zalo.me/00855972374503" class="btn btn-danger">Mua ngay</a>
          </div>
        </div>
				<div class="col-6">
					<div class="vip-coin  text-center"  >
                <img src="{{URL::to('/resources/image/img_app/vipcoin.png')}}"/>
                <h5>2.000 coin</h5>
                <p>giá 1.000.000 VNĐ</p>
                <a href="https://zalo.me/00855972374503" class="btn btn-danger">Mua ngay</a>
          </div>
        </div>
      </div>
      <br/>
      <div class="row  container-fluid text-center">
				<div class="col-12" >
          <p style="border-radius: 5px; border: 1px solid #eee; padding: 10px">Ấn mua ngay để liên lạc với chúng tôi hỗ trợ bạn mua coin VIP một cách nhanh chóng và tiện lợi nhất.</p>
        </div>
      </div>
    </div>
            
	</main>
@endsection