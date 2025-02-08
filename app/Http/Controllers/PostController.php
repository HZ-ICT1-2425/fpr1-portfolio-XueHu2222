<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    private $posts = [
        1 => [
            'id'      => 1,
            'title'   => 'This is title 1',
            'content' => 'This is content 1.'
        ],
        2345 => [
            'id'      => 2345,
            'title'   => 'This is title 2',
            'content' => 'This is content 2.'
        ],
        3 => [
            'id'      => 3,
            'title'   => 'This is title 3',
            'content' => 'This is content 3.'
        ],
    ];

    public function getPost()
    {
        return $this->posts;
    }
    public function index() {
        $posts = $this->getPost();
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $posts = $this->getPost();
        {
            if (!array_key_exists($id, $posts)) {
                abort(404);
            }

            $post = $posts[$id];

            return view('posts.show', compact('post'));
        }
    }
}
