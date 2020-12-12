@extends('layout.master')
@section('content')
	<main id="main">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-12 text-center">
					<div class="block area-title-page">
						<h5>Lịch sử nạp rút</h5>
					</div>		
				</div>
			</div>
			<div class="row no-gutters container-fluid">
				<div class="col-12">
                    <div id="myModal" class="modal text-center" >
                        <div class="modal-content" style="background: #fff;">
                          <img  id="img-modal" >
                          <span class="close" style="color: #000">Đóng</span>
                        </div>
                    </div>
                    <script>
                      // Get the modal
                      function showimg(element){
                          $('#img-modal').attr('src',$(element).attr('src'));
                          $('#myModal').css("display","block");

                      }
                      
                      $('.close').click(function(){
                          $('#myModal').css("display","none");
                      });
                   

                      // When the user clicks on <span> (x), close the modal
                   
                      </script>
					<div class="group-tabs tab-earn">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#nap" data-toggle="tab">Lịch sử nạp</a></li>
                          <li><a class="" href="#rut" data-toggle="tab">Lịch sử rút</a></li>
                        </ul>
                  
                        <!-- Tab panes -->
                        <div class="tab-content clearfix">
                            <div  class="tab-pane fade in active" id="nap">
                                <table class="table table-bordered table-cus" style="background: #fff;">
                                    <thead>
                                      <tr>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Tiền</th>
                                        <th scope="col">Bill</th>
                                        <th scope="col">Trạng thái</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lenhnap as $value)
                                      <tr>
                                        <td>{{$value->ofuser}}</td>
                                        <td>{{$value->amount}} vnđ
                                             @if($value->type =1)
                                            để nâng cấp
                                            @endif</td>
                                      <td><img onclick="showimg(this)" id="img{{$value->id}}" data-id="{{$value->id}}" style="width: 50px; height: 50px;" src="{{asset('/resources/image/img_bill/'.$value->bill)}}"/></td>
                                        <td>
                                            @if($value->status == 0)
                                            Chưa Duyệt
                                            @elseif($value->status==1)
                                            Đã Duyệt
                                            @else
                                            Đã Huỷ
                                            @endif
                                        </td>
            
                                      </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                                  
                          
                            </div>
                            <div  class="tab-pane fade" id="rut">
                                <table class="table table-bordered table-cus" style="background: #fff;">
                                    <thead>
                                      <tr>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Tiền</th>
                                        <th scope="col">Trạng thái</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lenhrut as $value)
                                      <tr>
                                        <td>{{$value->ofuser}}</td>
                                        <td>{{$value->amount}} vnđ</td>
                                        <td>
                                            @if($value->status == 0)
                                            Chưa Duyệt
                                            @elseif($value->status==1)
                                            Đã Duyệt
                                            @elseif($value->status==2)
                                            Đã huỷ
                                            @endif
                                        </td>
            
                                      </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                           
                        </div>
                      </div>
				</div>
			</div>
		</div>
	</main>
@endsection