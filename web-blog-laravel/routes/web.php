<?php

use App\Models;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        "title" => 'Post Cateogries',
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        "title" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        "title" => 'User Posts',
        "posts" => $author->posts
    ]);
});