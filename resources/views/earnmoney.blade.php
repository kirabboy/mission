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
						@foreach($missions as $value)
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
	</main>
@endsection