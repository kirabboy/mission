@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Nạp tiền vào tài khoản</h5>
					</div>		
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<form id="form-info" action="" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{Session::get('success')}}
							</div>
						@endif
						<div id="alert-deposit" style="display: none" class="alert alert-primary text-center" role="alert">
							<b>Bạn chuyển <span style="color: red" id="amount-alert"></span> vào tài khoản ngân hàng số tiền muốn nạp và up biên lai lên</b><br />
							<b>Chủ tài khoản: </b><span>Nguyễn Văn A</span><br />
							<b>Số tài khoản: </b><span>0123123123123123</span><br />
							<b>Tên ngân hàng: </b><span>VietcomBank</span>
						  </div>
						  
						<div class="form-group">
							<label>Nhập vào số tiền bạn muốn nạp</label>
							<input id="amount" class="form-control" type="number" name="amount" value="" required/>
						</div>
						<div class="form-group">
							<label>Biên lai chuyển tiền</label>
							<input class="form-control" type="file" name="bill" value="" required/>
						</div>
						<div class="form-group text-center">
							<button class="btn btn-primary">Nạp</button>
						</div>
					</form>
					<script>
						$('#amount').on('keyup', function(){
							$('#alert-deposit').css('display', 'block');
							$('#amount-alert').text($('#amount').val());
						})
					</script>
				</div>
			</div>
		</div>
	</main>
@endsection