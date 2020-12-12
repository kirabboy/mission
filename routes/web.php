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

Route::get('/getJson', [HomeController::class, 'settingJsonSpin']);

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

Route::get('/deposit/{id}', [AccountController::class, 'getDepositUpgrate']);

Route::post('/deposit/{id}', [AccountController::class, 'postDepositUpgrate']);

Route::get('/withdrawn', [AccountController::class, 'getWithdrawn']);

Route::post('/withdrawn', [AccountController::class, 'postWithdrawn']);

Route::get('/withdrawn-history', [AccountController::class, 'lichsurut']);

Route::get('/depwith-history', [AccountController::class, 'depwith_history']);



//admin
Route::get('/admin',[AdminController::class, 'getHomeAdmin']);

Route::get('/admin/editbanner',[AdminController::class, 'getEditBanner']);

Route::post('/admin/editbanner',[AdminController::class, 'postEditBanner']);

Route::get('/admin/history-spin',[AdminController::class, 'getHistorySpin']);

Route::post('/admin/history-spinofuser',[AdminController::class, 'postHistorySpin']);

Route::get('/admin/duyetlenhnap', [AdminController::class, 'getDuyetNap']);

Route::get('/admin/duyetlenhnap/{id}', [AdminController::class, 'duyetlenhnap']);

Route::get('/admin/create-mission', [AdminController::class, 'getCreateMission']);

Route::post('/admin/create-mission', [AdminController::class, 'postCreateMission']);

Route::get('/admin/duyetvip', [AdminController::class, 'getDuyetVip']);

Route::get('/admin/duyetvip/{id}', [AdminController::class, 'postDuyetVip']);

Route::get('/admin/huynap/{id}', [AdminController::class, 'huynap']);

Route::get('/admin/lichsunap', [AdminController::class, 'lichsunap']);

Route::get('/admin/lichsurut', [AdminController::class, 'lichsurut']);

Route::get('/admin/duyetlenhrut', [AdminController::class, 'getduyetrut']);

Route::get('/admin/duyetlenhrut/{id}', [AdminController::class, 'duyetlenhrut']);

Route::get('/admin/huylenhrut/{id}', [AdminController::class, 'huylenhrut']);

Route::get('/admin/quanlythanhvien', [AdminController::class, 'quanlythanhvien']);

Route::get('/admin/quanlythanhvien/{id}', [AdminController::class, 'chitietthanhvien']);

Route::post('/admin/quanlythanhvien/changepass', [AdminController::class, 'changepass']);

Route::post('/admin/quanlythanhvien/{id}', [AdminController::class, 'editthanhvien']);














