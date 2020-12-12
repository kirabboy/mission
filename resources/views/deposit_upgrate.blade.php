@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Nâng cấp tài khoản</h5>
						<div class="alert alert-warning text-center" role="alert">
							Chỉ dành cho người chơi muốn nâng cấp tài khoản, nếu bạn muốn nạp tiền vào số dư vui lòng bấm vào đây <a href="{{URL::to('/deposit')}}">Nạp tiền</a>
						</div>
					</div>		
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<form id="form-info" action="" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						@if(Session::has('success'))
							<div class="alert alert-success text-center" role="alert">
								{{Session::get('success')}}
							</div>
						@elseif(Session::has('error'))
							<div class="alert alert-danger text-center" role="alert">
								{!!Session::get('error')!!}
							</div>
						@endif
						<div id="alert-deposit"  class="alert alert-primary text-center" role="alert">
							<b>Bạn muốn nâng cấp tài khoản lên vip {{$role->name}} vui lòng chuyển <span style="color: red" id="amount-alert">{{number_format($role->role_price,0,',','.')}} vnđ</span> vào tài khoản ngân hàng của chúng tôi và up biên lai lên</b><br />
							<b>Chủ tài khoản: </b><span>Hoàng Anh Hiếu  </span> <br />
							<b>Số tài khoản: </b><span><input type="text" style="width: fit-content;" value="37253599987" readonly id="stk" /></span><span style="cursor: pointer; background: green; border: 1px solid #000; border-radius: 5px; padding: 3px 5px; color: #fff;" onclick="copystk()">copy</span><br />
							<b>Tên ngân hàng: </b><span>SCB Phạm Hùng</span>
						  </div>
						  <script>
							  function copystk() {
									/* Get the text field */
									var copyText = document.getElementById("stk");

									/* Select the text field */
									copyText.select();
									copyText.setSelectionRange(0, 99999); /*For mobile devices*/

									/* Copy the text inside the text field */
									document.execCommand("copy");

									/* Alert the copied text */
									alert("Copy số tài khoản: " + copyText.value);
									}
						  </script>
						  <input type="hidden" name="role" value="{{$role->ofrole}}"/>
						<div class="form-group">
							<label>Số tiền bạn phải nạp để nâng cấp lên {{$role->name}}</label>
							<input id="amount" class="form-control" type="number" min="100000" name="amount" value="{{$role->role_price}}" readonly/>
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