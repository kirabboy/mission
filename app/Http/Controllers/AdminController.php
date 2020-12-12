<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getHomeAdmin(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                return view('admin.home');

            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function getEditBanner(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $banners = DB::table('banner')->get();
                return view('admin.editbanner',['banners'=>$banners]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function postEditBanner(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                if($request->hasFile('photos'))
                {
                    $destinationPath = 'resources/image/';
                    DB::table('banner')->truncate();
                    $files = $request->file('photos');
                    foreach ($files as $file) {
                        $file_name = $file->getClientOriginalName(); 
                        $file->move($destinationPath , $file_name); 
                        DB::table('banner')->insert(['name'=>$file_name]);
                    }
                }
                return back()->with('success','Cập nhật ảnh banner thành công');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function getHistorySpin(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                return view('admin.historyspin');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function postHistorySpin(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $phone = $request->phone;
                $historyspins = DB::table('spin_history')->where('ofuser', $phone)->orderBy('id', 'desc')->get();
                return view('admin.historyspinofuser', ['historyspins'=> $historyspins]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function autoduyetnv(){
        $nvchuaduyet = DB::table('taking_mission')->where('status', 2)->get();
        $min = date("i");
        $createhistory = new AccountController();

        foreach($nvchuaduyet as $value){
            $val_min = date("i",strtotime($value->updated_at));
            if(($min - $val_min)>4){
                DB::table('taking_mission')->where('id', $value->id)->update(['status'=>3]);
                $user_m = DB::table('users')->where('id', $value->id_user)->first();
                $mission = DB::table('missions')->where('id', $value->id_mission)->first();
                $createhistory->createHistory($user_m->phone, 'Bạn đã được duyệt hoàn thành nhiệm vụ '.$mission->name.' và được cộng '.$mission->price.' vnđ vào tài khoản');
                $statistical = DB::table('statistical')->where('ofuser', $user_m->phone)->first();
                $wallet = DB::table('wallet')->where('ofuser', $user_m->phone)->first();
                DB::table('missions')->where('id',$mission->id)->update(['count'=> $mission->count-1]);
                DB::table('wallet')->where('ofuser', $user_m->phone)->update(['balance'=>$wallet->balance+$mission->price]);
                DB::table('statistical')->where('ofuser', $user_m->phone)->update(['today_mission_amount'=> $statistical->today_mission_amount +$mission->price, 'today_total'=>$statistical->today_total+$mission->price, 'month_total'=>$statistical->month_total+$mission->price, 'total'=>$statistical->total+$mission->price, 'today_count_mission'=>$statistical->today_count_mission+1, 'total_mission'=>$statistical->total_mission+1]);
            }
        }
        return null;
    }

    public function getDuyetNap(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $lenhnap = DB::table('deposit')->where('status', 0)->where('type',0)->orderBy('id', 'desc')->get();
                return view('admin.duyetlenhnap',['lenhnap'=>$lenhnap]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function duyetlenhnap(Request $request){
        $id = $request->id;
        
        $deposit = DB::table('deposit')->where('id', $id)->first();
        $user = DB::table('users')->where('phone', $deposit->ofuser)->first();

        $statistical = DB::table('statistical')->where('ofuser', $user->phone)->first();
        
        
        $createhistory = new AccountController();
        if($user->referal_ofuser != null){
            $f1 = DB::table('users')->where('phone', $user->referal_ofuser)->first();
            if($f1 != null){
                $statisticalf1 = DB::table('statistical')->where('ofuser', $f1->phone)->first();

                $walletf1 = DB::table('wallet')->where('ofuser', $f1->phone)->first();
                
                DB::table('wallet')->where('ofuser', $f1->phone)->update(['balance'=> $walletf1->balance+intval($deposit->amount*20/100)]);
                DB::table('statistical')->where('ofuser',$f1->phone)->update([ 'month_total'=> $statisticalf1->month_total+intval($deposit->amount*20/100), 'today_total'=> $statisticalf1->today_total+intval($deposit->amount*20/100),'total'=> $statisticalf1->total+intval($deposit->amount*20/100),'total_referal'=> $statisticalf1->total_referal + intval($deposit->amount*20/100)]);
                $createhistory->createHistory($f1->phone, 'Bạn đã nhận được hoa hồng 20% từ '.$user->phone.' là: '.number_format(intval($deposit->amount*20/100),0,',','.').' vnđ');
            }
            if($f1->referal_ofuser != null){
                $f0 = DB::table('users')->where('phone', $f1->referal_ofuser)->first();
                if($f0 != null){
                    $statisticalf0 = DB::table('statistical')->where('ofuser', $f0->phone)->first();
    
                    $walletf0 = DB::table('wallet')->where('ofuser', $f0->phone)->first();
                    DB::table('wallet')->where('ofuser', $f0->phone)->update(['balance'=> $walletf1->balance+intval($deposit->amount*5/100)]);
                    DB::table('statistical')->where('ofuser',$f0->phone)->update([ 'month_total'=> $statisticalf0->month_total+intval($deposit->amount*5/100), 'today_total'=> $statisticalf0->today_total+intval($deposit->amount*5/100),'total'=> $statisticalf0->total+intval($deposit->amount*5/100),'total_referal'=> $statisticalf0->total_referal + intval($deposit->amount*5/100)]);
                    $createhistory->createHistory($f0->phone, 'Bạn đã nhận được hoa hồng 5% từ '.$user->phone.' là: '.number_format(intval($deposit->amount*5/100),0,',','.').' vnđ');
    
                }
            }
        }
        $createhistory->createHistory($user->phone, 'Lệnh nạp được duyệt, bạn được cộng '.number_format($deposit->amount,0,',','.').' vnđ vào tài khoản');
        $wallet = DB::table('wallet')->where('ofuser', $deposit->ofuser)->first();
        DB::table('statistical')->where('ofuser',$user->phone)->update([ 'month_total'=> $statistical->month_total+$deposit->amount, 'today_total'=> $statistical->today_total+$deposit->amount,'total'=> $statistical->total+$deposit->amount]);
        DB::table('wallet')->where('ofuser', $deposit->ofuser)->update(['balance'=> $wallet->balance+$deposit->amount]);
        DB::table('deposit')->where('id', $id)->update(['status'=>1]);
        return back()->with('success', 'Duyệt thành công');
    }

    public function getDuyetVip(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $lenhnap = DB::table('deposit')->where('status', 0)->where('type',1)->orderBy('id', 'desc')->get();
                return view('admin.duyetvip',['lenhnap'=>$lenhnap]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function postDuyetVip(Request $request){
        $upvip = DB::table('deposit')->where('id', $request->id)->first();
        $user = DB::table('users')->where('phone', $upvip->ofuser)->first();
        DB::table('users')->where('phone', $upvip->ofuser)->update(['role'=>$upvip->role]);
        DB::table('deposit')->where('id',$request->id)->update(['status'=>1]);
        $createhistory = new AccountController();
        $createhistory->createHistory($upvip->ofuser, 'Nâng cấp tài khoản lên Đồng');

        if($user->referal_ofuser != null){
            $f1 = DB::table('users')->where('phone', $user->referal_ofuser)->first();
            if($f1 != null){
                $statisticalf1 = DB::table('statistical')->where('ofuser', $f1->phone)->first();

                $walletf1 = DB::table('wallet')->where('ofuser', $f1->phone)->first();
                
                DB::table('wallet')->where('ofuser', $f1->phone)->update(['balance'=> $walletf1->balance+intval($upvip->amount*20/100)]);
                DB::table('statistical')->where('ofuser',$f1->phone)->update([ 'month_total'=> $statisticalf1->month_total+intval($upvip->amount*20/100), 'today_total'=> $statisticalf1->today_total+intval($upvip->amount*20/100),'total'=> $statisticalf1->total+intval($upvip->amount*20/100),'total_referal'=> $statisticalf1->total_referal + intval($upvip->amount*20/100)]);
                $createhistory->createHistory($f1->phone, 'Bạn đã nhận được hoa hồng 20% từ '.$user->phone.' là: '.number_format(intval($upvip->amount*20/100),0,',','.'));
            }
            if($f1->referal_ofuser != null){
                $f0 = DB::table('users')->where('phone', $f1->referal_ofuser)->first();
                if($f0 != null){
                    $statisticalf0 = DB::table('statistical')->where('ofuser', $f0->phone)->first();
    
                    $walletf0 = DB::table('wallet')->where('ofuser', $f0->phone)->first();
                    DB::table('wallet')->where('ofuser', $f0->phone)->update(['balance'=> $walletf1->balance+intval($upvip->amount*5/100)]);
                    DB::table('statistical')->where('ofuser',$f0->phone)->update([ 'month_total'=> $statisticalf0->month_total+intval($upvip->amount*5/100), 'today_total'=> $statisticalf0->today_total+intval($upvip->amount*5/100),'total'=> $statisticalf0->total+intval($upvip->amount*5/100),'total_referal'=> $statisticalf0->total_referal + intval($upvip->amount*5/100)]);
                    $createhistory->createHistory($f0->phone, 'Bạn đã nhận được hoa hồng 5% từ '.$user->phone.' là: '.number_format(intval($upvip->amount*5/100),0,',','.'));
    
                }
            }
        }
            return back()->with('success','Duyệt thành công');
        
       
    }

    public function lichsunap(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $lenhnap = DB::table('deposit')->orderBy('id', 'desc')->get();
                return view('admin.lichsunap',['lenhnap'=>$lenhnap]);

            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function lichsurut(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $lenhrut = DB::table('withdrawn')->orderBy('id', 'desc')->get();
                return view('admin.lichsurut',['lenhrut'=>$lenhrut]);

            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function huynap(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $createhistory = new AccountController();

            if($user->role == 99){
                $deposit = DB::table('deposit')->where('id', $request->id)->first();
                if($deposit->type == 0){
                    DB::table('deposit')->where('id', $deposit->id)->update(['status'=> 2]);
                    $createhistory->createHistory($deposit->ofuser, 'Lệnh  nạp '.number_format($deposit->amount,0,',','.').' vnđ bị huỷ');

                }else{
                    $role = DB::table('role')->where('ofrole', $deposit->role)->first();
                    DB::table('deposit')->where('id', $deposit->id)->update(['status'=> 2]);
                    $createhistory->createHistory($deposit->ofuser, 'Lệnh  nâng cấp lên '.$role->name.' bị huỷ');
                }
                return back()->with('success', 'Hủy lệnh nạp thành công');

            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function getduyetrut(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $lenhrut = DB::table('withdrawn')->where('status',0)->orderBy('id', 'desc')->get();
                return view('admin.duyetlenhrut', ['lenhrut'=>$lenhrut]);

            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
        
    }

    public function duyetlenhrut(Request $request){
        $id_rut = $request->id;
        $withdrawn = DB::table('withdrawn')->where('id', $id_rut)->first();
        DB::table('withdrawn')->where('id', $id_rut)->update(['status'=>1]);
        $createhistory = new AccountController();
        $createhistory->createHistory($withdrawn->ofuser, 'Lệnh rút được duyệt');
        return back()->with('success', 'Duyệt thành công');

    }

    public function huylenhrut(Request $request){
        $id_rut = $request->id;
        $withdrawn = DB::table('withdrawn')->where('id', $id_rut)->first();
        $wallet = DB::table('wallet')->where('ofuser', $withdrawn->ofuser)->first();
        DB::table('wallet')->where('ofuser', $withdrawn->ofuser)->update(['balance'=>$wallet->balance + $withdrawn->amount]);
        DB::table('withdrawn')->where('id', $id_rut)->update(['status'=>2]);
        
        $createhistory = new AccountController();
        $createhistory->createHistory($withdrawn->ofuser, 'Lệnh rút đã huỷ, '.$withdrawn->amount.' vnđ đã được hoàn');
        return back()->with('success', 'Huỷ thành công');

    }


    public function getCreateMission(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                
                return view('admin.createmission');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function postCreateMission(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $name = $request->name;
                $type = $request->type;
                $ofrole = $request->role;
                $price = $request->price;
                $link = $request->link;
                $count = $request->count;

                if($type == 1){
                    $description = "B1: bước 1 ấn coppy link chia sẻ<br/>B2: vào Facebook cá nhân đăng lên tường<br/>B3: chụp ảnh màn hình bài đăng như hình dưới và tải lên ở mục tải file và ấn xác nhận";
                    $example = 'exfb.png';
                }elseif($type == 2){
                    $description = "B1: bước 1 ấn coppy link chia sẻ<br/>B2: vào link Youtube xem, thích, subcribe<br/>B3: chụp ảnh màn hình bài đăng như hình dưới và tải lên ở mục tải file và ấn xác nhận";
                    $example = 'exyt.png';
                }else{
                    $description = "B1: bước 1 ấn coppy link chia sẻ<br/>B2: vào Zalo cá nhân đăng lên tường<br/>B3: chụp ảnh màn hình bài đăng như hình dưới và tải lên ở mục tải file và ấn xác nhận";
                    $example = 'exzl.png';
                }
                DB::table('missions')->insert(['name'=>$name, 'type'=>$type, 'description'=>$description, 'ofrole'=>$ofrole, 'link'=>$link, 'count'=>$count, 'price'=>$price]);
                
                return back()->with('success', 'Đăng nhiệm vụ thành công');
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function quanlythanhvien(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $users = DB::table('users')->orderBy('id', 'desc')->get();
                
                return view('admin.quanlythanhvien', ['users'=>$users]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function chitietthanhvien(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            if($user->role == 99){
                $id = $request->id;
                $member = DB::table('users')->where('id', $id)->first();
                $wallet = DB::table('wallet')->where('ofuser', $member->phone)->first();
                $spin = DB::table('spin_ofuser')->where('ofuser', $member->phone)->first();
                $info = DB::table('info_users')->where('ofuser', $member->phone)->first();
                $bank = DB::table('bank')->where('ofuser', $member->phone)->first();
                $count_f = 0;
                $f1 = $f2 = array();
                $f1 = DB::table('users')->where('referal_ofuser', $member->phone)->get();
                foreach($f1 as $val){
                    $f2 = DB::table('users')->where('referal_ofuser', $val->phone)->get();
                    $count_f += count($f2);
                }
                $count_f += count($f1);

              

                return view('admin.chitietthanhvien', ['member'=>$member, 'count_f'=>$count_f, 'wallet'=>$wallet, 'spin'=>$spin, 'bank'=>$bank, 'info'=>$info]);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }

    public function editthanhvien(Request $request){
        $phone = $request->phone;
        $balance = $request->balance;
        $count_spin = $request->count_spin;       

        DB::table('wallet')->where('ofuser', $phone)->update(['balance'=>$balance]);
        DB::table('spin_ofuser')->where('ofuser', $phone)->update(['count'=>$count_spin]);
       
        return back()->with('success', 'Cập nhật thành công');
    }

    public function changepass(Request $request){
        $phone = $request->phone;
        $password = $request->input('password');
        $hashed = Hash::make($password);
        DB::table('users')->where('phone', $phone)->update(['password'=>$hashed]);
        return back()->with('success', 'Cập nhật mật khẩu thành công');
    }
}
