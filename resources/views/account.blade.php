@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12">
                    <div class="area-account-top">
                        <div class="row no-gutters">
                            <div class="col-3 text-center">
                                <div class="account-avatar block">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="account-info block">
                                    <p>Tài khoản đăng nhập: <span>{{$user->phone}}</span></p>
                                    <p>Mã mời: <span>{{$user->referal_code}}</span></p>
                                    <p>Cấp độ tài khoản: 
                                        <span> 
                                            @if($user->role == 0)
                                                Đồng
                                            @elseif($user->role == 1)
                                                Bạc
                                            @elseif($user->role == 2)
                                                Vàng
                                            @elseif($user->role == 3)
                                                Bạch kim
                                            @elseif($user->role == 4)
                                                Kim cương
                                            @elseif($user->role == 99)
                                                Thách đấu admin
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="account-logout text-center block">
                                    <a href="{{URL::to('/logout')}}">
                                        <img src="{{asset('/resources/image/exit.png')}}"/>
                                        <p>Đăng xuất</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="area-balance block">
                                    <div class="alert balance-alert alert-info text-center" role="alert">
                                        <h4>Số dư ví: <span>{{$wallet->balance}}</span> tiền vàng</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Số dư cá nhân
                                    </p>
                                    <p class="amount-price">
                                        {{$wallet->balance}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Nhiệm vụ hôm nay
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->today_mission_amount}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Hoa hồng nhận được
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->total_referal}}
                                    </p> 
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Tổng doanh thu hôm nay
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->today_total}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Tổng doanh thu tháng
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->month_total}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Tổng doanh thu
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->total}}
                                    </p> 
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-6 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Nhiệm vụ hôm nay hoàn thành
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->today_count_mission}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Nhiệm vụ đã hoàn thành
                                    </p>
                                    <p class="amount-price">
                                        {{$statistical->total_mission}}
                                    </p> 
                                </div>
                            </div>

                        </div>
                        <div class="row-user row no-gutters">
                            <div class="col-4 text-center">
                                <div class="block area-user">
                                    <a href="{{URL::to('/my-info')}}">
                                        <p class="user-title">
                                            Thông tin cá nhân
                                        </p>
                                        <img src="{{asset('/resources/image/edit-info.png')}}"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-user">
                                    <a href="{{URL::to('/my-referal')}}">
                                        <p class="amount-title">
                                            Mời bạn bè
                                        </p>
                                        <img src="{{asset('/resources/image/affiliate.png')}}"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-user">
                                    <a href="{{URL::to('/helpcenter')}}">
                                        <p class="amount-title">
                                            Sổ tay trợ giúp
                                        </p>
                                        <img src="{{asset('/resources/image/help.png')}}"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
				</div>
			</div>
		</div>
	</main>
@endsection