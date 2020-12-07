@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Thông tin tài khoản ngân hàng</h5>
					</div>		
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<form id="form-info" action="" method="POST">
						{{ csrf_field() }}
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
							</div>
						@endif
						<div class="form-group">
							<label>Tên chủ tài khoản</label>
							<input class="form-control" name="username" value="{{$bank->username}}" />
						</div>
						<div class="form-group">
							<label>Tên ngân hàng</label>
							<input class="form-control" name="bankname" value="{{$bank->bankname}}"/>
						</div>
						<div class="form-group">
							<label>Số tài khoản</label>
							<input class="form-control" name="banknumber" value="{{$bank->banknumber}}"/>
						</div>
						
						<div class="form-group text-center">
							<button class="btn btn-primary">Cập nhật</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
@endsection