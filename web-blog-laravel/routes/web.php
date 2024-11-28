<?php

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
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Inzaghi Posuma",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                        voluptatibus eveniet adipisci tempora, ut nisi repellendus distinctio
                        sapiente earum possimus iure amet! Ab ratione nulla quaerat officiis in
                        voluptatem quae at dolor maiores accusantium. Minima, eius. Hic
                        consectetur ipsum qui minima deserunt nisi autem cumque. Architecto
                        beatae, quae dolores veniam repudiandae nostrum cupiditate sed corrupti
                        cum? Harum quos est quas corrupti sit ipsa aliquam quidem voluptates esse
                        qui quaerat, natus optio veniam quis, culpa quo ipsum nesciunt adipisci
                        quisquam quasi!",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Khoirul Fuadi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
                        porro beatae vel quisquam, molestiae nostrum sequi similique optio fugit
                        eaque itaque eveniet cum quaerat saepe quasi nesciunt provident? Nobis, at
                        magni dolorem cum quisquam nemo eius tenetur enim. Dolorem commodi ullam
                        qui quos laudantium doloremque quae magnam vero facilis accusamus, unde ea
                        alias voluptatem reprehenderit. Fuga perspiciatis harum, modi sapiente
                        explicabo labore reiciendis fugit incidunt corporis earum eos iure tempora
                        odio ab est adipisci molestiae, nemo mollitia. Placeat dolores adipisci
                        delectus repellendus, nemo explicabo vitae soluta consequatur aliquam
                        incidunt inventore animi molestiae maxime quidem deleniti sequi eveniet
                        quos officia repudiandae!",
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

// Halaman Single Post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Inzaghi Posuma",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates,
                        voluptatibus eveniet adipisci tempora, ut nisi repellendus distinctio
                        sapiente earum possimus iure amet! Ab ratione nulla quaerat officiis in
                        voluptatem quae at dolor maiores accusantium. Minima, eius. Hic
                        consectetur ipsum qui minima deserunt nisi autem cumque. Architecto
                        beatae, quae dolores veniam repudiandae nostrum cupiditate sed corrupti
                        cum? Harum quos est quas corrupti sit ipsa aliquam quidem voluptates esse
                        qui quaerat, natus optio veniam quis, culpa quo ipsum nesciunt adipisci
                        quisquam quasi!",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Khoirul Fuadi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
                        porro beatae vel quisquam, molestiae nostrum sequi similique optio fugit
                        eaque itaque eveniet cum quaerat saepe quasi nesciunt provident? Nobis, at
                        magni dolorem cum quisquam nemo eius tenetur enim. Dolorem commodi ullam
                        qui quos laudantium doloremque quae magnam vero facilis accusamus, unde ea
                        alias voluptatem reprehenderit. Fuga perspiciatis harum, modi sapiente
                        explicabo labore reiciendis fugit incidunt corporis earum eos iure tempora
                        odio ab est adipisci molestiae, nemo mollitia. Placeat dolores adipisci
                        delectus repellendus, nemo explicabo vitae soluta consequatur aliquam
                        incidunt inventore animi molestiae maxime quidem deleniti sequi eveniet
                        quos officia repudiandae!",
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post' , [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});