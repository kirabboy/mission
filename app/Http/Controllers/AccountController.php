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
                }else{
                    return redirect('/register')->with('error', 'Số điện thoại giới thiệu không tồn tại');
                }
            }else{
                DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'referal_ofuser'=>null, 'role'=>0,'referal_code' => $referal_code]);
                DB::table('wallet')->insert(['ofuser'=> $phone]);
                DB::table('statistical')->insert(['ofuser'=> $phone]);
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
            return view('info_user', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }
    
    public function getUpgrate(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('upgrate', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }

    public function getHistory(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('history', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::guard('users')->logout();
        return redirect('/');
    }

}
