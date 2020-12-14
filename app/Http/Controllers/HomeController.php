<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
        $banners = DB::table('banner')->get();
        return view('homepage',['banners'=>$banners]);
    }
    
    public function getHelpCenter(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('helpcenter', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }

    public function getContact(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            DB::table('missions')->where('ofrole', 0)->update(['price'=> 10000]);
            return view('contact', ['user' => $user]);
        }else{
            return redirect('/login');
        }
    }

    

    public function getEarnMoney(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $checkMissionDones = DB::table('taking_mission')->where('id_user', $user->id)->where('status_day',1)->get();

            $missions = DB::table('missions')->where('ofrole', $user->role)->get();
            $mission_avai_f = array();
            $mission_avai_y = array();
            $mission_avai_z = array();
            $role = DB::table('role')->where('ofrole', $user->role)->first();
            $statistical = DB::table('statistical')->where('ofuser', $user->phone)->first(); 
            if($user->role == -1){
                $num_f = 1;
                $num_y = 1;
                $num_z = 1;

            }else{
                $num_f = intval($role->max_mission *1/5);
                $num_y = intval($role->max_mission *3/5);
                $num_z = intval($role->max_mission *1/5);

            }
            if(count($checkMissionDones) == 0){
                foreach($missions as $mission){
                  
                    if($mission->type == 1 ){
                        if(count($mission_avai_f) < $num_f){
                            array_push($mission_avai_f, $mission);
                        }
                    }
                    if( $mission->type == 2 ){
                        if(count($mission_avai_y) < $num_y){
                            array_push($mission_avai_y, $mission);
                        }
                    }
                    if($mission->type == 3 ){
                        if(count($mission_avai_z) < $num_z){
                            array_push($mission_avai_z, $mission);
                        }
                    }
                        
                    
                }
            }else{
                foreach($missions as $mission){
                    $check = true;
                    foreach($checkMissionDones as $checkMissionDone){
                        if($mission->id == $checkMissionDone->id_mission){
                            $check = false;
                        }
                    }
                    if($check && $mission->type == 1 ){
                        if(count($mission_avai_f) < $num_f){
                            array_push($mission_avai_f, $mission);
                        }
                    }
                    if($check && $mission->type == 2 ){
                        if(count($mission_avai_y) < $num_y){
                            array_push($mission_avai_y, $mission);
                        }
                    }
                    if($check && $mission->type == 3 ){
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
            $date =date("Y-m-d");
            $checkMission = DB::table('taking_mission')->where('id_mission', $request->idmission)->where('id_user', $user->id)->first();
            if($checkMission == null || $checkMission->status != 0 ){ 
                DB::table('taking_mission')->insert(['id_mission'=>$request->idmission, 'id_user'=>$user->id, 'today'=>$date, 'status' => 0, 'status_day' => 0 ]);
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
            DB::table('taking_mission')->where('id', $checkMission->id)->update(['status' => 2]);
            $createhistory = new AccountController();
            $createhistory->createHistory($user->phone, 'Bạn đã đã xác nhận hoàn thành nhiệm vụ "'.$mission->name.'"');
            return back()->with('success', 'Bạn đã xác nhận hoàn thành nhiệm vụ');
        }else{
            return back()->with('error', 'Bạn chưa đủ điều kiến xác nhận hoàn thành nhiệm vụ');
        }
    }
    public function getBuySpin(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $wallet = DB::table('wallet')->where('ofuser', $user->phone)->first();
            $spin_ofuser = DB::table('spin_ofuser')->where('ofuser', $user->phone)->first();

            $spin_setting = DB::table('spin_setting')->where('id', 1)->first();
            return view('buy_spin',['user'=>$user, 'wallet'=>$wallet, 'spin_setting'=>$spin_setting, 'spin_ofuser'=>$spin_ofuser]);
        }else{
            return redirect('/login');
        }
    }
    public function postBuySpin(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $wallet = DB::table('wallet')->where('ofuser', $user->phone)->first();
            $spin_ofuser = DB::table('spin_ofuser')->where('ofuser', $user->phone)->first();
            $spin_setting = DB::table('spin_setting')->where('id', 1)->first();
            $qty = $request->quantity;
            $total = $qty * $spin_setting->price_per_round;
            if($wallet->balance >= $total){
                DB::table('wallet')->where('ofuser', $user->phone)->update(['balance'=>$wallet->balance-$total]);
                DB::table('spin_ofuser')->where('ofuser', $user->phone)->update(['count'=>$spin_ofuser->count+$qty]);

                return back()->with('success', 'Đã mua lượt quay thành công, quay ngay thôi nào'); 
            }else{
                return back()->with('error', 'Số dư của bạn không đủ, vui lòng nạp thêm tiền');
            }
        }else{
            return redirect('/login');
        }
    }
    public function getSpin(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $spin_ofuser = DB::table('spin_ofuser')->where('ofuser', $user->phone)->first();

            return view('spinnew.spin',['spin_ofuser'=> $spin_ofuser]);
        }else{
            return redirect('/login');
        }
    }

    public function postSpin(Request $request){
        $user = Auth::guard('users')->user();
        $spin_ofuser = DB::table('spin_ofuser')->where('ofuser', $user->phone)->first();
        $type = $_GET['type'];
        $value = $_GET['value'];
        if($spin_ofuser->count > 0){
            DB::table('spin_ofuser')->where('ofuser', $user->phone)->update(['count'=>$spin_ofuser->count-1]);
        }
        if($type != 0){
            DB::table('spin_history')->insert(['ofuser'=>$user->phone, 'type'=>$type, 'value'=>$value, 'status'=>0]);
        }
        return null;
    }

    public function getSpinHistory(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $statistical = DB::table('statistical')->where('ofuser', $user->phone)->first();

            $spin_history = DB::table('spin_history')->where('ofuser', $user->phone)->orderBy('id', 'desc')->get();

            return view('spinhistory',['spin_history'=> $spin_history, 'statistical' => $statistical]);
        }else{
            return redirect('/login');
        }
    }
    
    public function receiSpin(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $id_spin = $request->id;
            $statistical = DB::table('statistical')->where('ofuser', $user->phone)->first();
            $wallet = DB::table('wallet')->where('ofuser', $user->phone)->first();
            $spin_history = DB::table('spin_history')->where('ofuser', $user->phone)->get();
            $spin = DB::table('spin_history')->where('id',$id_spin)->first();
            if($spin->type == 2){
                if($spin->status == 0){
                    DB::table('spin_history')->where('id',$id_spin)->update(['status'=>1]);
                    DB::table('wallet')->where('ofuser',$user->phone)->update(['balance'=>$wallet->balance+$spin->value]);
                    DB::table('statistical')->where('ofuser',$user->phone)->update(['total_spin_money'=> $statistical->total_spin_money+$spin->value, 'month_total'=> $statistical->month_total+$spin->value, 'today_total'=> $statistical->today_total+$spin->value,'total'=> $statistical->total+$spin->value]);

                    return back()->with('success', 'Nhận thưởng thành công');

                }else{
                    return back()->with('error', 'Bạn đã nhận thưởng');
                }
            }else{
                return back()->with('error', 'Chúng tôi sẽ liên lạc để trao thưởng');
            }
        }else{
            return redirect('/login');
        }
    }

    public function settingJsonSpin(){
        $user = Auth::guard('users')->user();
        $spin_ofuer = DB::table('spin_ofuser')->where('ofuser', $user->phone)->first();
        header('Content-type: application/json');
        $data = array(
        "colorArray" => array("#364C62", "#95A5A6", "#16A085", "#27AE60", "#2980B9", "#8E44AD", "#2C3E50", "#F39C12", "#D35400", "#C0392B","#1ABC9C", "#2ECC71", "#E87AC2", "#3498DB", "#9B59B6", "#7F8C8D"),


            "segmentValuesArray" => array( 
                //0:giay 1: vang 2:ss 3:ip 4 tivi
            array(
                "probability" => 0,
                "type" => "string",
                "value" => "50.000.000 VNĐ",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='2' data-value='50000000' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 2, "value"=>50000000)
            ),  
    
            array(
                "probability" => '0',
                "type" => "image",
                "value" => url('resources/image/img_spin/tivi.png'),
                "win" => false,
                "resultText" => "<button id='btn-spin' data-type='1' data-value='2' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 1, "value"=>2)

            ),
            array(
                "probability" => 60,
                "type" => "string",
                "value" => "Chúc may mắn",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 0, "value"=>0)

            ),
    
            array(
                "probability" => 0,
                "type" => "image",
                "value" => url('resources/image/img_spin/ip.png'),
                "win" => false,
                "resultText" => "<button id='btn-spin' data-type='1' data-value='1' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 1, "value"=>1)

            ),   
    
    
            array(
                "probability" => 60,
                "type" => "string",
                "value" => "Chúc may mắn",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 0, "value"=>0)

            ), 
            array(
                "probability" => 30,
                "type" => "string",
                "value" => "20.000 VNĐ",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='2' data-value='20000' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 2, "value"=>20000)

            ), 
    
                array(
                "probability" => 0,
                "type" => "image",
                "value" => url('resources/image/img_spin/ss.png'),
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='1' data-value='3' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 1, "value"=>3)

            ),  
    
            array(
                "probability" => 60,
                "type" => "string",
                "value" => "Chúc may mắn",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 0, "value"=>0)

            ), 
            array(
                "probability" => 30,
                "type" => "string",
                "value" => "20.000 VNĐ",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='2' data-value='20000' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 2, "value"=>20000)

            ),  
    
            array(
                "probability" => 0,
                "type" => "image",
                "value" => url('resources/image/img_spin/gold.png'),
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='1' data-value='5' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 1, "value"=>5)

            ),  
    
            array(
                "probability" => 60,
                "type" => "string",
                "value" => "Chúc may mắn",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 0, "value"=>0)

            ),  
    
            array(
                "probability" => 0,
                "type" => "string",
                "value" => "1.000.000 VNĐ",
                "win" => false,
                "resultText" => "<button id='btn-spin' data-type='2' data-value='1000000' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 2, "value"=>1000000)

            ), 
            array(
                "probability" => 60,
                "type" => "string",
                "value" => "Chúc may mắn",
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 0, "value"=>0)

            ),  
            array(
                "probability" => 5,
                "type" => "string",
                "value" => "100.000 VNĐ",
                "win" => false,
                "resultText" => "<button id='btn-spin' data-type='2' data-value='100000' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 2, "value"=>100000)

            ),
            array(
                "probability" => 0,
                "type" => "image",
                "value" => url('resources/image/img_spin/gc.png'),
                "win" => true,
                "resultText" => "<button id='btn-spin' data-type='1' data-value='4' class='btn btn-warning'>Quay</button>",
                "userData" => array("type" => 1, "value"=>5)

            )
            ),
        "svgWidth" => 1024,
        "svgHeight" => 768,
        "wheelStrokeColor" => "#D0BD0C",
        "wheelStrokeWidth" => 18,
        "wheelSize" => 900,
        "wheelTextOffsetY" => 80,
        "wheelTextColor" => "#EDEDED",
        "wheelTextSize" => "16px",
        "wheelImageOffsetY" => 40,
        "wheelImageSize" => 120,
        "centerCircleSize" => 150,
        "centerCircleStrokeColor" => "#F1DC15",
        "centerCircleStrokeWidth" => 12,
        "centerCircleFillColor" => "#EDEDED",
        "centerCircleImageUrl" => url('/resources/image/star.gif'),
        "centerCircleImageWidth" => 150,
        "centerCircleImageHeight" => 150,  
        "segmentStrokeColor" => "#E2E2E2",
        "segmentStrokeWidth" => 4,
        "centerX" => 512,
        "centerY" => 384,  
        "hasShadows" => false,
        "numSpins" => $spin_ofuer->count,
        "spinDestinationArray" => array(),
        "minSpinDuration" => 6,
        "gameOverText" => "Bạn đã hết lượt quay, vui lòng mua thêm lượt và quay lại",
        "invalidSpinText" =>"INVALID SPIN. PLEASE SPIN AGAIN.",
        "introText" => "Chào mừng bạn đến với vòng quay triệu phú! <br/>Click vào vòng quay để chơi!",
        "hasSound" => true,
        "gameId" => "9a0232ec06bc431114e2a7f3aea03bbe2164f1aa",
        "clickToSpin" => true,
        "spinDirection" => "ccw"

        );

        return json_encode( $data);
    }
    public function settingJson(){
        $user = Auth::guard('users')->user();
        $spin_ofuer = DB::table('spin_ofuser')->where('ofuser', $user->phone)->first();
        header('Content-type: application/json');
        $data = array(
        "colorArray" => array("#364C62", "#F1C40F", "#E74C3C", "#ECF0F1", "#95A5A6", "#16A085", "#27AE60", "#2980B9", "#8E44AD", "#2C3E50", "#F39C12", "#D35400", "#C0392B", "#BDC3C7","#1ABC9C", "#2ECC71", "#E87AC2", "#3498DB", "#9B59B6", "#7F8C8D"),

        "segmentValuesArray" => array( 
            //0:giay 1: vang 2:ss 3:ip 4 tivi
        array(
            "probability" => 0,
            "type" => "string",
            "value" => "50.000.000 VNĐ",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='2' data-value='50000000' class='btn btn-warning'>Quay</button>"
        ),  

        array(
            "probability" => '0',
            "type" => "image",
            "value" => url('resources/image/img_spin/tivi.png'),
            "win" => false,
            "resultText" => "<button id='btn-spin' data-type='1' data-value='2' class='btn btn-warning'>Quay</button>"
        ),
        array(
            "probability" => 50,
            "type" => "string",
            "value" => "Chúc may mắn",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>"
        ),

        array(
            "probability" => 0,
            "type" => "image",
            "value" => url('resources/image/img_spin/ip.png'),
            "win" => false,
            "resultText" => "<button id='btn-spin' data-type='1' data-value='1' class='btn btn-warning'>Quay</button>"
        ),   


        array(
            "probability" => 50,
            "type" => "string",
            "value" => "Chúc may mắn",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>"
        ), 
        array(
            "probability" => 50,
            "type" => "string",
            "value" => "20.000 VNĐ",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='2' data-value='20000' class='btn btn-warning'>Quay</button>"
        ), 

            array(
            "probability" => 0,
            "type" => "image",
            "value" => url('resources/image/img_spin/ss.png'),
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='1' data-value='3' class='btn btn-warning'>Quay</button>"
        ),  

        array(
            "probability" => 50,
            "type" => "string",
            "value" => "Chúc may mắn",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>"
        ), 
        array(
            "probability" => 50,
            "type" => "string",
            "value" => "20.000 VNĐ",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='2' data-value='20000' class='btn btn-warning'>Quay</button>"
        ),  

        array(
            "probability" => 0,
            "type" => "image",
            "value" => url('resources/image/img_spin/gold.png'),
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='1' data-value='5' class='btn btn-warning'>Quay</button>"
        ),  

        array(
            "probability" => 50,
            "type" => "string",
            "value" => "Chúc may mắn",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>"
        ),  

        array(
            "probability" => 0,
            "type" => "string",
            "value" => "1.000.000 VNĐ",
            "win" => false,
            "resultText" => "<button id='btn-spin' data-type='2' data-value='1000000' class='btn btn-warning'>Quay</button>"
        ), 
        array(
            "probability" => 50,
            "type" => "string",
            "value" => "Chúc may mắn",
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='0' data-value='0' class='btn btn-warning'>Quay</button>"
        ),  
        array(
            "probability" => 0,
            "type" => "string",
            "value" => "100.000 VNĐ",
            "win" => false,
            "resultText" => "<button id='btn-spin' data-type='2' data-value='100000' class='btn btn-warning'>Quay</button>"
        ),
        array(
            "probability" => 100,
            "type" => "image",
            "value" => url('resources/image/img_spin/gc.png'),
            "win" => true,
            "resultText" => "<button id='btn-spin' data-type='1' data-value='4' class='btn btn-warning'>Quay</button>"
        )
        ),
        "svgWidth" => 1024,
        "svgHeight" => 768,
        "wheelStrokeColor" => "#D0BD0C",
        "wheelStrokeWidth" => 18,
        "wheelSize" => 950,
        "wheelTextOffsetY" => 90,
        "wheelTextColor" => "#EDEDED",
        "wheelTextSize" => "1.5em",
        "wheelImageOffsetY" => 10,
        "wheelImageSize" => 150,
        "centerCircleSize" => 50,
        "centerCircleStrokeColor" => "#F1DC15",
        "centerCircleStrokeWidth" => 12,
        "centerCircleFillColor" => "#EDEDED",
        "segmentStrokeColor" => "#E2E2E2",
        "segmentStrokeWidth" => 4,
        "centerX" => 512,
        "centerY" => 384,  
        "hasShadows" => false,
        "numSpins" => $spin_ofuer->count ,
        "spinDestinationArray" => array(),
        "minSpinDuration" => 5,
        "gameOverText" => "Bạn đã hết lượt quay, vui lòng mua thêm lượt quay ở phía dưới!",
        "invalidSpinText" =>"INVALID SPIN. PLEASE SPIN AGAIN.",
        "introText" => "Bạn có ".$spin_ofuer->count." lượt quay",
        "hasSound" => true,
        "gameId" => "9a0232ec06bc431114e2a7f3aea03bbe2164f1aa",
        "clickToSpin" => true

        );

        return json_encode( $data);
    }
}
