@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12">
                    <div class="area-account-top">
                        <div class="khung-{{$role->ofrole}}">
                        <div class="row no-gutters">
                            <div class="col-6 text-center">
                                <div class="account-avatar block">
                                    <div class="khung-avatar-{{$role->ofrole}}" >
                                        <img src="{{asset('/resources/image/img_avatar/'.$user->avatar)}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-left">
                                <div class="account-info block">
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#avatar-modal">Đổi Avatar</a>
                                    <a class="btn btn-info" data-toggle="modal" data-target="#nickname-modal">Đổi nickname</a>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#status-modal">Đổi cảm nghĩ</a>
                                    <a class="btn btn-danger" href="{{URL::to('/logout')}}">Đăng xuất</a>

                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters account-block-name alert alert-name">
                            <div class="col-6">
                                <b> Tài khoản: <span>{{$user->phone}}</span></b><br/>
                                <b> Nickname: <span>{{$info->nickname}}</span></b><br/>
                            </div>
                            <div class="col-6" style="border-left: 1px dotted #eee;padding-left: 10px">
                                <b> Cấp độ: <span>{{$role->name}}</span></b><br/>
                                <a type="button" style="color: red" data-toggle="modal" data-target="#ref-modal">
                                    Lấy link giới thiệu
                                </a>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="alert alert-warning text-center" role="alert">
                                    <h5 class="text-center" style="color: red; font-weight: 600;text-decoration: underline">Cảm nghĩ</h5>
                                    {{$user->status}}
                                </div>
                            </div>
                        </div>
                        @if($role->ofrole > 0)
                        <div class="foot-vip">
                            <img src="{{asset('/resources/image/img_app/'.$role->img_bot)}}"/>
                        </div>
                        @endif
                        </div>
                 
             
                        </div>
                        
                    
                        <div class="row no-gutters">
                            <div class="col-12">
                                <h4 class="block title-block">
                                    Thông tin tài khoản
                                </h4>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-6 text-center">
                                <div class="block-g area-amount">
                                    <p class="amount-title">
                                        Số dư
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($wallet->balance,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="block-g area-amount">
                                    <p class="amount-title">
                                        Điểm VIP
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($wallet->coin,0,',','.')}} coin
                                    </p> 
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-4 text-center">
                                <div class="block-g area-amount">
                                    <p class="amount-title">
                                        Tổng thu nhập
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->total,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block-g area-amount">
                                    <p class="amount-title">
                                        Tổng hoa hồng
                                    </p>
                                    <p class="amount-price">
                                        {{number_format($statistical->total_referal,0,',','.')}} vnđ
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block-g area-amount">
                                    <p class="amount-title">
                                        Thành viên
                                    </p>
                                    <p class="amount-price">
                                        {{$count_f}}
                                    </p> 
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-4 text-center">
                                <div class="block-g area-amount" onclick="location.href='{{URL::to('/my-info')}}'">
                                    <p class="amount-title">
                                        Cá nhân
                                    </p>
                                    <p class="amount-price">
                                        <img src="{{asset('/resources/image/img_app/edit.png')}}"/>
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block-g area-amount" onclick="location.href='{{URL::to('/depwith-history')}}'">
                                    <p class="amount-title">
                                        Lịch sử nạp rút
                                    </p>
                                    <p class="amount-price">
                                        <img src="{{asset('/resources/image/img_app/deposit.png')}}"/>
                                    </p> 
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="block-g area-amount" onclick="location.href='{{URL::to('/bank-info')}}'">
                                    <p class="amount-title">
                                        Ngân hàng
                                    </p>
                                    <p class="amount-price">
                                        <img src="{{asset('/resources/image/img_app/bank-building.png')}}"/>
                                    </p> 
                                </div>
                            </div>
                        </div>
                  
                     

  
                        
                    </div>
				</div>
			</div>
        </div>
        <div class="modal fade" id="ref-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="row no-gutters container-fluid ">
                        <div class="col-12 text-center">                              
                            <label style="color: #000">Link giới thiệu</label><br/>
                            <b> Mã giới thiệu: <span>{{$user->referal_code}}</span></b><br/>

                        </div>
                        <div class="col-9">
                            <div class="form-group link-ref text-center">
                                <input class="form-control" id="linkref" value="{{URL::to('/register/'.$user->referal_code)}}"/>
                            </div>
                        </div>
                    <div class="col-3">
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
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <form action="{{URL::to('/up-avatar')}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
                        <div class="form-group">
                            <label>Chọn ảnh đại diện của bạn</label>
                            <input type="file" class="form-control" name="avatar" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="status-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <form action="{{URL::to('/up-status')}}" method="POST">
						{{ csrf_field() }}
                        <div class="form-group">
                            <label>Điền cảm nghĩ của bạn</label>
                            <textarea style="text-left" name="status" cols="12" class="form-control" rows="5" required>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="nickname-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <form action="{{URL::to('/up-nickname')}}" method="POST">
						{{ csrf_field() }}
                        <div class="form-group">
                            <label>Điền nickname của bạn</label>
                            <input type="text" class="form-control" name="nickname" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </main>
    
@endsection