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
// ①最初の画面
Route::get('/index', \App\Http\Controllers\TopPage\IndexController::class);
// ②ログイン画面
Route::get('/login', [\App\Http\Controllers\CommonController::class, 'page_user_login']);
// ③新規登録画面
Route::get('/register', [\App\Http\Controllers\CommonController::class, 'page_user_register']);
// ④新規登録メール確認画面
Route::get('/mail', [\App\Http\Controllers\CommonController::class, 'page_user_mail']);
// ⑤新規登録完了しましたよ画面
Route::get('/registercomplete', [\App\Http\Controllers\CommonController::class, 'page_user_registercomplete']);
// ⑥ログインした後のホーム画面
Route::get('/home', [\App\Http\Controllers\CommonController::class, 'page_user_home']);
// ⑦投稿画面
Route::get('/posting', [\App\Http\Controllers\CommonController::class, 'page_user_posting']);
// ⑧投稿画面一覧
Route::get('/messages', [\App\Http\Controllers\CommonController::class, 'page_user_messages']);
// ⑨棚一覧
Route::get('/shelves', [\App\Http\Controllers\CommonController::class, 'page_user_shelves']);
// ➓ボトル新規登録
Route::get('/newbottle', [\App\Http\Controllers\CommonController::class, 'page_user_newbottle']);
// １１登録したボトルの詳細
Route::get('/bottlelist', [\App\Http\Controllers\CommonController::class, 'page_user_bottlelist']);
// １２登録したボトルの編集
Route::get('/bottleediting', [\App\Http\Controllers\CommonController::class, 'page_user_bottleediting']);
// １３ボトルの編集の確認画面
Route::get('/editconfirmation', [\App\Http\Controllers\CommonController::class, 'page_user_editconfirmation']);
// １４マイページ
Route::get('/mypage', [\App\Http\Controllers\CommonController::class, 'page_user_mypage']);
// １５マイページ編集画面
Route::get('/mypageediting', [\App\Http\Controllers\CommonController::class, 'page_user_mypageediting']);
// １６マイページの編集の確認画面
Route::get('/mypageeditconfirmation', [\App\Http\Controllers\CommonController::class, 'page_user_mypageeditconfirmation']);
