@extends('layout.master')
@section('content')
<main id="main">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <!-- Add images to <div class="fotorama"></div> -->
                <div class="fotorama"  data-width="100%" data-nav="false">
                    <img src="https://s.fotorama.io/1.jpg" width="100%">
                    <img src="https://s.fotorama.io/2.jpg" width="100%">
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="area-hdkt text-center block">
                    <button class="btnc btn-hdkt"><i class='fas fa-dollar-sign'></i> Hướng dẫn kiến tiền</button>
                </div>
            </div>
            <div class="col-6">
                <div class="area-battery block text-center">
                        <button class="btnc text-center btn-battery progress-bar progress-bar-success progress-bar-striped active" role="progressbar">
                            <i class='fas fa-user-check'> 154123 online</i> 
                        </button>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="area-notice-spin block">
                    <ul class="list-notice-spin">
                        <li>
                            <div class="row-notice-spin">
                                <div class="col-spin-notice-avatar text-center">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-spin-notice-content">
                                    <h6 class="spin-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã trúng thưởng 1 iphone 12 pro max 512gb</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-notice-spin">
                                <div class="col-spin-notice-avatar text-center">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-spin-notice-content">
                                    <h6 class="spin-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã trúng thưởng 1 iphone 12 pro max 512gb</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="area-btn-spin text-center block">
                    <div class="title spin-title text-center">
                        <h6>Vòng quay triệu phú</h6>
                    </div>
                    <div class="gif-spin">
                        <img src="{{asset('/resources/image/spin.gif')}}"/>
                    </div>
                    <div class="btn-area text-center">
                        <button class="btnc btn-spin"> Quay ngay</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="area-invite text-center block">
                    <button class="btnc btn-invite waviy ">
                        <i class='fas fa-paper-plane'></i>
                        <span style="--i:2">M</span>
                        <span style="--i:3">ờ</span>
                        <span style="--i:4">i</span>
                        <span style="--i:5">b</span>
                        <span style="--i:6">ạ</span>
                        <span style="--i:7">n</span>
                        <span style="--i:8">b</span>
                        <span style="--i:9">è</span>
                        <span style="--i:10">.</span>
                        <span style="--i:11">.</span>
                        <span style="--i:12">.</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="area-buy-spin block text-center">
                    <div class="title title-buy-spin text-center">
                        <h6>Mua lượt quay</h6>
                    </div>
                    <div class="gif-buy-spin">
                        <img src="{{asset("/resources/image/slotmac.gif")}}"/>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="area-cskh block text-center">
                    <div class="title title-cskh text-center">
                        <h6>CSKH 24/7</h6>
                    </div>
                    <div class="gif-cskh">
                        <img src="{{asset("/resources/image/contact.gif")}}"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12">
                <div class="area-dstv block">
                    <ul class="list-dstv">
                        <li>
                            <div class="row-dstv">
                                <div class="col-dstv-avatar">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-dstv-content">
                                    <h6 class="dstv-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã hoàn thành nhiệm vụ và rút thành công 999999 vnđ!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-dstv">
                                <div class="col-dstv-avatar">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-dstv-content">
                                    <h6 class="dstv-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã hoàn thành nhiệm vụ và rút thành công 999999 vnđ!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-dstv">
                                <div class="col-dstv-avatar">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-dstv-content">
                                    <h6 class="dstv-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã hoàn thành nhiệm vụ và rút thành công 999999 vnđ!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-dstv">
                                <div class="col-dstv-avatar">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-dstv-content">
                                    <h6 class="dstv-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã hoàn thành nhiệm vụ và rút thành công 999999 vnđ!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-dstv">
                                <div class="col-dstv-avatar">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-dstv-content">
                                    <h6 class="dstv-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã hoàn thành nhiệm vụ và rút thành công 999999 vnđ!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row-dstv">
                                <div class="col-dstv-avatar">
                                    <img src="{{asset('/resources/image/avatar-default.png')}}"/>
                                </div>
                                <div class="col-dstv-content">
                                    <h6 class="dstv-notice-name">Chúc mừng 0123xxxxx</h6>
                                    <p>Đã hoàn thành nhiệm vụ và rút thành công 999999 vnđ!</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection