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
        $time = date("i");
        $createhistory = new AccountController();

        foreach($nvchuaduyet as $value){
            $val_time = date("i",strtotime($value->updated_at));
            if(($time - $val_time)>4){
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
                $lenhnap = DB::table('deposit')->where('status', 0)->orderBy('id', 'desc')->get();
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
                $createhistory->createHistory($f1->phone, 'Bạn đã nhận được hoa hồng 20% từ '.$user->phone.' là: '.intval($deposit->amount*20/100));
            }
            if($f1->referal_ofuser != null){
                $f0 = DB::table('users')->where('phone', $f1->referal_ofuser)->first();
                if($f0 != null){
                    $statisticalf0 = DB::table('statistical')->where('ofuser', $f0->phone)->first();
    
                    $walletf0 = DB::table('wallet')->where('ofuser', $f0->phone)->first();
                    DB::table('wallet')->where('ofuser', $f0->phone)->update(['balance'=> $walletf1->balance+intval($deposit->amount*10/100)]);
                    DB::table('statistical')->where('ofuser',$f0->phone)->update([ 'month_total'=> $statisticalf0->month_total+intval($deposit->amount*10/100), 'today_total'=> $statisticalf0->today_total+intval($deposit->amount*10/100),'total'=> $statisticalf0->total+intval($deposit->amount*10/100),'total_referal'=> $statisticalf0->total_referal + intval($deposit->amount*10/100)]);
                    $createhistory->createHistory($f0->phone, 'Bạn đã nhận được hoa hồng 10% từ '.$user->phone.' là: '.intval($deposit->amount*10/100));
    
                }
            }
        }
        
        $wallet = DB::table('wallet')->where('ofuser', $deposit->ofuser)->first();
        DB::table('statistical')->where('ofuser',$user->phone)->update([ 'month_total'=> $statistical->month_total+$deposit->amount, 'today_total'=> $statistical->today_total+$deposit->amount,'total'=> $statistical->total+$deposit->amount]);
        DB::table('wallet')->where('ofuser', $deposit->ofuser)->update(['balance'=> $wallet->balance+$deposit->amount]);
        DB::table('deposit')->where('id', $id)->update(['status'=>2]);
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
}
