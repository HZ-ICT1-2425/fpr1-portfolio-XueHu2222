<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

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
     * store blog data
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:10',
            'slug' => 'nullable|string|min:10',
            'summary' => 'nullable|string|min:10',
            'body' => 'required|string|min:10',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if (empty($request->input('summary'))) {
            $validated['summary'] = substr($request->input('body'), 0, 50);
        }

        // Create a new Post model object, mass-assign its attributes with
        // the validated data and store it to the database
        $post = Post::create($validated);

        // Redirect to the blog index page
        return redirect()->route('posts.index');
    }

    /**
     * edit post page
     * @param Post $post fetch post
     * @return \Illuminate\Contracts\View\View|
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    /**
     * update data when save
     * @param Request $request get all posts
     * @param Post $post fetch post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:10',
            'slug' => 'nullable|string|min:10',
            'summary' => 'nullable|string|min:10',
            'body' => 'required|string|min:10',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if (empty($request->input('summary'))) {
            $validated['summary'] = substr($request->input('body'), 0, 50);
        }

        $post->update($validated);

        return redirect()->route('posts.show', $post);
    }

    /**
     * display the collection of posts
     * @param Post $post one post data
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
