<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\Admin\AuthController::class, 'dashboard'])->name('home');
Route::get('/', [HomeController::class, 'index']);
//Route::get('admin', [HomeController::class, 'login']);

Route::get('admin',function(){
  return redirect(route('admin.login'));
});

Route::group(['prefix' => 'admin','namespace'=>'App\Http\Controllers\Admin','middleware'=>'admin.guest'], function () {
  Route::any('login','AuthController@login')->name('admin.login');  
  Route::post('forgot-password','AuthController@forgotPassword')->name('admin.forgotpassword');
  Route::any('reset-password/{token}','AuthController@resetPassword')->name('admin.resetpassword');
});

Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers\Admin' ,'middleware' => ['admin']], function(){
    Route::get('dashboard','AuthController@dashboard')->name('admin.dashboard');
    Route::get('home','HomeController@index')->name('admin.home');
    Route::any('profile','HomeController@profile')->name('admin.profile');
  	Route::any('change-password','HomeController@changePassword')->name('admin.changepassword');
  	Route::get('logout','AuthController@logout')->name('admin.logout');
    
});
