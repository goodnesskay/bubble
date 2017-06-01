<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function faq()
    {
        return view('faq');
    }
}
