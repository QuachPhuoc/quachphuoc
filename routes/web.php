<?php

use App\Http\Controllers\KhoaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LopController;
use App\Http\Controllers\Svcontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/auth', function(){
   return view('auth/login');
});

//login
Route::get('auth/login', ['as' => 'getLogin', 'uses' => 'AdminLoginController@getLogin']);
Route::post('auth/login', ['as' => 'postLogin', 'uses' => 'AdminLoginController@postLogin']);
Route::get('auth/logout', ['as' => 'getLogout', 'uses' => 'AdminLoginController@getLogout']);



//khoa
Route::get('/admin/khoa', [KhoaController::class, 'getList']);

Route::get('/admin/khoa/add', [KhoaController::class, 'getAdd']);
Route::post('/admin/khoa/add', [KhoaController::class, 'postAdd']);

Route::get('/admin/khoa/update/{id}', [KhoaController::class, 'getUpdate']);
Route::post('/admin/khoa/update/{id}', [KhoaController::class, 'postUpdate']);

Route::get('/admin/khoa/delete/{id}', [KhoaController::class, 'getDelete']);
Route::post('/admin/khoa/delete/{id}', [KhoaController::class, 'postDelete']);

//lop
Route::get('/admin/lop', [LopController::class, 'getLop']);

Route::get('/admin/lop/add', [LopController::class, 'getAdd']);
Route::post('/admin/lop/add', [LopController::class, 'postAdd']);

Route::get('/admin/lop/update/{id}', [LopController::class, 'getUpdate']);
Route::post('/admin/lop/update/{id}', [LopController::class, 'postUpdate']);

Route::get('/admin/lop/delete/{id}', [LopController::class, 'getDelete']);
Route::post('/admin/lop/delete/{id}', [LopController::class, 'postDelete']);

//sinhvien

Route::get('/admin/sv', [Svcontroller::class, 'getSv']);

Route::get('/admin/sv/add', [Svcontroller::class, 'getAdd']);
Route::post('/admin/sv/add', [Svcontroller::class, 'postAdd']);

Route::get('/admin/sv/update/{id}', [Svcontroller::class, 'getUpdate']);
Route::post('/admin/sv/update/{id}', [Svcontroller::class, 'postUpdate']);

Route::get('/admin/sv/delete/{id}', [Svcontroller::class, 'getDelete']);
Route::post('/admin/sv/delete/{id}', [Svcontroller::class, 'postDelete']);


// export excel Sinh vien
Route::get('admin/sv/export/', [SvController::class, 'export']);
// Import excel
Route::post('/admin/sv/import/',[SvController::class,'postImport']);
