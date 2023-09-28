<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::get();

        return view('posts.posts')->with('posts', $posts);
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('posts.post')->with('post', $post);
    }
}
