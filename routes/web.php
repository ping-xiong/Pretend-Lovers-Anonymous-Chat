<?php

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
    return redirect('/admin');
});


// 后台
// 登录
Route::get('login', function (){
    return view('login');
})->name('login');

// 登录接口
Route::post('login/auth', 'login\loginController@auth');


Route::group(['middleware' => ['login']], function () {
    //

    Route::get('admin', function (){
        return view('admin');
    });

    // 服务器开启
    Route::get('server/open', 'server\serverController@open');
    // 服务器关闭
    Route::get('server/close', 'server\serverController@close');
});






