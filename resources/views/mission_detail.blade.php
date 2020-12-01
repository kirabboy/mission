@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Chi tiết nhiệm vụ</h5>
					</div>			
				</div>
			</div>
			@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
							</div>
						@endif
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{{Session::get('error')}}
							</div>
						@endif
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<div class="area-mission-detail">
						<div class="form-group">
							<h5>Tên: {{$mission->name}}</h5>
						</div>
						<div class="form-group">
							<h5>Tiền nhận được: {{$mission->name}}</h5>
						</div>
						<div class="form-group">
							<h5>Số lượt còn lại: {{$mission->count}}</h5>
						</div>
						<div class="form-group">
							<h5>Mô tả: </h5>
							<p>
								{{$mission->description}}
							</p>
						</div>
						<div class="form-group img-mission-detail">
							<h5>Mẫu: </h5>
							<p>
								<img src="{{asset('/resources/image/'.$mission->example)}}"/>
							</p>
						</div>
						@if($checkMission->status == 0 )
							<div class="form-group img-mission-detail">
								<h5>Up kết quả của bạn lên đây: </h5>
								<input type="hidden" class=
								<p>
									<input class="form-control" type="file" name="result" />
								</p>
							</div>
						@endif
						<div class="form-group">
							<h5>Nhận nhiệm vụ: </h5>
							<p class="text-center">
								@if($checkMission != null)
									@if($checkMission->status == 2 )
										<a class="btn btn-success">Hoàn thành</a>
									@elseif($checkMission->status == 0 )
										<a href="{{URL::to('/take-mission/'.$mission->id)}}" class="btn btn-danger">
											Huỷ
										</a>
									@else
										<a href="{{URL::to('/take-mission/'.$mission->id)}}" class="btn btn-primary">
											Nhận
										</a>
									@endif
								@else
									<a href="{{URL::to('/take-mission/'.$mission->id)}}" class="btn btn-primary">
										Nhận
									</a>
								@endif
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection