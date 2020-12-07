@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12">
					<div class="area-img-login">
						<img src="{{asset('/resources/image/mmo.jpg')}}"/>
					</div>
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<form class="form-login" action="" method="POST">
						{{ csrf_field() }}
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{{Session::get('error')}}
							</div>
						@endif
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
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
						<div class="form-group text-center">
							<button class="btn btn-primary">Đăng nhập</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row no-gutters">
				<p>Chưa có tài khoản: <a href="{{URL::to('/register')}}">Đăng ký ngay!</a></p>
			</div>
		</div>
	</main>
@endsection