<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);

        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

    }
}


// Belajar Laravel 8 | 7. Post Model [WPU]
// https://www.youtube.com/watch?v=o1em86nhU28
// https://www.youtube.com/watch?v=o1em86nhU28&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=8