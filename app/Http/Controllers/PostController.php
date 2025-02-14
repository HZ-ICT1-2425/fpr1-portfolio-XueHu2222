<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     *  display the list of posts
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('posts.index');
    }
}
