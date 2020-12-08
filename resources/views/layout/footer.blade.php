<footer>
    <div class="container-fluid">
        <div class="row no-gutters menu-bottom">
            <div class="col-2" id="p1">
                <a class="{{(url()->current() == URL::to('/')) ? 'active' : '' }}" href="{{URL::to('/')}}">
                    @if(url()->current() != URL::to('/'))
                        <img src="{{asset('/resources/image/home.png')}}"/>
                    @else
                        <img src="{{asset('/resources/image/home_a.png')}}"/>
                    @endif
                    <h6>Trang chủ</h6>
                </a>
            </div>
            <div class="col-2 col-half-offset" id="p2">
                <a class="{{(url()->current() == URL::to('/upgrate')) ? 'active' : '' }}" href="{{URL::to('/upgrate')}}">
                    @if(url()->current() != URL::to('/upgrate'))
                        <img src="{{asset('/resources/image/diamond.png')}}"/>
                    @else
                        <img src="{{asset('/resources/image/diamond_a.png')}}"/>
                    @endif
                    <h6>Nâng cấp</h6>
                </a>
            </div>
            <div class="col-2 col-half-offset" id="p3">
                <a class="{{(url()->current() == URL::to('/earn-money')) ? 'active' : '' }}" href="{{URL::to('/earn-money')}}">
                    @if(url()->current() != URL::to('/earn-money'))
                        <img src="{{asset('/resources/image/money.png')}}"/>
                    @else
                        <img src="{{asset('/resources/image/money_a.png')}}"/>
                    @endif
                    <h6>Kiếm tiền</h6>
                </a>
            </div>
            <div class="col-2 col-half-offset" id="p4">
                <a class="{{(url()->current() == URL::to('/history')) ? 'active' : '' }}" href="{{URL::to('/history')}}">
                    @if(url()->current() != URL::to('/history'))
                        <img src="{{asset('/resources/image/history.png')}}"/>
                    @else
                        <img src="{{asset('/resources/image/history_a.png')}}"/>
                    @endif
                    <h6>Lịch sử</h6>
                </a>
            </div>
            <div class="col-2 col-half-offset" id="p5">
                <a class="{{(url()->current() == URL::to('/my-account')) ? 'active' : '' }}" href="{{URL::to('/my-account')}}">
                    @if(url()->current() != URL::to('/my-account'))
                        <img src="{{asset('/resources/image/user.png')}}"/>
                    @else
                        <img src="{{asset('/resources/image/user_a.png')}}"/>
                    @endif
                    <h6>Thông tin</h6>
                </a>
            </div>
        </div>
    </div>

    <?php
        use App\Http\Controllers\AdminController;
        $adminController = new AdminController();
        $adminController->autoduyetnv();
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/utils/Draggable.min.js'></script>
    <script src="{{URL::to('resources/views/spin/js/ThrowPropsPlugin.min.js')}}"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/TextPlugin.min.js'></script>
</footer>
</body>

</html>