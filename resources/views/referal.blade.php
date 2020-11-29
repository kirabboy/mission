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
					<div class="form-group link-ref">
						<label>Copy link giới thiệu và gửi cho bạn bè của bạn</label>
						<input class="form-control" id="linkref" value="{{URL::to('/register/'.$user->referal_code)}}"/>
					</div>
					<div class="form-group text-center">
						<button onclick="copiecode()" class="btn btn-info">Copy</button>
					</div>
				</div>
			</div>
			<script>
				function copiecode() {
				  var copyText = document.getElementById("linkref");
				  copyText.select();
				  copyText.setSelectionRange(0, 99999)
				  document.execCommand("copy");
				  alert("Đã copy link của bạn: " + copyText.value);
				}
				</script>
				
		</div>
	</main>
@endsection