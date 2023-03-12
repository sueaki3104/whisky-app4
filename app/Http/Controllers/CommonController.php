<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{


    public function page_user_login(Request $request)
    {
        return view('TopPage.login');
    }

    public function page_user_register(Request $request)
    {
        return view('TopPage.register');
    }

    public function page_user_bottleediting(Request $request)
    {
        return view('bottleediting');
    }

    public function page_user_bottlelist(Request $request)
    {
        return view('bottlelist');
    }

    public function page_user_editconfirmation(Request $request)
    {
        return view('editconfirmation');
    }

   public function page_user_home(Request $request)
    {
        return view('home');
    }

   public function page_user_messages(Request $request)
    {
        return view('messages');
    }

       public function page_user_newbottle(Request $request)
    {
        return view('newbottle');
    }

       public function page_user_posting(Request $request)
    {
        return view('posting');
    }

       public function page_user_registercomplete(Request $request)
    {
        return view('registercomplete');
    }

           public function page_user_shelves(Request $request)
    {
        return view('shelves');
    }

           public function page_user_mail(Request $request)
    {
        return view('mail');
    }
}
