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
        
        foreach($nvchuaduyet as $value){
            $val_time = date("i",strtotime($value->updated_at));
            if(($time - $val_time)>4){
                DB::table('taking_mission')->where('id', $value->id)->update(['status'=>3]);
                $user_m = DB::table('users')->where('id', $value->id_user)->first();
                $mission = DB::table('missions')->where('id', $value->id_mission)->first();
                $statistical = DB::table('statistical')->where('ofuser', $user_m->phone)->first();
                $wallet = DB::table('wallet')->where('ofuser', $user_m->phone)->first();
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

        $f1 = DB::table('users')->where('phone', $user->referal_ofuser)->first();

        $f0 = DB::table('users')->where('phone', $f1->referal_ofuser)->first();

        $createhistory = new AccountController();
        if($f1 != null){
            $statisticalf1 = DB::table('statistical')->where('ofuser', $f1->phone)->first();

            $walletf1 = DB::table('wallet')->where('ofuser', $f1->phone)->first();
            
            DB::table('wallet')->where('ofuser', $f1->phone)->update(['balance'=> $walletf1->balance+intval($deposit->amount*10/100)]);
            DB::table('statistical')->where('ofuser',$f1->phone)->update([ 'month_total'=> $statisticalf1->month_total+intval($deposit->amount*10/100), 'today_total'=> $statisticalf1->today_total+intval($deposit->amount*10/100),'total'=> $statisticalf1->total+intval($deposit->amount*10/100), $statisticalf1->total_referal + intval($deposit->amount*10/100)]);
            $createhistory->createHistory($f1->phone, 'Bạn đã nhận được hoa hồng 10% từ '.$user->phone.' là: '.intval($deposit->amount*10/100));
        }
        if($f0 != null){
            $statisticalf0 = DB::table('statistical')->where('ofuser', $f0->phone)->first();

            $walletf0 = DB::table('wallet')->where('ofuser', $f0->phone)->first();
            DB::table('wallet')->where('ofuser', $f0->phone)->update(['balance'=> $walletf1->balance+intval($deposit->amount*5/100)]);
            DB::table('statistical')->where('ofuser',$f0->phone)->update([ 'month_total'=> $statisticalf0->month_total+intval($deposit->amount*5/100), 'today_total'=> $statisticalf0->today_total+intval($deposit->amount*5/100),'total'=> $statisticalf0->total+intval($deposit->amount*5/100), $statisticalf0->total_referal + intval($deposit->amount*5/100)]);
            $createhistory->createHistory($f0->phone, 'Bạn đã nhận được hoa hồng 5% từ '.$user->phone.' là: '.intval($deposit->amount*5/100));

        }
        $wallet = DB::table('wallet')->where('ofuser', $deposit->ofuser)->first();
        DB::table('statistical')->where('ofuser',$user->phone)->update([ 'month_total'=> $statistical->month_total+$depost->amount, 'today_total'=> $statistical->today_total+$deposit->amount,'total'=> $statistical->total+$deposit->amount]);
        DB::table('wallet')->where('ofuser', $deposit->ofuser)->update(['balance'=> $wallet->balance+$deposit->amount]);
        DB::table('deposit')->where('id', $id)->update(['status'=>2]);
    }
}
