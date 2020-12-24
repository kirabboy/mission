@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutter">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h4 class="block title-block">
							Nâng cấp tài khoản
						</h4>
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
				<div class="row no-gutters container-fluid vip-card vip">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="top-vip text-center">
							</div>
							<div class="row no-gutter">
								<div class="col-12 content-vip text-center">
									<h3>Cấp: Thường</h3>
									<p>
										<b class="price">miễn phí</b><br/>
										<b>Tổng nhiệm vụ: </b> <span>3</span><br/> 
										<b>Tổng thu nhập 1 ngày: </b><span>15.000 vnđ</span><br/>
										<b>Thời hạn hết hiệu lực:  </b><span>5 ngày</span><br/>
									</p>
								</div>
							</div>
							<div class="foot-vip">
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid vip-card vip" data-toggle="modal" id="{{$vip[0]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="top-vip text-center">
							</div>
							<div class="row no-gutter">
								<div class="col-12 content-vip text-center">
									<h3>Cấp: Vip 1</h3>
									<p>
										<b class="price">300.000 vnđ</b><br/>
										<b>Tổng nhiệm vụ: </b> <span>5</span><br/> 
										<b>Tổng thu nhập 1 ngày: </b><span>20.000 vnđ</span><br/>
										<b>Thời hạn hết hiệu lực:  </b><span>30 ngày</span><br/>
									</p>
								</div>
							</div>
							<div class="foot-vip">
								<img src="{{asset('/resources/image/img_app/foot-vip1.png')}}"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid vip-card vip" data-toggle="modal" id="{{$vip[1]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="top-vip text-center">
							</div>
							<div class="row no-gutter">
								<div class="col-12 content-vip text-center">
									<h3>Cấp: Vip 2</h3>
									<p>
										<b class="price">1.000.000 vnđ</b><br/>
										<b>Tính năng: </b> <span>Đổi được tên nick name, thay được ảnh đại diện</span><br/> 
										<b>Tổng nhiệm vụ: </b> <span>10</span><br/> 
										<b>Tổng thu nhập 1 ngày: </b><span>40.000 vnđ</span><br/>
										<b>Thời hạn hết hiệu lực:  </b><span>60 ngày</span><br/>
									</p>
								</div>
							</div>
							<div class="foot-vip">
								<img src="{{asset('/resources/image/img_app/foot-vip2.png')}}"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid vip-card vip-3" data-toggle="modal" id="{{$vip[2]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="top-vip text-center">
								<img src="{{asset('/resources/image/img_app/vip3-up.png')}}"/>
							</div>
							<div class="row no-gutter">
								<div class="col-12 content-vip text-center">
									<h3>Cấp: Vip 3</h3>
									<p>
										<b class="price">2.500.000 vnđ</b><br/>
										<b>Tính năng: </b> <span>Đổi tên nickname, thay ảnh đại diện, cập nhật cảm nghĩ.</span><br/> 
										<b>Tổng nhiệm vụ: </b> <span>20</span><br/> 
										<b>Tổng thu nhập 1 ngày: </b><span>100.000 vnđ</span><br/>
										<b>Thời hạn hết hiệu lực:  </b><span>90 ngày</span><br/>
									</p>
								</div>
							</div>
							<div class="foot-vip">
								<img src="{{asset('/resources/image/img_app/foot-vip.png')}}"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row no-gutters container-fluid vip-card vip-4" data-toggle="modal" id="{{$vip[3]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="top-vip text-center">
								<img src="{{asset('/resources/image/img_app/vip4-up.png')}}"/>
							</div>
							<div class="row no-gutter">
								<div class="col-12 content-vip text-center">
									<h3>Cấp: Vip 4</h3>
									<p>
										<b class="price">6.000.000 vnđ</b><br/>
										<b>Tính năng: </b> <span>Đổi tên nickname, thay ảnh đại diện, cập nhật cảm nghĩ, thư ký riêng hỗ trợ</span><br/> 
										<b>Tổng nhiệm vụ: </b> <span>3</span><br/> 
										<b>Tổng thu nhập 1 ngày: </b><span>15.000 vnđ</span><br/>
										<b>Thời hạn hết hiệu lực:  </b><span>5 ngày</span><br/>
									</p>
								</div>
							</div>
							<div class="foot-vip">
								<img src="{{asset('/resources/image/img_app/foot-vip4.png')}}"/>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row no-gutters container-fluid vip-card vip-5" data-toggle="modal" id="{{$vip[4]->ofrole}}" onclick="getidrole(this.id)" data-target="#vip-modal-unlock">
					<div class="col-12">
						<div class="area-vip-pack" >
							<div class="top-vip text-center">
								<img src="{{asset('/resources/image/img_app/vip5-up.png')}}"/>
							</div>
							<div class="row no-gutter">
								<div class="col-12 content-vip text-center">
									<h3>Cấp: Vip 5</h3>
									<p>
										<b class="price">10.000.000 vnđ</b><br/>
										<b>Tính năng: </b> <span>Đổi tên nickname, thay ảnh đại diện, cập nhật cảm nghĩ, thư ký riêng hỗ trợ,mở được gian hàng riêng trên app để buôn bán, có rô bốt làm nhiệm vụ hằng ngày</span><br/> 
										<b>Tổng nhiệm vụ: </b> <span>3</span><br/> 
										<b>Tổng thu nhập 1 ngày: </b><span>15.000 vnđ</span><br/>
										<b>Thời hạn hết hiệu lực:  </b><span>5 ngày</span><br/>
									</p>
								</div>
							</div>
							<div class="foot-vip">
								<img src="{{asset('/resources/image/img_app/foot-vip5.png')}}"/>
							</div>
						</div>
					</div>
				</div>
				
				{{-- <div class="row no-gutters container-fluid">
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
				 --}}
				 <div class="modal fade in" id="vip-modal-unlock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel" style="color: yellow;">Thông báo</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body title-up" style="color: #fff">
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
							var title = 'Bạn muốn nâng cấp lên gói vip 1';
						}else if(idrole == 1){
							var title = 'Bạn muốn nâng cấp lên gói vip 2';
						}else if(idrole == 2){
							var title = 'Bạn muốn nâng cấp lên gói vip 3';
						}else if(idrole == 3){
							var title = 'Bạn muốn nâng cấp lên gói vip 4';
						}else if(idrole == 4){
							var title = 'Bạn muốn nâng cấp lên gói vip 5';
						}
						$('.title-up').text(title);
					}
				</script>
			</div>
		</div>
	</main>
@endsection