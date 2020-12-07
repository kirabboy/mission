<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;



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

Route::get('/register/{codeinvite}', [AccountController::class, 'getRegister']);

Route::post('/register', [AccountController::class, 'postRegister']);

Route::post('/register/{codeinvite}', [AccountController::class, 'postRegister']);

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

Route::get('/getJson', [HomeController::class, 'settingJson']);

Route::get('/spin', [HomeController::class,'getSpin']);

Route::get('/buy-spin', [HomeController::class,'getBuySpin']);

Route::post('/buy-spin', [HomeController::class,'postBuySpin']);

Route::get('/postspin', [HomeController::class, 'postSpin']);

Route::get('/spin-history', [HomeController::class, 'getSpinHistory']);

Route::get('/recei-spin/{id}', [HomeController::class, 'receiSpin']);

Route::get('/contact', [HomeController::class, 'getContact']);

Route::get('/manager-info', [AccountController::class, 'getMangerInfo']);

Route::get('/bank-info', [AccountController::class, 'getBankInfo']);

Route::post('/bank-info', [AccountController::class, 'postBankInfo']);

Route::get('/deposit', [AccountController::class, 'getDeposit']);

Route::post('/deposit', [AccountController::class, 'postDeposit']);

Route::get('/admin',[AdminController::class, 'getHomeAdmin']);

Route::get('/admin/editbanner',[AdminController::class, 'getEditBanner']);

Route::post('/admin/editbanner',[AdminController::class, 'postEditBanner']);

Route::get('/admin/history-spin',[AdminController::class, 'getHistorySpin']);

Route::post('/admin/history-spinofuser',[AdminController::class, 'postHistorySpin']);

Route::get('/admin/duyetlenhnap', [AdminController::class, 'getDuyetNap']);

Route::get('/admin/duyetlenhnap/{id}', [AdminController::class, 'duyetlenhnap']);
