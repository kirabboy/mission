@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutter">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Nâng cấp tài khoản</h5>
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
							</div>
						@endif
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{!!Session::get('error')!!}
							</div>
						@endif
					</div>				
				</div>
			</div>
			<div class="row-vip">
				
				<div class="row no-gutters container-fluid">
					<div class="col-12">
						<div class="area-vip-pack">
							<div class="alert alert-green" role="alert">
								<div class="row no-gutter">
									<div class="col-4 avatar-vip text-center">
										<img src="{{asset('/resources/image/avatar-default.png')}}"/>
										<h5 class="vip-price">Mặc định</span></h5>
									</div>
									<div class="col-8 content-vip">
										<h5>{{$vip[6]->name}} <span class="vip-price">miễn phí</span></h5>
										<span>Số nhiệm vụ tối đa <b>{{$vip[6]->max_mission}}</b></span><br />
										<span>Tổng nhiệm vụ có thể kiếm được mỗi ngày <b>{{number_format($vip[6]->max_price,0,',','.')}} vnđ</b><br />
										<span>{{$vip[6]->description}}</span><br />
										<span>Thời hạn <b>@if($vip[6]->time == 999) vĩnh viễn @else {{$vip[6]->time}} ngày @endif</b></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid">
					<div class="col-12">
						<div class="area-vip-pack">
							<div class="alert alert-bronze" role="alert">
								<div class="row no-gutter" data-toggle="modal" id="{{$vip[0]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
									<div class="col-4 avatar-vip text-center">
										<img src="{{asset('/resources/image/avatar-default.png')}}"/>
										<h5 class="vip-price">Nâng cấp</span></h5>
									</div>
									<div class="col-8 content-vip">
										<h5>{{$vip[0]->name}} <span class="vip-price">{{number_format($vip[0]->role_price,0,',','.')}} vnđ</span></h5>
										<span>Số nhiệm vụ tối đa <b>{{$vip[0]->max_mission}}</b></span><br />
										<span>Tổng nhiệm vụ có thể kiếm được mỗi ngày <b>{{number_format($vip[0]->max_price,0,',','.')}} vnđ</b><br />
										<span>{{$vip[0]->description}}</span><br />
										<span>Thời hạn <b>@if($vip[0]->time == 999) vĩnh viễn @else {{$vip[0]->time}} ngày @endif</b></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid" >
					<div class="col-12">
						<div class="area-vip-pack">
							<div class="alert alert-secondary" role="alert">
								<div class="row no-gutter"  data-toggle="modal" id="{{$vip[1]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
									<div class="col-4 avatar-vip text-center">
										<img src="{{asset('/resources/image/avatar-default.png')}}"/>
										<h5 class="vip-price">Nâng cấp</span></h5>
									</div>
									<div class="col-8 content-vip">
										<h5>{{$vip[1]->name}} <span class="vip-price">{{number_format($vip[1]->role_price,0,',','.')}} vnđ</h5>
											<span>Số nhiệm vụ tối đa <b>{{$vip[1]->max_mission}}</b></span><br />
											<span>Tổng nhiệm vụ có thể kiếm được mỗi ngày <b>{{number_format($vip[1]->max_price,0,',','.')}} vnđ</b><br />
											<span>{{$vip[1]->description}}</span><br />
											<span>Thời hạn <b>@if($vip[1]->time == 999) vĩnh viễn @else {{$vip[2]->time}} ngày @endif</b></span>
									</div>
								</div>
							</div>						  
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="alert alert-gold" role="alert">
								<div class="row no-gutter"  data-toggle="modal" id="{{$vip[2]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
									<div class="col-4 avatar-vip text-center">
										<img src="{{asset('/resources/image/avatar-default.png')}}"/>
										<h5 class="vip-price">Nâng cấp</span></h5>
									</div>
									<div class="col-8 content-vip">
										<h5>{{$vip[2]->name}} <span class="vip-price">{{number_format($vip[2]->role_price,0,',','.')}} vnđ</h5>
											<span>Số nhiệm vụ tối đa <b>{{$vip[2]->max_mission}}</b></span><br />
											<span>Tổng nhiệm vụ có thể kiếm được mỗi ngày <b>{{number_format($vip[2]->max_price,0,',','.')}} vnđ</b><br />
											<span>{{$vip[2]->description}}</span><br />
											<span>Thời hạn <b>@if($vip[2]->time == 999) vĩnh viễn @else {{$vip[2]->time}} ngày @endif</b></span>
									</div>
								</div>
							</div>						  
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="alert alert-platium" role="alert">
								<div class="row no-gutter"  data-toggle="modal" id="{{$vip[3]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
									<div class="col-4 avatar-vip text-center">
										<img src="{{asset('/resources/image/avatar-default.png')}}"/>
										<h5 class="vip-price">Nâng cấp</span></h5>
									</div>
									<div class="col-8 content-vip">
										<h5>{{$vip[3]->name}} <span class="vip-price">{{number_format($vip[3]->role_price,0,',','.')}} vnđ</h5>
											<span>Số nhiệm vụ tối đa <b>{{$vip[3]->max_mission}}</b></span><br />
											<span>Tổng nhiệm vụ có thể kiếm được mỗi ngày <b>{{number_format($vip[3]->max_price,0,',','.')}} vnđ</b><br />
											<span>{{$vip[3]->description}}</span><br />
											<span>Thời hạn <b>@if($vip[3]->time == 999) vĩnh viễn @else {{$vip[3]->time}} ngày @endif</b></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="alert alert-diamond" role="alert">
								<div class="row no-gutter"  data-toggle="modal" id="{{$vip[4]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
									<div class="col-4 avatar-vip text-center">
										<img src="{{asset('/resources/image/avatar-default.png')}}"/>
										<h5 class="vip-price">Nâng cấp</span></h5>
									</div>
									<div class="col-8 content-vip">
										<h5>{{$vip[4]->name}} <span class="vip-price">{{number_format($vip[4]->role_price,0,',','.')}} vnđ</h5>
											<span>Số nhiệm vụ tối đa <b>{{$vip[4]->max_mission}}</b></span><br />
											<span>Tổng nhiệm vụ có thể kiếm được mỗi ngày <b>{{number_format($vip[4]->max_price,0,',','.')}} vnđ</b><br />
											<span>{{$vip[4]->description}}</span><br />
											<span>Thời hạn <b>@if($vip[4]->time == 999) vĩnh viễn @else {{$vip[4]->time}} ngày @endif</b></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade in" id="vip-modal-lock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel" style="color: blue;">Thông báo</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						  	Gói vip này hiện chưa thể nâng cấp.
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						</div>
					  </div>
					</div>
				</div>
				<div class="modal fade in" id="vip-modal-unlock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel" style="color: blue;">Thông báo</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body title-up">
						  	Bạn muốn nâng cấp lên gói vip bạc.
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						  <a href="" id="upgrate-role" class="btn btn-primary">Nâng cấp</a>
						</div>
					  </div>
					</div>
				</div>
				
				<script>
				
					function getidrole(idrole){
						var link = "{{URL::to('/deposit/')}}";
						$('#upgrate-role').attr('href', link+'/'+idrole);
						if(idrole == 0){
							var title = 'Bạn muốn nâng cấp lên gói vip đồng';
						}else if(idrole == 1){
							var title = 'Bạn muốn nâng cấp lên gói vip bạc';
						}else if(idrole == 2){
							var title = 'Bạn muốn nâng cấp lên gói vip vàng';
						}else if(idrole == 3){
							var title = 'Bạn muốn nâng cấp lên gói vip bạch kim';
						}else if(idrole == 4){
							var title = 'Bạn muốn nâng cấp lên gói vip kim cương';
						}
						$('.title-up').text(title);
					}
				</script>
			</div>
		</div>
	</main>
@endsection