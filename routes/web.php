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


// ここから先が使うやつ
// 最初の画面
Route::get('/index', \App\Http\Controllers\TopPage\IndexController::class);
// ログイン画面
Route::get('/login', [\App\Http\Controllers\CommonController::class, 'page_user_login']);
// 新規登録画面
Route::get('/register', [\App\Http\Controllers\CommonController::class, 'page_user_register']);
// 新規登録メール確認画面
Route::get('/mail', [\App\Http\Controllers\CommonController::class, 'page_user_mail']);
// 新規登録完了しましたよ画面
Route::get('/registercomplete', [\App\Http\Controllers\CommonController::class, 'page_user_registercomplete']);
// ログインした後のホーム画面
Route::get('/home', [\App\Http\Controllers\CommonController::class, 'page_user_home']);
// 投稿画面
Route::get('/posting', [\App\Http\Controllers\CommonController::class, 'page_user_posting']);
// 投稿画面一覧
Route::get('/messages', [\App\Http\Controllers\CommonController::class, 'page_user_messages']);
// 棚一覧
Route::get('/shelves', [\App\Http\Controllers\CommonController::class, 'page_user_shelves']);
// ボトル新規登録
Route::get('/newbottle', [\App\Http\Controllers\CommonController::class, 'page_user_newbottle']);
// 登録したボトルの詳細
Route::get('/bottlelist', [\App\Http\Controllers\CommonController::class, 'page_user_bottlelist']);
// 登録したボトルの編集
Route::get('/bottleediting', [\App\Http\Controllers\CommonController::class, 'page_user_bottleediting']);
// ボトルの編集の確認画面
Route::get('/editconfirmation', [\App\Http\Controllers\CommonController::class, 'page_user_editconfirmation']);

