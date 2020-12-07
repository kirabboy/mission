@extends('layout.master')
@section('content')
	<main id="main" class="admin">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Quản trị admin</h5>
					</div>	
				</div>
			</div>
			<div class="row no-gutters container-fluid row-home-admin">
				<div class="col-6">
                    <a href="{{URL::to('admin/editbanner')}}" class="btn btn-info">Đổi banner</a>
				</div>
				<div class="col-6">
                    <a href="{{URL::to('admin/history-spin')}}" class="btn btn-info">Xem lịch sử vòng quay</a>
				</div>
			</div>
			<div class="row no-gutters container-fluid row-home-admin">
				<div class="col-6">
                    <a href="{{URL::to('admin/duyetlenhnap')}}" class="btn btn-info">Duyệt lệnh nạp</a>
				</div>
				<div class="col-6">
                    <a href="{{URL::to('admin/history-spin')}}" class="btn btn-info">Xem lịch sử vòng quay</a>
				</div>
			</div>
		</div>
	</main>
@endsection