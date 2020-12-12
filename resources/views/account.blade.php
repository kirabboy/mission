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
                                            @elseif($user->role == -1)
                                                Xanh
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
                                        <h4>Số dư ví: <span>{{number_format($wallet->balance,0,',','.')}}</span> vnđ</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="block">
                                    <div class="alert alert-warning text-center" onclick="location.href='{{URL::to('/deposit')}}'" role="alert">
                                        <h5 style="color:#000;">Nạp tiền</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="block">
                                    <div class="alert  alert-dark text-center" onclick="location.href='{{URL::to('/withdrawn')}}'" role="alert">
                                        <h5 style="color:#000;">Rút tiền</h5>
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
                                        {{number_format($wallet->balance,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Nhiệm vụ hôm nay
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->today_mission_amount,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Hoa hồng nhận được
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->total_referal,0,',','.')}} vnđ
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
                                        {{number_format($statistical->today_total,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Tổng doanh thu tháng
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->month_total,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Tổng doanh thu
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->total,0,',','.')}} vnđ
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
                                        {{number_format($statistical->today_count_mission,0,',','.')}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Nhiệm vụ đã hoàn thành
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->total_mission,0,',','.')}}
                                    </p> 
                                </div>
                            </div>

                        </div>
                        <div class="row no-gutters">
                            <div class="col-6 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Nhiệm vụ hôm nay còn lại
                                    </p>
                                    <p class="amount-price">
                                        {{$role->max_mission-$statistical->today_count_mission}}
                                    </p> 
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="block area-amount">
                                    <p class="amount-title">
                                        Số thành viên cấp dưới
                                    </p>
                                    <p class="amount-price">
                                        {{$count_f}}
                                    </p> 
                                </div>
                            </div>

                        </div>
                        <div class="row no-gutters">
                            <div class="col-6 text-center">
                                <div class="block area-spin area-user">
                                    <a href="{{URL::to('/depwith-history')}}">
                                        <p class="amount-title">
                                            Lịch sử nạp rút
                                        </p>
                                        <img src="{{asset('/resources/image/clock.png')}}"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="block area-spin area-user">
                                    <a href="{{URL::to('/spin-history')}}">
                                        <p class="amount-title">
                                            Lịch sử vòng quay
                                        </p>
                                        <img src="{{asset('/resources/image/swift.png')}}"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row-user row no-gutters">
                            <div class="col-4 text-center">
                                <div class="block area-user">
                                    <a href="{{URL::to('/manager-info')}}">
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