@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Lịch sử tài khoản</h5>
					</div>			
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
					<div class="area-history">
						<div class="container">
							@foreach ($histories as $history)
								<div class="alert alert-info" role="alert">
									{{$history->content}}
								</div>
							@endforeach
						</div>
						{{ $histories->links() }}
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection