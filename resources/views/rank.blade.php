@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<h4 class="title-block">Bảng xếp hạng</h4>
				</div>
			</div>

			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<div class="area-mission">
						<div class="group-tabs">
							<!-- Nav tabs -->
							<ul class="rank-tab">
							  	<li class="active">
										<div class="row row-tab-rank rt1">
											<div class="col-12">
												<a href="#top1" class="" data-toggle="tab">
													<img src="{{asset("/resources/image/img_app/t1.png")}}"/>
												</a>
											</div>
										
										</div>
									</a>
								</li>
								<li class="">
									  <div class="row row-tab-rank rt2">
										  <div class="col-12">
											<a href="#top2" class="" data-toggle="tab">
												  <img src="{{asset("/resources/image/img_app/t2.png")}}"/>
											</a>
										  </div>
									
									  </div>
								  </a>
							  </li>
							  <li class="">
										<div class="row row-tab-rank rt3">
											<div class="col-12">
												<a href="#top3" class="" data-toggle="tab">
												<img src="{{asset("/resources/image/img_app/t3.png")}}"/>
												</a>
											</div>
											
										</div>
									</a>
								</li>
								<li class="">
											<div class="row row-tab-rank rt4">
												<div class="col-12">
													<a href="#top4" class="" data-toggle="tab">
														<img src="{{asset("/resources/image/img_app/t4.png")}}"/>
													</a>
												</div>
												
											</div>
										</a>
									</li>
									<li class="">
										  	<div class="row row-tab-rank rt5">
												<div class="col-12">
													<a href="#top5" class="" data-toggle="tab">
														<img src="{{asset("/resources/image/img_app/t5.png")}}"/>
													</a>
												</div>
												
										  	</div>
									  	</a>
								 	</li>
							
							</ul>
					  
							<!-- Tab panes -->
							<div class="tab-content clearfix">
								<div  class="tab-pane in fade  active" id="top1">
									<h4 class="title-block">BHX TOP 1</h4>

									<?php 
									$count = 0;
								?>
								@foreach($rank1 as $val)
								<?php 
									$count++;
									$user= DB::table('users')->where('phone', $val->ofuser)->first();
									$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
									$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();
									$role = DB::table('role')->where('ofrole', $user->role)->first();
			
								?>
									<div class="row no-gutters container-fluid rank rank-{{$count}}"  data-id="{{$user->id}}" onclick="getdetail(this)">
										<div class="col-1 text-center">
											<h1 style="color: red;font-size: 24px;margin: 20px 0px; text-decoration:underline">{{$count}}</h1>
										</div>
										<div class="col-2 text-center">
											<div class="account-avatar" >
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-2">
											<div class="rank-content">
													<b><span>{{$info->nickname}}</span></b>
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><marquee behavior="scroll">{{$user->status}}</marquee></b>	
											</div>		
										</div>
										<div class="col-3">
											<div class="rank-content">
												<b style="color:#fff">{{number_format($wallet->coin,0,',','.')}} <i style="color: yellow" class="fa fa-star" aria-hidden="true"></i></span></b>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top2">
									<h4 class="title-block">BHX TOP 2</h4>

									<?php 
									$count = 0;
								?>
								@foreach($rank2 as $val)
								<?php 
									$count++;
									$user= DB::table('users')->where('phone', $val->ofuser)->first();
									$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
									$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();
									$role = DB::table('role')->where('ofrole', $user->role)->first();
			
								?>
									<div class="row no-gutters container-fluid rank rank-{{$count}}"  data-id="{{$user->id}}" onclick="getdetail(this)">
										<div class="col-1 text-center">
											<h1 style="color: red;font-size: 24px;margin: 20px 0px; text-decoration:underline">{{$count}}</h1>
										</div>
										<div class="col-2 text-center">
											<div class="account-avatar" >
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-2">
											<div class="rank-content">
													<b><span>{{$info->nickname}}</span></b>
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><marquee behavior="scroll">{{$user->status}}</marquee></b>	
											</div>		
										</div>
										<div class="col-3">
											<div class="rank-content">
												<b style="color:#fff">{{number_format($wallet->coin,0,',','.')}} <i style="color: yellow" class="fa fa-star" aria-hidden="true"></i></span></b>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top3">
									<h4 class="title-block">BHX TOP 3</h4>

									<?php 
									$count = 0;
								?>
								@foreach($rank3 as $val)
								<?php 
									$count++;
									$user= DB::table('users')->where('phone', $val->ofuser)->first();
									$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
									$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();
									$role = DB::table('role')->where('ofrole', $user->role)->first();
			
								?>
									<div class="row no-gutters container-fluid rank rank-{{$count}}"  data-id="{{$user->id}}" onclick="getdetail(this)">
										<div class="col-1 text-center">
											<h1 style="color: red;font-size: 24px;margin: 20px 0px; text-decoration:underline">{{$count}}</h1>
										</div>
										<div class="col-2 text-center">
											<div class="account-avatar" >
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-2">
											<div class="rank-content">
													<b><span>{{$info->nickname}}</span></b>
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><marquee behavior="scroll">{{$user->status}}</marquee></b>	
											</div>		
										</div>
										<div class="col-3">
											<div class="rank-content">
												<b style="color:#fff">{{number_format($wallet->coin,0,',','.')}} <i style="color: yellow" class="fa fa-star" aria-hidden="true"></i></span></b>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top4">
									<?php 
									$count = 0;
								?>
								<h4 class="title-block">BHX TOP 4</h4>

								@foreach($rank4 as $val)

								<?php 
									$count++;
									$user= DB::table('users')->where('phone', $val->ofuser)->first();
									$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
									$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();
									$role = DB::table('role')->where('ofrole', $user->role)->first();
			
								?>
									<div class="row no-gutters container-fluid rank rank-{{$count}}"  data-id="{{$user->id}}" onclick="getdetail(this)">
										<div class="col-1 text-center">
											<h1 style="color: red;font-size: 24px;margin: 20px 0px; text-decoration:underline">{{$count}}</h1>
										</div>
										<div class="col-2 text-center">
											<div class="account-avatar" >
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-2">
											<div class="rank-content">
													<b><span>{{$info->nickname}}</span></b>
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><marquee behavior="scroll">{{$user->status}}</marquee></b>	
											</div>		
										</div>
										<div class="col-3">
											<div class="rank-content">
												<b style="color:#fff">{{number_format($wallet->coin,0,',','.')}} <i style="color: yellow" class="fa fa-star" aria-hidden="true"></i></span></b>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top5">
									<h4 class="title-block">BHX TOP 5</h4>

									<?php 
									$count = 0;
								?>
								@foreach($rank5 as $val)
								<?php 
									$count++;
									$user= DB::table('users')->where('phone', $val->ofuser)->first();
									$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
									$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();
									$role = DB::table('role')->where('ofrole', $user->role)->first();
			
								?>
									<div class="row no-gutters container-fluid rank rank-{{$count}}" data-id="{{$user->id}}" onclick="getdetail(this)">
										<div class="col-1 text-center">
											<h1 style="color: red;font-size: 24px;margin: 20px 0px; text-decoration:underline">{{$count}}</h1>
										</div>
										<div class="col-2 text-center">
											<div class="account-avatar" >
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-2">
											<div class="rank-content">
													<b><span>{{$info->nickname}}</span></b>
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><marquee behavior="scroll">{{$user->status}}</marquee></b>	
											</div>		
										</div>
										<div class="col-3">
											<div class="rank-content">
												<b style="color:#fff">{{number_format($wallet->coin,0,',','.')}} <i style="color: yellow" class="fa fa-star" aria-hidden="true"></i></span></b>
											</div>
										</div>
									</div>
								@endforeach
								</div>
							
								
							  </div>
							</div>
						  </div>
						  <div class="modal fade" id="detail-vip" role="dialog">
							<div class="modal-dialog  modal-dialog-centered">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <h4 class="modal-title text-center">Thông tin VIP</h4>
								</div>
								<div class="modal-body text-center" style="color: #fff">
									
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
								</div>
							  </div>
							  
							</div>
						  </div>
						  <script>
							  $( document ).ready(function() {
									$('.topclick').trigger('click');
								});

								function getdetail(e){
									var id = $(e).data('id');
									$.ajax({
										type: "get",
										url: "{{URL::to('/getdetail')}}",
										data: {id:id}, 
										error: function(reponses){
											console.log(reponses);
											console.log('false');
										},
										success: function(reponses)
										{
											$('#detail-vip .modal-body').html(reponses);
											$("#detail-vip").modal();

										}
									});          
								}
								
						  </script>

					</div>
				</div>
			</div>
		</div>
	</main>
@endsection