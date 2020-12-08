@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Rút tiền</h5>
					</div>		
				</div>
			</div>
			@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
							</div>
						@endif
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{{Session::get('error')}}
							</div>
						@endif
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<form id="form-info" action="" method="POST" >
						{{ csrf_field() }}
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
							</div>
						@endif
						<div id="alert-deposit" class="alert alert-primary text-center" role="alert">
							<h5 style="color: #000">Thông tin tài khoản ngân hàng của bạn</h5>
							<b>Chủ tài khoản: </b><span>{{$bank->username}}</span><br />
							<b>Số tài khoản: </b><span>{{$bank->banknumber}}</span><br />
							<b>Tên ngân hàng: </b><span>{{$bank->bankname}}</span>
						</div>
						  
						<div class="form-group">
							<label>Nhập vào số tiền bạn muốn rút</label>
							<input id="amount" class="form-control" type="number" name="amount" value="" required/>
						</div>
					
						<div class="form-group text-center">
							<button class="btn btn-primary">Rút</button>
						</div>
					</form>
				
				</div>
			</div>
		</div>
	</main>
@endsection