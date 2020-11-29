<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
        return view('homepage');
    }
    
    public function getHelpCenter(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('helpcenter', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }

    public function getEarnMoney(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('earnmoney', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }
}
