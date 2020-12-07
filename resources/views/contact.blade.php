@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Liên hệ với chúng tôi</h5>
					</div>			
				</div>
			</div>
			<div class="row  container-fluid">
				<div class="col-6">
					<div class="card text-center" >
                        <img class="card-img-top" src="{{URL::to('/resources/image/zalo1.png')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="color: red; font-weight: 600;">ZALO 1</h5>
                          <p class="card-text"style="color: #000;">Liên lạc qua kênh Zalo của chúng tôi</p>
                          <a href="http://zalo.me/00000000000" class="btn btn-primary">liên hệ</a>
                        </div>
                      </div>
                </div>
                <div class="col-6">
					<div class="card text-center" >
                        <img class="card-img-top" src="{{URL::to('/resources/image/zalo2.png')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="color: red;font-weight: 600;">ZALO 2</h5>
                          <p class="card-text" style="color: #000;">Liên lạc qua kênh Zalo của chúng tôi</p>
                          <a href="http://zalo.me/00000000000" class="btn btn-primary">Liên hệ</a>
                        </div>
                      </div>
				</div>
            </div>
            <div class="row  container-fluid">
				<div class="col-6">
					<div class="card text-center" >
                        <img class="card-img-top" src="{{URL::to('/resources/image/zalo1.png')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="color: red; font-weight: 600;">FACEBOOK 1</h5>
                          <p class="card-text"style="color: #000;">Liên lạc qua kênh Facebook của chúng tôi</p>
                          <a href="http://fb.com/facebook" class="btn btn-primary">liên hệ</a>
                        </div>
                      </div>
                </div>
                <div class="col-6">
					<div class="card text-center" >
                        <img class="card-img-top" src="{{URL::to('/resources/image/zalo2.png')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="color: red;font-weight: 600;">FACEBOOK 2</h5>
                          <p class="card-text" style="color: #000;">Liên lạc qua kênh Facebook của chúng tôi</p>
                          <a href="http://fb.com/facebook" class="btn btn-primary">Liên hệ</a>
                        </div>
                      </div>
				</div>
			</div>
		</div>
	</main>
@endsection