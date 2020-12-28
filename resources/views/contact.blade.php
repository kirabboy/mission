@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<h4 class="title-block">Liên hệ</h4>
				</div>
			</div>
			<div class="row  container-fluid">
				<div class="col-6">
					<div class="card-zalo text-center"  >
                      <img style="" class="card-img-top" src="{{URL::to('/resources/image/img_app/tvv.jpg')}}" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title" style="color: red; font-weight: 600;">ZALO 1</h5>
                          <p class="card-text"style="color: #000;">Liên lạc qua kênh Zalo của chúng tôi</p>
                          <a href="https://zalo.me/0085590499264" class="btn btn-primary">liên hệ</a>
                        </div>
                      </div>
                </div>
                <div class="col-6">
					<div class="card-zalo text-center" >
                        <img style="" class="card-img-top" src="{{URL::to('/resources/image/img_app/tvv.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="color: red;font-weight: 600;">ZALO 2</h5>
                          <p class="card-text" style="color: #000;">Liên lạc qua kênh Zalo của chúng tôi</p>
                          <a href="https://zalo.me/00855972374503" class="btn btn-primary">Liên hệ</a>
                        </div>
                      </div>
				</div>
            </div>
            <div class="row  container-fluid">
              <div class="col-6">
                <div class="card-zalo text-center" >
                  <img style="" class="card-img-top" src="{{URL::to('/resources/image/img_app/tvv.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                                <h5 class="card-title" style="color: red; font-weight: 600;">ZALO 3</h5>
                                <p class="card-text"style="color: #000;">Liên lạc qua kênh Zalo của chúng tôi</p>
                                <a href="https://zalo.me/0928581585" class="btn btn-primary">liên hệ</a>
                              </div>
                            </div>
                      </div>
                      <div class="col-6">
                <div class="card-zalo text-center" >
                  <img style="" class="card-img-top" src="{{URL::to('/resources/image/img_app/tvv.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                                <h5 class="card-title" style="color: red;font-weight: 600;">ZALO 4</h5>
                                <p class="card-text" style="color: #000;">Liên lạc qua kênh Zalo của chúng tôi</p>
                                <a href="https://zalo.me/00855887891901" class="btn btn-primary">Liên hệ</a>
                              </div>
                            </div>
              </div>
                  </div>
		</div>
	</main>
@endsection