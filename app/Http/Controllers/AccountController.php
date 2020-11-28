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
            return view('account');
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
            return redirect('/my');
        }else{
            return back()->with('error', 'Sai số điện thoại hoặc mật khẩu');
        }
        
    }

    public function getRegister(){
        if (Auth::guard('users')->check()) {
            return redirect('/');
        }else{
            return view('register');
        }
    }

    public function postRegister(Request $request){
        $phone = $request->input('phone');
        $password = $request->input('password');
        $code_invite = $request->input('codeinvite');
        $user_invite = DB::table('users')->where('phone', $code_invite)->first();
        $hashed = Hash::make($password);
        if($user_invite != null){
            DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'role'=>0]);
        }else{
            DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'role'=>0]);
        }
        return redirect('/login');
    }

}
