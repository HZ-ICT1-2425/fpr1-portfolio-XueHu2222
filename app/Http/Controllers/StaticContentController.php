<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticContentController extends Controller
{
    /**
     * display home
     * @return \Illuminate\Contracts\View\View
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * display dashboard
     * @return \Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * display profile
     * @return \Illuminate\Contracts\View\View
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * display faq
     * @return \Illuminate\Contracts\View\View
     */
    public function faq()
    {
        return view('faq');
    }
}
