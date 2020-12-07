@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Lịch sử tài khoản</h5>
					</div>			
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<div class="area-history">
						<div class="group-tabs tab-history">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
							  <li class="active"><a href="#overview" data-toggle="tab">Tổng quan</a></li>
							  <li><a href="#missiondone" data-toggle="tab"> Đã xong</a></li>
							  <li><a href="#missionpending" data-toggle="tab"> Đang duyệt</a></li>
							  <li><a href="#missionnew" data-toggle="tab">Đang làm</a></li>
							  <li><a href="#missioncancel" data-toggle="tab">Đã huỷ</a></li>
							</ul>
					  
							<!-- Tab panes -->
							<div class="tab-content clearfix">
							  <div class="tab-pane fade in active" id="overview">
									<div class="container">
										@foreach ($histories as $history)
											<div class="alert alert-info" role="alert">
												{{$history->content}}
											</div>
										@endforeach
									</div>
									<div class="text-center">
										{{ $histories->links() }}
									</div>
								</div>
							  <div class="tab-pane fade" id="missiondone">
								@foreach($mission_done as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="
													@if($value->type== 1)
													{{asset('/resources/image/facebook.png')}}
													@elseif($value->type ==2)
													{{asset('/resources/image/youtube.png')}}
													@else
													{{asset('/resources/image/zalo.png')}}

													@endif
													"/>
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
							  <div class="tab-pane fade" id="missionpending">
								@foreach($mission_pending as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="
													@if($value->type== 1)
													{{asset('/resources/image/facebook.png')}}
													@elseif($value->type ==2)
													{{asset('/resources/image/youtube.png')}}
													@else
													{{asset('/resources/image/zalo.png')}}

													@endif
													"/>
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
							  <div class="tab-pane fade" id="missioncancel">
								@foreach($mission_cancel as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="
													@if($value->type== 1)
													{{asset('/resources/image/facebook.png')}}
													@elseif($value->type ==2)
													{{asset('/resources/image/youtube.png')}}
													@else
													{{asset('/resources/image/zalo.png')}}

													@endif
													"/>
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
							  <div class="tab-pane fade" id="missionnew">
								@foreach($mission_new as $value)
									<div class="alert alert-dark" role="alert">
										<a href="{{URL::to('/mission-detail/'.$value->id)}}">
											<div class="row row-mission text-center">
												<div class="col-3 img-mission" style="border-right: 1px dashed gray;">
													<img src="
													@if($value->type== 1)
													{{asset('/resources/image/facebook.png')}}
													@elseif($value->type ==2)
													{{asset('/resources/image/youtube.png')}}
													@else
													{{asset('/resources/image/zalo.png')}}

													@endif
													"/>
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