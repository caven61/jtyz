<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
     public function admin()
    {
        return view('static_pages/admin');
    }

     public function help()
    {
        return view('static_pages/help');
    }

    public function login()
    {
        return view('static_pages/login');
    }

    public function yanz()
    {
        return view('static_pages/yanz');
    }

    

}
