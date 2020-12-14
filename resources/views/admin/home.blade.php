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
			<div class="row no-gutters">
				<div class="col-6 text-center">
			        <button style="width: 100%" class="btn btn-success">Tổng thành viên: {{count($users)}}</button>
				</div>
				<div class="col-6 text-center">
			        <button style="width: 100%" class="btn btn-warning">Đăng ký mới hôm nay: {{$count}}</button>
				</div>
			</div>
			<div class="row no-gutters container-fluid row-home-admin">
				<div class="col-12">
                    <a href="{{URL::to('admin/quanlythanhvien')}}" class="btn btn-danger">Quản lý thành viên</a>
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
				<!--<div class="col-6">-->
    <!--                <a href="{{URL::to('admin/duyetlenhnap')}}" class="btn btn-info">Duyệt lệnh nạp</a>-->
				<!--</div>-->
				<div class="col-12">
                    <a href="{{URL::to('admin/create-mission')}}" class="btn btn-info">Đăng nhiệm vụ</a>
				</div>
			</div>
			<div class="row no-gutters container-fluid row-home-admin">
				<div class="col-6">
                    <a href="{{URL::to('admin/duyetvip')}}" class="btn btn-info">Duyệt nâng cấp vip</a>
				</div>
				<div class="col-6">
                    <a href="{{URL::to('admin/lichsunap')}}" class="btn btn-info">Lịch sử nạp</a>
				</div>
			</div>
			<div class="row no-gutters container-fluid row-home-admin">
				<div class="col-6">
                    <a href="{{URL::to('admin/duyetlenhrut')}}" class="btn btn-info">Duyệt lệnh rút</a>
				</div>
				<div class="col-6">
                    <a href="{{URL::to('admin/lichsurut')}}" class="btn btn-info">Lịch sử rút</a>
				</div>
			</div>
		</div>
	</main>
@endsection