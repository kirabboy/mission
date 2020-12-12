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
            $role = DB::table('role')->where('ofrole', $user->role)->first();
            $count_f = 0;
            $f1 = $f2 = array();
            $f1 = DB::table('users')->where('referal_ofuser', $user->phone)->get();
            foreach($f1 as $val){
                $f2 = DB::table('users')->where('referal_ofuser', $val->phone)->get();
                $count_f += count($f2);
            }
            $count_f += count($f1);
            return view('account', ['statistical' => $statistical, 'user' => $user, 'wallet' => $wallet, 'role'=>$role, 'count_f'=>$count_f]);
        }else{
            return redirect('/login');
        }
    }

    public function getLogin(){
        if (Auth::guard('users')->check()){
            $user = Auth::guard('users')->user();
        
           
            return redirect('/');
        }else{
            return view('login');
        }
    }

    public function postLogin(Request $request){
        $phone = $request->input('phone');
        $password = $request->input('password');
        if (Auth::guard('users')->attempt(['phone' => $phone, 'password' => $password])) {
            $user = Auth::guard('users')->user();
            $date =date("Y-m-d");
            $month =date("m");
            $statistical = DB::table('statistical')->where('ofuser', $phone)->first();
            $taking_missions = DB::table('taking_mission')->where('id_user', $user->id)->get();
            if(strtotime($date) != strtotime($statistical->today)){
                
                DB::table('statistical')->where('ofuser', $phone)->update(['today'=>$date, 'today_total'=>0, 'today_mission_amount'=>0,'today_count_mission'=>0 ]);
            }
            if(date("m", strtotime($statistical->today)) != $month){
                DB::table('statistical')->where('ofuser', $phone)->update(['month_total'=>0]);
            }



            foreach($taking_missions as $taking_mission){

                if(strtotime($date) != strtotime($taking_mission->today)){
                    DB::table('taking_mission')->where('id', $taking_mission->id)->update(['status_day'=>1 ]);
                    if($taking_mission->status == 0){
                        DB::table('taking_mission')->where('id', $taking_mission->id)->update(['status'=>1 ]);
                    }
                }
            }
           
            return redirect('/my-account');
        }else{
            return back()->with('error', 'Sai số điện thoại hoặc mật khẩu');
        }
        
    }

    public function getRegister(Request $request){
        if (Auth::guard('users')->check()) {
            return redirect('/');
        }else{
            $codeinvite = $request->codeinvite;
            if($codeinvite != null){
                return view('register', ['codeinvite' => $codeinvite]);
            }else{
                return view('register',['codeinvite' => null]);
            }
        }
    }

    public function postRegister(Request $request){
        $phone = $request->input('phone');
        $password = $request->input('password');
        $date =date("Y-m-d");
        $code_invite = $request->input('codeinvite');
        $hashed = Hash::make($password);
        $checkPhone = DB::table('users')->where('phone', $phone)->first();
        $referal_code = rand(100000000,999999999);
        if($checkPhone == null){
            if($code_invite != null){
                $user_invite = DB::table('users')->where('referal_code', $code_invite)->first();
                if($user_invite != null){
                    DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'referal_ofuser'=> $user_invite->phone, 'role'=>-1, 'referal_code' => $referal_code]);
                    DB::table('wallet')->insert(['ofuser'=> $phone]);
                    DB::table('statistical')->insert(['ofuser'=> $phone,'today'=>$date]);
                    DB::table('info_users')->insert(['ofuser'=> $phone]);
                    DB::table('spin_ofuser')->insert(['ofuser'=>$phone,'count'=>1]);
                    DB::table('bank')->insert(['ofuser'=>$phone]);


                }else{
                    return redirect('/register')->with('error', 'Số điện thoại giới thiệu không tồn tại');
                }
            }else{
                DB::table('users')->insert(['phone' => $phone, 'password' => $hashed, 'referal_ofuser'=>null, 'role'=>-1,'referal_code' => $referal_code]);
                DB::table('wallet')->insert(['ofuser'=> $phone]);
                DB::table('statistical')->insert(['ofuser'=> $phone,'today'=>$date]);
                DB::table('info_users')->insert(['ofuser'=> $phone]);
                DB::table('spin_ofuser')->insert(['ofuser'=>$phone,'count'=>1]);
                DB::table('bank')->insert(['ofuser'=>$phone]);

            

            }
            return redirect('/login')->with('success', 'Bạn đã đăng ký tài khoản thành công và được tặng một lần quay may mắn hãy đăng nhập để trải nghiệm ');
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
                    if($wallet->balance - $role->role_price >= 0){
                        DB::table('users')->where('phone', $user->phone)->update(['role'=> $role->ofrole]);
                        DB::table('wallet')->where('ofuser', $user->phone)->update(['balance'=> $wallet->balance - $role->role_price]);
                        $createhistory = new AccountController();
                        $createhistory->createHistory($user->phone, 'Nâng cấp tài khoản lên '.$role->name);
                        return back()->with('success', 'Bạn đã nâng cấp thành công tài khoản lên '.$role->name);
                    }else{
                        return redirect('/deposit')->with('error', 'Số dư không đủ để nâng cấp, vui lòng nạp thêm tiền');
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
            $histories = DB::table('history')->where('ofuser', $user->phone) ->orderBy('id', 'desc')->paginate(5);
            $taking_missions = DB::table('taking_mission')->where('id_user', $user->id)->get();

            $arr_mission_done=$arr_mission_pending=$arr_mission_new=$arr_mission_cancel = array();
            foreach($taking_missions as $val){
                $mission = DB::table('missions')->where('id', $val->id_mission)->first();
                if($val->status == 3){
                    array_push( $arr_mission_done, $mission);
                }elseif($val->status == 2){
                    array_push($arr_mission_pending, $mission);
                }elseif($val->status == 1){
                    array_push($arr_mission_cancel, $mission);
                }elseif($val->status == 0){
                    array_push($arr_mission_new, $mission);
                }
            }
            for($i=0; $i<count($arr_mission_done)-2; $i++){
                for($j=$i+1; $j<count($arr_mission_done)-1; $j++){
                    if($arr_mission_done[$i]->id == $arr_mission_done[$j]->id ){
                        unset($array[$j]);
                    }
                }
            }
            for($i=0; $i<count($arr_mission_pending)-2; $i++){
                for($j=$i+1; $j<count($arr_mission_pending)-1; $j++){
                    if($arr_mission_pending[$i]->id == $arr_mission_pending[$j]->id ){
                        unset($array[$j]);
                    }
                }
            }
            for($i=0; $i<count($arr_mission_cancel)-2; $i++){
                for($j=$i+1; $j<count($arr_mission_cancel)-1; $j++){
                    if($arr_mission_cancel[$i]->id == $arr_mission_cancel[$j]->id ){
                        unset($array[$j]);
                    }
                }
            }
            for($i=0; $i<count($arr_mission_new)-2; $i++){
                for($j=$i+1; $j<count($arr_mission_new)-1; $j++){
                    if($arr_mission_new[$i]->id == $arr_mission_new[$j]->id ){
                        unset($array[$j]);
                    }
                }
            }
            return view('history', ['user' => $user, 'histories'=>$histories, 'mission_done'=>$arr_mission_done,'mission_cancel'=>$arr_mission_cancel,'mission_new'=>$arr_mission_new,'mission_pending'=>$arr_mission_pending ]);
        }else{
            return redirect('/login');
        }
    }

    public function getMangerInfo(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            return view('manager_info');
        }else{
            return redirect('/login');
        }
    }

    public function getBankInfo(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $bank = DB::table('bank')->where('ofuser', $user->phone)->first();
            return view('info_bank',['bank'=>$bank]);
        }else{
            return redirect('/login');
        }
    }

    public function postBankInfo(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $bank = DB::table('bank')->where('ofuser', $user->phone)->first();
            $username = $request->username;
            $bankname = $request->bankname;
            $banknumber = $request->banknumber;
            DB::table('bank')->where('ofuser', $user->phone)->update(['username'=>$username, 'bankname'=>$bankname, 'banknumber'=>$banknumber]);
            $createhistory = new AccountController();
            $createhistory->createHistory($user->phone, 'Cập nhật thông tin ngân hàng thành công');
            return back()->with('success', 'Cập nhật thông tin ngân hàng thành công');
        }else{
            return redirect('/login');
        }
    }

    public function getDeposit(){
        if (Auth::guard('users')->check()) {
          
            return view('deposit');
        }else{
            return redirect('/login');
        }
    }

    public function postDeposit(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();

            if($request->hasFile('bill'))
                {
                    $destinationPath = 'resources/image/img_bill';
                    $file = $request->file('bill');
                    $file_name = $file->getClientOriginalName(); 
                    $file->move($destinationPath , $file_name); 
                    DB::table('deposit')->insert(['ofuser'=>$user->phone, 'amount'=>$request->amount, 'bill'=>$file_name,'status'=>0, 'type'=>0]);
                    return back()->with('success','Bạn đã gửi lệnh nạp tiền thành công, chúng tôi sẽ duyệt nhanh nhất có thể');

                }else{
                    return back()->with('error','Bạn đã gửi lệnh nạp tiền thất bại');

                }
        }else{
            return redirect('/login');
        }
    }

    public function getDepositUpgrate(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $id_role = $request->id;
            if($user->role >= $id_role){
                return back()->with('error', 'Cấp hiện tại của bạn cao hơn');
            }else{
                $role = DB::table('role')->where('ofrole', $id_role)->first();
                return view('deposit_upgrate', ['role'=>$role]); 
            }
           
        }else{
            return redirect('/login');
        }

    }

    public function postDepositUpgrate(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();

            if($request->hasFile('bill'))
                {
                    $destinationPath = 'resources/image/img_bill';
                    $file = $request->file('bill');
                    $file_name = $file->getClientOriginalName(); 
                    $file->move($destinationPath , $file_name); 
                    DB::table('deposit')->insert(['ofuser'=>$user->phone, 'amount'=>$request->amount, 'bill'=>$file_name,'status'=>0, 'type'=>1,'role'=>$request->role]);
                    return back()->with('success','Bạn đã gửi lệnh nạp tiền thành công, chúng tôi sẽ duyệt nhanh nhất có thể');

                }else{
                    return back()->with('error','Bạn đã gửi lệnh nạp tiền thất bại');

                }
        }else{
            return redirect('/login');
        }
    }

    public function getWithdrawn(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $bank = DB::table('bank')->where('ofuser', $user->phone)->first();
            return view('withdrawn', ['bank'=> $bank]);
        }else{
            return redirect('/login');
        }
    }

    public function postWithdrawn(Request $request){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $amount = $request->amount;
            $wallet = DB::table('wallet')->where('ofuser', $user->phone)->first();
            if($user->role == -1){
                return back()->with('error', 'Bạn cần nâng cấp lên tài khoản cấp Đồng để có thể rút tiền');
            }else{
                if($amount <= $wallet->balance){
                    DB::table('wallet')->where('ofuser', $user->phone)->update(['balance'=>$wallet->balance-$amount]);
                    DB::table('withdrawn')->insert(['ofuser'=>$user->phone, 'amount'=>$amount, 'status'=>0]);
                    return back()->with('success', 'Bạn đã gửi lệnh rút thành công, chúng tôi sẽ duyệt sớm nhất có thể');

                }else{
                    return back()->with('error', 'Số dư không đủ');
                }
            }
        }else{
            return redirect('/login');
        }
    }

    public function depwith_history(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $lenhrut = DB::table('withdrawn')->where('ofuser', $user->phone)->orderBy('id', 'desc')->get();
            $lenhnap = DB::table('deposit')->where('ofuser', $user->phone)->orderBy('id', 'desc')->get();
            return view('depwith_history',['lenhrut'=>$lenhrut, 'lenhnap'=>$lenhnap]);
        }else{
            return redirect('/login');
        }
    }

    public function lichsunap(){
        if (Auth::guard('users')->check()) {
            $user = Auth::guard('users')->user();
            $lenhnap = DB::table('deposit')->where('ofuser', $user->phone)->orderBy('id', 'desc')->get();
            return view('lichsunap',['lenhnap'=>$lenhnap]);
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::guard('users')->logout();
        return redirect('/');
    }

}
