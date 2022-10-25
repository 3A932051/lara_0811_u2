<?php

use Illuminate\Support\Facades\Route;

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
	//回傳view預設就有
});

Route::get('/', function () {
 return 'welcome';
});

Route::get('r2', function() {
 return view('welcome');
});
Route::get('r1', function() {
 return redirect('r2');
});//跳轉路由
Route::get('hello/{name}', function ($name){
 return 'Hello, '.$name;
});//設定路由接收參數

Route::get('hello/{name?}', function ($name = 'Everybody'){
 return 'Hello, '.$name;
});//修改參數成選擇性

Route::get('kido', function (){
 return 'kido';
});//自訂路由
Route::get('hello/{name?}', function ($name = 'Everybody'){
 return 'Hello, '.$name;
})->name('hello.index');//路由命名

Route::get('dashboard', function (){
 return 'dashboard';
});//route前置
Route::group(['prefix' => 'admin'], function(){
 Route::get('dashboard', function (){
 return 'admin dashboard';
 });
});//設定另一個route以群組包起來設定prefix