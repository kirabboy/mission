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
            $checkMissionDones = DB::table('taking_mission')->where('id_user', $user->id)->where('status',3)->get();
            $checkMissionDones1 = DB::table('taking_mission')->where('id_user', $user->id)->where('status',1)->where('status_day',1)->get();

            $missions = DB::table('missions')->where('ofrole', $user->role)->get();
            $mission_avai_f = array();
            $mission_avai_y = array();
            $mission_avai_z = array();
            $role = DB::table('role')->where('ofrole', $user->role)->first();
            $statistical = DB::table('statistical')->where('ofuser', $user->phone)->first(); 
            if($role->ofrole == 0){
                $num_f = $role->max_mission;
                $num_y = 0;
                $num_z = 0;

            }else{
                $num_f = intval($role->max_mission *3/5);
                $num_y = intval($role->max_mission *1/5);
                $num_z = intval($role->max_mission *1/5);

            }
           
            foreach($missions as $mission){
                foreach($checkMissionDones as $checkMissionDone){
                    $check = true;
                    if($mission->id == $checkMissionDone->id_mission){
                        $check = false;
                        break;
                    }
                    if($check || $mission->type == 1 ){
                        if(count($mission_avai_f) < $num_f){
                            array_push($mission_avai_f, $mission);
                        }
                    }
                    if($check || $mission->type == 2 ){
                        if(count($mission_avai_y) < $num_y){
                            array_push($mission_avai_y, $mission);
                        }
                    }
                    if($check || $mission->type == 3 ){
                        if(count($mission_avai_z) < $num_z){
                            array_push($mission_avai_z, $mission);
                        }
                    }
                    
                }

                
            }
            return view('earnmoney', ['user' => $user, 'mission_f' =>$mission_avai_f, 'mission_y'=>$mission_avai_y,'mission_z'=>$mission_avai_z]);
        }else{
            return redirect('/login');
        }
    }

    public function getMissionDetail(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $mission = DB::table('missions')->where('id', $request->idmission)->first();
            $checkMission = DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->first();
            return view('mission_detail', ['user' => $user, 'mission' =>$mission,'checkMission'=> $checkMission]);
        }else{
            return redirect('/login');
        }
    }

    public function takeMission(Request $request){
        if (Auth::guard('users')->check()){
            $user = Auth::guard('users')->user();
            $date =date("Y/m/d");
            $checkMission = DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->orderBy('id', 'desc')->first();
            if($checkMission == null || $checkMission->status != 0 ){ 
                DB::table('taking_mission')->insert(['id_mission'=>$request->idmission, 'id_user'=>$user->id, 'today'=>$date, 'status' => 0 ]);
                return back()->with('success','Nhận nhiệm vụ thành công');
            }else{
                DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->update(['status' => 1]);
                return back()->with('error','Đã huỷ nhiệm vụ này');
            }
            
        }else{
            return redirect('/login');
        }
    }
    
    public function uploadImgMission(Request $request){
        $file = $request->file('result');
        $idmission = $request->idmission;
        $file->move('resources/image/', $file->getClientOriginalName());
        $idtakingmission = DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_mission', $idmission)->orderBy('id', 'desc')->first();
        Db::table('taking_mission')->where('id', $idtakingmission->id)->update(['result'=>$file->getClientOriginalName()]);
        return back()->with('success', 'Bạn đã up ảnh thành công, vui lòng xác nhận để hoàn thành nhiệm vụ');
    }

    public function doneMission(Request $request){
        $user = Auth::guard('users')->user();
        $checkMission = DB::table('taking_mission')->where('id_mission', $request->idmission)->orderBy('id', 'desc')->first();
        $mission = DB::table('missions')->where('id', $request->idmission)->first();
        if($checkMission->result != null && $checkMission->status ==0 ){
            DB::table('taking_mission')->where('id', $checkMission->id)->update(['status' => 3]);
            $createhistory = new AccountController();
            $createhistory->createHistory($user->phone, 'Bạn đã đã xác nhận hoàn thành nhiệm vụ "'.$mission->name.'"');
            return back()->with('success', 'Bạn đã xác nhận hoàn thành nhiệm vụ');
        }else{
            return back()->with('error', 'Bạn chưa đủ điều kiến xác nhận hoàn thành nhiệm vụ');
        }
    }
}
