<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Inzaghi Posuma Al Kahfi",
        "email" => "izzumiposhaf29@gmail.com",
        "image" => "inzaghi-posuma-alkahfi.jpg",
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
