<?php

namespace App\Http\Controllers\TopPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function __invoke(Request $request)
    {
        // ①最初の画面
        return view('TopPage.index');
    }




}
