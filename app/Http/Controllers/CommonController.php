<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{

    // ②ログイン画面
    public function page_user_login(Request $request)
    {
        return view('TopPage.login');
    }

    // ③新規登録画面
    public function page_user_register(Request $request)
    {
        return view('TopPage.register');
    }

    // ④新規登録メール確認画面
    public function page_user_mail(Request $request)
    {
        return view('mail');
    }

    // ⑤新規登録完了しましたよ画面
    public function page_user_registercomplete(Request $request)
    {
        return view('registercomplete');
    }

    // ⑥ログインした後のホーム画面
    public function page_user_home(Request $request)
    {
        return view('home');
    }

    // ⑦投稿画面
    public function page_user_posting(Request $request)
    {
        return view('posting');
    }

    // ⑧投稿画面一覧
    public function page_user_messages(Request $request)
    {
        return view('messages');
    }

    // ⑨棚一覧
    public function page_user_shelves(Request $request)
    {
        return view('shelves');
    }

    // ➓ボトル新規登録
    public function page_user_newbottle(Request $request)
    {
        return view('newbottle');
    }

    // １１登録したボトルの詳細
    public function page_user_bottlelist(Request $request)
    {
        return view('bottlelist');
    }

    // １２登録したボトルの編集
    public function page_user_bottleediting(Request $request)
    {
        return view('bottleediting');
    }

    // １３ボトルの編集の確認画面
    public function page_user_editconfirmation(Request $request)
    {
        return view('editconfirmation');
    }



    // １４マイページ
    public function page_user_mypage(Request $request)
    {
        return view('mypage');
    }

    // １５マイページ編集画面
    public function page_user_mypageediting(Request $request)
    {
        return view('mypageediting');
    }

    // １６マイページの編集の確認画面
    public function page_user_mypageeditconfirmation(Request $request)
    {
        return view('mypageeditconfirmation');
    }



}
