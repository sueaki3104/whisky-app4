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
});

Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class);


// ここから先が書いたやつ
Route::get('/index', \App\Http\Controllers\TopPage\IndexController::class);
Route::get('/login', [\App\Http\Controllers\CommonController::class, 'page_user_login']);
Route::get('/register', [\App\Http\Controllers\CommonController::class, 'page_user_register']);

Route::get('/bottleediting', [\App\Http\Controllers\CommonController::class, 'page_user_bottleediting']);
Route::get('/bottlelist', [\App\Http\Controllers\CommonController::class, 'page_user_bottlelist']);
Route::get('/editconfirmation', [\App\Http\Controllers\CommonController::class, 'page_user_editconfirmation']);
Route::get('/home', [\App\Http\Controllers\CommonController::class, 'page_user_home']);
Route::get('/messages', [\App\Http\Controllers\CommonController::class, 'page_user_messages']);
Route::get('/newbottle', [\App\Http\Controllers\CommonController::class, 'page_user_newbottle']);
Route::get('/posting', [\App\Http\Controllers\CommonController::class, 'page_user_posting']);
Route::get('/registercomplete', [\App\Http\Controllers\CommonController::class, 'page_user_registercomplete']);
Route::get('/shelves', [\App\Http\Controllers\CommonController::class, 'page_user_shelves']);
Route::get('/mail', [\App\Http\Controllers\CommonController::class, 'page_user_mail']);

