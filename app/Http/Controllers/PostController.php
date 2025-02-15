<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     *  display the list of posts
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * page for creating blog
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * store users data
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        $post = Post::create($validated);

        // Redirect to the blog index page
        return redirect()->route('posts.index');
    }

    /**
     * display the collection of posts
     * @param Post $post
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
