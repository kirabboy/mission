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
							<ul class="nav nav-tabs">
							  <li class="active "><a href="#top1" class="" data-toggle="tab">VIP 1</a></li>
							  <li><a class="" href="#top2" data-toggle="tab">VIP 2</a></li>
							  <li><a class="" href="#top3" data-toggle="tab">VIP 3</a></li>
							  <li><a class="" href="#top4" data-toggle="tab">VIP 4</a></li>
							  <li><a class="" href="#top5" data-toggle="tab">VIP 5</a></li>

							</ul>
					  
							<!-- Tab panes -->
							<div class="tab-content clearfix">
								<div  class="tab-pane fade in active" id="top1">
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
									<div class="row no-gutters container-fluid rank rank-{{$count}}" >
									
										<div class="col-2 text-center">
											<div class="account-avatar" style="height: 100%">
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-6">
											<div class="rank-content">
												<b><span style="color: red;font-size: 14px;margin: 20px 0px;">{{$count}}</span> 
													Nickname: <span>{{$info->nickname}}</span></b><br/>
												<b>{{number_format($wallet->coin,0,',','.')}} <span style="color:white">coin</span></span></b><br/>
											
			
			
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><span>Cảm nghĩ: </span><marquee>{{$user->status}}</marquee></b><br/>
											
			
			
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top2">
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
									<div class="row no-gutters container-fluid rank rank-{{$count}}" >
									
										<div class="col-2 text-center">
											<div class="account-avatar" style="height: 100%">
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-6">
											<div class="rank-content">
												<b><span style="color: red;font-size: 14px;margin: 20px 0px;">{{$count}}</span> 
													Nickname: <span>{{$info->nickname}}</span></b><br/>
												<b>{{number_format($wallet->coin,0,',','.')}} <span style="color:white">coin</span></span></b><br/>
											
			
			
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><span>Cảm nghĩ: </span><marquee>{{$user->status}}</marquee></b><br/>
											
			
			
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top3">
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
									<div class="row no-gutters container-fluid rank rank-{{$count}}" >
									
										<div class="col-2 text-center">
											<div class="account-avatar" style="height: 100%">
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-6">
											<div class="rank-content">
												<b><span style="color: red;font-size: 14px;margin: 20px 0px;">{{$count}}</span> 
													Nickname: <span>{{$info->nickname}}</span></b><br/>
												<b>{{number_format($wallet->coin,0,',','.')}} <span style="color:white">coin</span></span></b><br/>
											
			
			
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><span>Cảm nghĩ: </span><marquee>{{$user->status}}</marquee></b><br/>
											
			
			
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top4">
									<?php 
									$count = 0;
								?>
								@foreach($rank4 as $val)
								<?php 
									$count++;
									$user= DB::table('users')->where('phone', $val->ofuser)->first();
									$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
									$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();
									$role = DB::table('role')->where('ofrole', $user->role)->first();
			
								?>
									<div class="row no-gutters container-fluid rank rank-{{$count}}" >
									
										<div class="col-2 text-center">
											<div class="account-avatar" style="height: 100%">
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-6">
											<div class="rank-content">
												<b><span style="color: red;font-size: 14px;margin: 20px 0px;">{{$count}}</span> 
													Nickname: <span>{{$info->nickname}}</span></b><br/>
												<b>{{number_format($wallet->coin,0,',','.')}} <span style="color:white">coin</span></span></b><br/>
											
			
			
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><span>Cảm nghĩ: </span><marquee>{{$user->status}}</marquee></b><br/>
											
			
			
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div  class="tab-pane fade  active" id="top5">
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
									<div class="row no-gutters container-fluid rank rank-{{$count}}" >
									
										<div class="col-2 text-center">
											<div class="account-avatar" style="height: 100%">
												<div class="khung-avatar khung-avatar-{{$role->ofrole}}" style="background-image: url('{{asset('/resources/image/img_avatar/'.$user->avatar)}}')">
													<div class="avatar" ></div>
												</div>
											</div>
			
										</div>
										<div class="col-6">
											<div class="rank-content">
												<b><span style="color: red;font-size: 14px;margin: 20px 0px;">{{$count}}</span> 
													Nickname: <span>{{$info->nickname}}</span></b><br/>
												<b>{{number_format($wallet->coin,0,',','.')}} <span style="color:white">coin</span></span></b><br/>
											
			
			
											</div>
										</div>
										<div class="col-4">
											<div class="rank-content">
												<b><span>Cảm nghĩ: </span><marquee>{{$user->status}}</marquee></b><br/>
											
			
			
											</div>
										</div>
									</div>
								@endforeach
								</div>
							
								
							  </div>
							</div>
						  </div>
						  <script>
							  $( document ).ready(function() {
									$('.topclick').trigger('click');
								});
						  </script>
						
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection