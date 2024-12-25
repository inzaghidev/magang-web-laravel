<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
}

// PHP Tinker Commands :

// $post = new \App\Models\Post;
// $post->title = 'Judul Pertama';
// $post->excerpt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quasi labore. Voluptate minima esse amet? Non, quam. Omnis beatae mollitia laborum quo maiores aperiam doloremque accusamus voluptatem cumque quis molestiae minus nobis deserunt ex doloribus perferendis quam, odio cupiditate. Delectus dicta explicabo fuga blanditiis,';
// $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quos obcaecati fugit porro esse dolorum? Saepe illum, nostrum animi amet ipsa, voluptatum facilis quis molestias, unde iure exercitationem eum neque deleniti voluptate fugit nemo. Molestias numquam quis, aliquam sint optio ad, libero nobis obcaecati quod minima alias veritatis, tempora quo odit ab facilis nisi dolorem tenetur vitae? Dignissimos reprehenderit dolores quod nisi iusto error maiores quae, illo eum, officiis labore at consectetur cum dolor nulla laborum magni ea, doloribus commodi neque. Mollitia doloremque ducimus pariatur, ab, soluta recusandae dolor ut veniam porro consequatur ad saepe provident dolorum necessitatibus nobis explicabo!';

// $post = new \App\Models\Post;
// $post->title = 'Judul Kedua';
// $post->excerpt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, dolores. Similique sequi facilis eveniet quo possimus, cumque cupiditate repellendus delectus,';
// $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, dolores. Similique sequi facilis eveniet quo possimus, cumque cupiditate repellendus delectus, aspernatur reprehenderit blanditiis odio recusandae ipsa qui obcaecati sapiente fugiat praesentium pariatur beatae laborum numquam! Repellat nemo quia porro blanditiis aliquid quos deserunt sed ea ullam? Nobis reiciendis et impedit cum vero, quae eius repellat neque hic numquam recusandae labore veniam beatae, enim, ea iste quo dolorum autem veritatis! Totam commodi ex necessitatibus, sunt omnis adipisci quo ducimus et vel.';

// Alternatif :
// App\Models\Post::create([
//   'title' => 'Judul Keempat',
//   'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad aut numquam dolor veniam fugiat eligendi',
//   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad aut numquam dolor veniam fugiat eligendi, corporis unde distinctio adipisci animi perspiciatis a facilis, voluptas odit nobis quasi eius culpa.</p><p>Reprehenderit incidunt corrupti maxime deserunt excepturi nesciunt nostrum corporis harum exercitationem officiis aliquam laborum porro vitae aut quibusdam eligendi suscipit minus aperiam, dolor eum vero rerum nobis repellendus omnis.</p><p>Ullam soluta mollitia, enim fugit quis eos voluptatem dicta aperiam deserunt est tenetur suscipit eaque iusto animi atque distinctio, explicabo nemo officia maiores quod temporibus! Est ipsam hic soluta autem, iusto possimus tenetur impedit molestias. Unde, autem soluta totam eum sit quas eius eos voluptas, deserunt illo, tempore ducimus aperiam accusantium explicabo alias neque deleniti asperiores dolorum!</p><p>Doloribus officia atque, reiciendis magni facere est animi quasi adipisci nam ipsa voluptate repellendus suscipit et aut. Facilis deserunt amet numquam quidem ducimus, voluptates exercitationem, cum laboriosam nesciunt molestiae impedit quia provident? Obcaecati, facilis?</p>'
// ]);


// $post->save();                       // Untuk menyimpan semua Data ke Database
// App\Models\Post::all();              // Untuk menampilkan semua Data dalam Database
// App\Models\Post::first();            // Untuk menampilkan semua Data Pertama pada Database
// App\Models\Post::Pluck('title');     // Untuk menampilkan semua Data dalam Database (Hanya Judul saja)
// App\Models\Post::find(n);            // Untuk menampilkan semua Data Ke-n pada Database