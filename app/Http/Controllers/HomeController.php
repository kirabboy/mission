<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $missions = DB::table('missions')->where('ofrole', $user->role)->get();
            return view('earnmoney', ['user' => $user, 'missions' =>$missions]);
        }else{
            return redirect('/login');
        }
    }

    public function getMissionDetail(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $mission = DB::table('missions')->where('id', $request->idmission)->first();
            $checkMission = DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->orderBy('id', 'desc')->first();
          
            return view('mission_detail', ['user' => $user, 'mission' =>$mission,'checkMission'=> $checkMission]);
        }else{
            return redirect('/login');
        }
    }

    public function takeMission(Request $request){
        if (Auth::guard('users')->check()){
            $user = Auth::guard('users')->user();
            $checkMission = DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->orderBy('id', 'desc')->first();
            if($checkMission == null || $checkMission->status != 0){ 
                DB::table('taking_mission')->insert(['id_mission'=>$request->idmission, 'id_user'=>$user->id, 'status' => 0 ]);
                return back()->with('success','Nhận nhiệm vụ thành công');
            }else{
                DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->update(['status' => 1]);
                return back()->with('error','Đã huỷ nhiệm vụ này');
            }
            
        }else{
            return redirect('/login');
        }
    }
}
