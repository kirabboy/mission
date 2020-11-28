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

Route::get('/my', [AccountController::class, 'getMyAccount']);

Route::get('/login', [AccountController::class, 'getLogin']);
Route::post('/login', [AccountController::class, 'postLogin']);

Route::get('/register', [AccountController::class, 'getRegister']);
Route::post('/register', [AccountController::class, 'postRegister']);
