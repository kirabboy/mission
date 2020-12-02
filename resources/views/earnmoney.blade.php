@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Danh sách nhiệm vụ</h5>
					</div>			
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<div class="area-mission">
						<div class="group-tabs tab-earn">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs col" role="tablist">
							  <li role="presentation" class="active "><a href="#facebook" aria-controls="home" role="tab" data-toggle="tab">Facebook</a></li>
							  <li role="presentation"><a class="" href="#youtube" aria-controls="profile" role="tab" data-toggle="tab">Youtube</a></li>
							  <li role="presentation"><a class="" href="#zalo" aria-controls="messages" role="tab" data-toggle="tab">Zalo</a></li>
							</ul>
					  
							<!-- Tab panes -->
							<div class="tab-content">
							  <div role="tabpanel" class="tab-pane active" id="facebook">
								@foreach($mission_f as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="{{asset('/resources/image/facebook.png')}}"/>
												</div>
												<div class="col-6">
													<h5 class="mission-price">{{$value->price}} VNĐ</h5>
													<h5 class="mission-name">{{$value->name}}</h5>
												</div>
												<div class="col-3" style="padding: 5px">
													<h5>Còn</h5>
													<h5 class="mission-count">{{$value->count}}</h5>
												</div>
											</div>
										</a>
									</div>
								@endforeach
								</div>
							  <div role="tabpanel" class="tab-pane" id="youtube">
								@foreach($mission_y as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="{{asset('/resources/image/facebook.png')}}"/>
												</div>
												<div class="col-6">
													<h5 class="mission-price">{{$value->price}} VNĐ</h5>
													<h5 class="mission-name">{{$value->name}}</h5>
												</div>
												<div class="col-3" style="padding: 5px">
													<h5>Còn</h5>
													<h5 class="mission-count">{{$value->count}}</h5>
												</div>
											</div>
										</a>
									</div>
								@endforeach
							  </div>
							  <div role="tabpanel" class="tab-pane" id="zalo">
								@foreach($mission_z as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="{{asset('/resources/image/facebook.png')}}"/>
												</div>
												<div class="col-6">
													<h5 class="mission-price">{{$value->price}} VNĐ</h5>
													<h5 class="mission-name">{{$value->name}}</h5>
												</div>
												<div class="col-3" style="padding: 5px">
													<h5>Còn</h5>
													<h5 class="mission-count">{{$value->count}}</h5>
												</div>
											</div>
										</a>
									</div>
								@endforeach
							  </div>
							</div>
						  </div>
						
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection