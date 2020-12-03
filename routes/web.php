<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/my-account', [AccountController::class, 'getMyAccount']);

Route::get('/login', [AccountController::class, 'getLogin']);
Route::post('/login', [AccountController::class, 'postLogin']);

Route::get('/register', [AccountController::class, 'getRegister']);
Route::get('/register/{refcode}', [AccountController::class, 'getRegister']);

Route::post('/register', [AccountController::class, 'postRegister']);

Route::get('/logout', [AccountController::class, 'logout']);

Route::get('/my-referal', [AccountController::class, 'getReferal']);

Route::get('/my-info', [AccountController::class, 'getInfo']);

Route::get('/upgrate', [AccountController::class, 'getUpgrate']);

Route::get('/history', [AccountController::class, 'getHistory']);

Route::get('/earn-money', [HomeController::class, 'getEarnMoney']);

Route::get('/helpcenter', [HomeController::class, 'getHelpCenter']);

Route::post('/post-editinfo', [AccountController::class, 'postEditInfo']);

Route::get('/upgrate-role/{idrole}', [AccountController::class, 'postUpgrateRole']);

Route::get('/mission-detail/{idmission}', [HomeController::class, 'getMissionDetail']);

Route::get('/take-mission/{idmission}',[HomeController::class, 'takeMission']);

Route::post('/uploadimgmission', [HomeController::class, 'uploadImgMission']);

Route::get('/donemission/{idmission}', [HomeController::class, 'doneMission']);

Route::get('/spin', function(){
    return view('spin.spin');
});