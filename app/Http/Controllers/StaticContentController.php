<?php

namespace App\Http\Controllers;

class StaticContentController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function profile()
    {
        return view('profile');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function faq()
    {
        return view('faq');
    }
}
