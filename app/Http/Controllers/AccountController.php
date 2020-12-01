<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function getMyAccount(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $statistical = DB::table('statistical')->where('ofuser', $user->phone)->first();
            $wallet = DB::table('wallet')->where('ofuser', $user->phone)->first();
            return view('account', ['statistical' => $statistical, 'user' => $user, 'wallet' => $wallet]);
        }else{
            return redirect('/login');
        }
    }

    public function getLogin(){
        if (Auth::guard('users')->check()){
            return redirect('/');
        }else{
            return view('login');
        }
    }

    public function postLogin(Request $request){
        $phone = $request->input('phone');
        $password = $request->input('password');
        if (Auth::guard('users')->attempt(['phone' => $phone, 'password' => $password])) {
            return redirect('/my-account');
        }else{
            return back()->with('error', 'Sai số điện thoại hoặc mật khẩu');
        }
        
    }

    public function getRegister(Request $request){
        if (Auth::guard('users')->check()) {
            return redirect('/');
        }else{
            $refcode = $request->refcode;
            if($refcode != null){
                return view('register', ['refcode' => $refcode]);
            }else{
                return view('register',['refcode' => null]);
            }
        }
    }

    public function postRegister(Request $request){
        $phone = $request->input('phone');
        $password = $request->input('password');
        $code_invite = $request->input('codeinvite');
        $hashed = Hash::make($password);
        $checkPhone = DB::table('users')->where('phone', $phone)->first();
        $referal_code = rand(100000000,999999999);
        if($checkPhone == null){
            if($code_invite != null){
                $user_invite = DB::table('users')->where('referal_code', $code_invite)->first();
                if($user_invite != null){
                    DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'referal_ofuser'=> $user_invite, 'role'=>0, 'referal_code' => $referal_code]);
                    DB::table('wallet')->insert(['ofuser'=> $phone]);
                    DB::table('statistical')->insert(['ofuser'=> $phone]);
                    DB::table('info_users')->insert(['ofuser'=> $phone]);

                }else{
                    return redirect('/register')->with('error', 'Số điện thoại giới thiệu không tồn tại');
                }
            }else{
                DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'referal_ofuser'=>null, 'role'=>0,'referal_code' => $referal_code]);
                DB::table('wallet')->insert(['ofuser'=> $phone]);
                DB::table('statistical')->insert(['ofuser'=> $phone]);
                DB::table('info_users')->insert(['ofuser'=> $phone]);

            }
            return redirect('/login');
        }else{
            return redirect('/register')->with('error','Số điện thoại đã tồn tại');
        }
        
    }

    public function getReferal(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('referal', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }

    public function getInfo(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $info = DB::table('info_users')->where('ofuser', $user->phone)->first();
            return view('info_user', ['user' => $user, 'info'=>$info]);
        }else{
            return redirect('/login');
        }
    }

    public function postEditInfo(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $name = $request->name;
            $email = $request->email;
            $facebook = $request->facebook;
            $zalo = $request->zalo;
            DB::table('info_users')->update(['name'=>$name, 'email'=>$email, 'facebook'=>$facebook, 'zalo'=>$zalo]);
            $createhistory = new AccountController();
            $createhistory->createHistory($user->phone, 'Cập nhật thông tin cá nhân');
            return back()->with('success','Cập nhật thông tin cá nhân thành công');
        }else{
            return redirect('/login');
        }
    }
    public function createHistory($phone, $content){
        DB::table('history')->insert(['ofuser'=>$phone, 'content'=>$content]);
        return null;
    }
    
    public function getUpgrate(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $vip = DB::table('role')->get();
            $role_cur = DB::table('role')->where('ofrole', $user->role)->first();
            return view('upgrate', ['user' => $user, 'vip' => $vip, 'role_cur' => $role_cur]);
        }else{
            return redirect('/login');
        }
    }

    public function postUpgrateRole(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $role = DB::table('role')->where('ofrole', $request->idrole)->first();
            $wallet = DB::table('wallet')->where('ofuser', $user->phone)->first();
            if($user->role < $role->ofrole){
                if($role != null){
                    if($wallet->balance - $role->role_price >=   0){
                        DB::table('users')->where('phone', $user->phone)->update('role', $role->ofrole);
                        DB::table('wallet')->where('wallet', $user->phone)->update('balance', $wallet->balance - $role->role_price);
                        $createhistory = new AccountController();
                        $createhistory->createHistory($user->phone, 'Nâng cấp tài khoản lên '.$role->name);
                        return back()->with('success', 'Bạn đã nâng cấp thành công tài khoản lên '.$role->name);
                    }else{
                        return back()->with('error', 'Số dư không đủ để nâng cấp');
                    }
                }else{
                    return back()->with('error', 'Gói vip không tồn tại');
                }
            }else{
                return back()->with('error', 'Cấp hiện tại của bạn cao hơn');
            }
        }else{
            return redirect('/login');
        }
    }

    public function getHistory(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $histories = DB::table('history')->where('ofuser', $user->phone)->paginate(5);
            return view('history', ['user' => $user, 'histories'=>$histories]);
        }else{
            return redirect('/login');
        }
    }


    public function logout(){
        Auth::guard('users')->logout();
        return redirect('/');
    }

}
