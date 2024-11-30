<?php

use App\Models;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Inzaghi Posuma Al Kahfi",
        "email" => "izzumiposhaf29@gmail.com",
        "image" => "inzaghi-posuma-alkahfi.jpg",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = Post::all();

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

Route::get('/posts', function() {
    
    return view('posts' , [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('posts/{slug}', function($slug) {
    
    return view('post' , [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});