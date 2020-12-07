@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12">
					<div class="area-img-login">
						<img src="{{asset('/resources/image/join.jpeg')}}"/>
					</div>
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<form class="form-register" action="" method="POST"  oninput='repassword.setCustomValidity(password.value != repassword.value ? "Mật khẩu không khớp!" : "")'>
						{{ csrf_field() }}
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{{Session::get('error')}}
							</div>
						@endif

						<div class="form-group">
							<label><i class='fas fa-phone-square-alt'></i> Số điện thoại</label>
							<input type="number" id="phone" name="phone" class="form-control" required/>
						</div>
						<div class="form-group">
							<label><i class='fas fa-lock'></i> Mật khẩu</label>
							<input type="text" id="password" name="password" class="form-control" required/>
						</div>
						<div class="form-group">
							<label><i class='fas fa-lock'></i> Mật khẩu</label>
							<input type="text" id="repassword" name="repassword" class="form-control" required/>
						</div>
						<div class="form-group">
							<label><i class='fas fa-phone'></i> Mã giới thiệu</label>
							<input type="text" id="refphone" name="codeinvite" class="form-control" value="{{$codeinvite}}" @if($codeinvite != null) readonly @endif/>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-primary">Đăng ký</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row no-gutters">
				<p>Đã có tài khoản: <a href="{{URL::to('/login')}}">Đăng nhập ngay!</a></p>
			</div>
		</div>
	</main>
@endsection