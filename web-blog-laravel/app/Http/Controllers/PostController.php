<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index() {
        return view('posts' , [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post) {
        return view('post' , [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
