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
					<?php 
						$count = 0;
					?>
					@foreach($rank as $val)
					<?php 
						$count++;
						$user= DB::table('users')->where('phone', $val->ofuser)->first();
						$info= DB::table('info_users')->where('ofuser', $val->ofuser)->first();
						$wallet= DB::table('wallet')->where('ofuser', $val->ofuser)->first();

					?>
						<div class="row no-gutters container-fluid   rank rank-{{$count}}" >
							<div class="col-4 text-center">
								<div class="rank-avatar ">
                                    <div class="khung khung-avatar-{{$user->role}}" >
                                        <img src="{{asset('/resources/image/img_avatar/'.$user->avatar)}}"/>
                                    </div>
								</div>
								<h4 class="top-rank"><span>Top {{$count}}</span></h4>

							</div>
							<div class="col-8">
								<div class="rank-content">
									<b>Nick name: <span>{{$info->nickname}}</span></b><br/>
									<b>VIP: <span>{{$user->role}}</span></b><br/>
									<b>Số điểm: <span> {{number_format($wallet->coin,0,',','.')}} coin</span></b><br/>
									<b>Số dư: <span> {{number_format($wallet->balance,0,',','.')}} vnđ</span></b><br/>
									<b>Cảm nghĩ: </b><br/>
									<p>
										{{$user->status}}
									</p>


								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</main>
@endsection