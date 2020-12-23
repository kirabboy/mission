@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<h4 class="block title-block">
						Chi tiết nhiệm vụ
					</h4>			
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
							<h5>
								@if($mission->type ==1)
								Chia sẻ lên Facebook(Ấn copy để copy nội dung chia sẻ nhanh hơn):<br/> Không cần một xu vốn vẫn kiếm được mấy chục ngàn chỉ 5 phút với app uy tín này mọi người ơi {{URL::to('/')}}
								<input id="linkhid" type="text"  style="top: -1000px; left:-1000px; position: absolute" value="Chia sẻ lên Facebook: Không cần một xu vốn vẫn kiếm được mấy chục ngàn chỉ 5 phút với app uy tín này mọi người ơi {{URL::to('/')}}"/>
								<span class="btn btn-primary" onclick="copiecode()"> Copy </span>
								@elseif($mission->type ==2)
								Truy cập link youtube(Ấn copy để copy link nhanh hơn) <br/>{{$mission->link}}
								<input id="" type="text"  style="top: -1000px; left:-1000px; position: absolute"  value="{{$mission->link}}"/>
								<a class="btn btn-primary" href="{{$mission->link}}"> Truy cập </a>
								@else
								Chia sẻ lên Zalo(Ấn copy để copy nội dung chia sẻ nhanh hơn): <br/>Không cần một xu vốn vẫn kiếm được mấy chục ngàn chỉ 5 phút với app uy tín này mọi người ơi {{URL::to('/')}}
								<input id="linkhid" type="text" style="top: -1000px; left:-1000px; position: absolute"  value="Chia sẻ lên Facebook: Không cần một xu vốn vẫn kiếm được mấy chục ngàn chỉ 5 phút với app uy tín này mọi người ơi {{URL::to('/')}}"/>
								<span class="btn btn-primary" onclick="copiecode()"> Copy </span>
								@endif
								</h5>
								<script>
									function copiecode() {
									  var copyText = document.getElementById("linkhid");
									  copyText.select();
									  copyText.setSelectionRange(0, 99999)
									  document.execCommand("copy");
									  alert("Đã copy: " + copyText.value);
									}
								</script>
						</div>
						<h5>
						<div class="form-group">
							<h5>Số lượt còn lại: {{$mission->count}}</h5>
						</div>
						<div class="form-group">
							<h5>Mô tả: </h5>
							<p>
								{!! $mission->description !!}
							</p>
						</div>
					
				
				<div class="form-group text-center">
					<h5>Thao tác nhiệm vụ: </h5>
					@if($checkMission != null)
						@if($checkMission->result != null && $checkMission->status == 0)
							<div class="form-group text-center">
								<a class="btn btn-success" href="{{URL::to('/donemission/'.$mission->id)}}">Xác nhận</a>
							</div>
						@endif
					@endif
					<p class="text-center">
						@if($checkMission != null)
							@if($checkMission->status == 2 )
								<a class="btn btn-success">Đang duyệt</a>
							
							@elseif($checkMission->status == 1)
								<a class="btn btn-danger">Đã huỷ</a>
							@elseif($checkMission->status == 3)
								<a class="btn btn-danger">Đã duyệt</a>
							@endif
						@else
							<a href="{{URL::to('/take-mission/'.$mission->id)}}" class="btn btn-primary">
								Nhận
							</a>
						@endif
					</p>
				</div>
				<div class="form-group img-mission-detail text-center">
					@if($checkMission != null && $checkMission->status != 1)
					<h5>Up ảnh chụp màn hình của bạn lên đây: </h5>
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
					@if($checkMission != null && $checkMission->status != 1)
						@if($checkMission->result != null && $checkMission->status != 1 )
							<div class="img-result">
								<img src="{{asset('/resources/image/'.$checkMission->result)}}"/>
							</div>
						@endif
					@endif
				</div>
						<div class="form-group img-mission-detail">
							<h5>Mẫu: </h5>
							<p>
								<img src="{{asset('/resources/image/'.$mission->example)}}"/>
							</p>
						</div>
						
							
						
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection