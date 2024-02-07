<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function lawyer_profile()
    {
        return view('frontend.lawyer_profile');
    }
}
