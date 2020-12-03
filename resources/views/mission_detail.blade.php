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
							<h5>Tiền nhận được: {{$mission->price}} vnđ</h5>
						</div>
						<div class="form-group">
							<h5>Link: <a class="btn btn-primary" href="{{$mission->link}}"> Ấn vào</a></h5>
						</div>
						<h5>
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
						
							<div class="form-group img-mission-detail text-center">
								@if($checkMission != null && $checkMission->status != 1)
								<h5>Up ảnh chụp màn hình của bạn lên đây: </h5>
									@if($checkMission->result != null && $checkMission->status != 1 )
										<div class="img-result">
											<img src="{{asset('/resources/image/'.$checkMission->result)}}"/>
										</div>
									@endif
								@endif
								@if($checkMission != null)
									@if($checkMission->status == 0 )
									<p>
										<form action="{{URL::to("/uploadimgmission")}}" method="POST" enctype="multipart/form-data" >
											{{ csrf_field() }}
											<input type="hidden" name="idmission" value="{{$mission->id}}"/>
											<input  class="form-control" type="file" name="result" multiple required/>
											<button id="upimg" class="btn btn-info" type="submit">
												@if($checkMission->result != null)
												Đổi ảnh	
												@else
												Đăng ảnh
												@endif
											</button>
										</form>
									</p>
									@endif
								@endif
							</div>
							@if($checkMission != null)
								@if($checkMission->result != null && $checkMission->status == 0)
									<div class="form-group text-center">
										<a class="btn btn-success" href="{{URL::to('/donemission/'.$mission->id)}}">Xác nhận</a>
									</div>
								@endif
							@endif
						
						<div class="form-group text-center">
							<h5>Thao tác nhiệm vụ: </h5>
							<p class="text-center">
								@if($checkMission != null)
									@if($checkMission->status == 2 )
										<a class="btn btn-success">Đã xong</a>
									@elseif($checkMission->status == 0 )
										<a href="{{URL::to('/take-mission/'.$mission->id)}}" class="btn btn-danger">
											Huỷ
										</a>
									@elseif($checkMission->status == 1)
										<a class="btn btn-danger">Đã huỷ</a>
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