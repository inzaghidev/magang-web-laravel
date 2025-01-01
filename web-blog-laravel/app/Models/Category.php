<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts() {
      return $this->hasMany(Post::class);
    }
}


// PHP Tinker Commands :

// $category = new App\Models\Category;
// $category = new Category;
// $category->name = 'Programming';
// $category->slug = 'programming';
// $category->save();                           // Untuk menyimpan semua Data ke Database

// App\Models\Category::all();                  // Untuk menampilkan semua Data dalam Database
// $category = App\Models\Category::first();    // Untuk menampilkan Data Pertama dalam Database
// $category->post                              // Menampilkan semua Kateogri

// Post::where('category_id', 1)->get();        // Untuk mengetahui Semua Database pada Kategori Pertama 

/*
Memasukkan Kategori :

App\Models\Category::create([
  'name' => 'Web Design',
  'slug' => 'web-design',
])

App\Models\Category::create([
  'name' => 'Personal',
  'slug' => 'personal',
])

*/

/*
Memasukkan Artikel :

App\Models\Post::create([
  'title' => 'Judul Pertama',
  'category_id' => 1,
  'slug' => 'judul-pertama',
  'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, quasi labore. Voluptate minima esse amet? Non, quam. Omnis beatae mollitia laborum quo maiores aperiam',
  'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, quasi labore. Voluptate minima esse amet? Non, quam. Omnis beatae mollitia laborum quo maiores aperiam, voluptas odit nobis quasi eius culpa.</p><p>Reprehenderit incidunt corrupti maxime deserunt excepturi nesciunt nostrum corporis harum exercitationem officiis aliquam laborum porro vitae aut quibusdam eligendi suscipit minus aperiam, dolor eum vero rerum nobis repellendus omnis.</p><p>Ullam soluta mollitia, enim fugit quis eos voluptatem dicta aperiam deserunt est tenetur suscipit eaque iusto animi atque distinctio, explicabo nemo officia maiores quod temporibus! Est ipsam hic soluta autem, iusto possimus tenetur impedit molestias. Unde, autem soluta totam eum sit quas eius eos voluptas, deserunt illo, tempore ducimus aperiam accusantium explicabo alias neque deleniti asperiores dolorum!</p><p>Doloribus officia atque, reiciendis magni facere est animi quasi adipisci nam ipsa voluptate repellendus suscipit et aut. Facilis deserunt amet numquam quidem ducimus, voluptates exercitationem, cum laboriosam nesciunt molestiae impedit quia provident? Obcaecati, facilis?</p>'
]);

App\Models\Post::create([
  'title' => 'Judul Kedua',
  'category_id' => 2,
  'slug' => 'judul-kedua',
  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, dolores. Similique sequi facilis eveniet quo possimus, cumque cupiditate repellendus delectus',
  'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, dolores. Similique sequi facilis eveniet quo possimus, cumque cupiditate repellendus delectus a facilis, voluptas odit nobis quasi eius culpa.</p><p>Reprehenderit incidunt corrupti maxime deserunt excepturi nesciunt nostrum corporis harum exercitationem officiis aliquam laborum porro vitae aut quibusdam eligendi suscipit minus aperiam, dolor eum vero rerum nobis repellendus omnis.</p><p>Ullam soluta mollitia, enim fugit quis eos voluptatem dicta aperiam deserunt est tenetur suscipit eaque iusto animi atque distinctio, explicabo nemo officia maiores quod temporibus! Est ipsam hic soluta autem, iusto possimus tenetur impedit molestias. Unde, autem soluta totam eum sit quas eius eos voluptas, deserunt illo, tempore ducimus aperiam accusantium explicabo alias neque deleniti asperiores dolorum!</p><p>Doloribus officia atque, reiciendis magni facere est animi quasi adipisci nam ipsa voluptate repellendus suscipit et aut. Facilis deserunt amet numquam quidem ducimus, voluptates exercitationem, cum laboriosam nesciunt molestiae impedit quia provident? Obcaecati, facilis?</p>'
]);

App\Models\Post::create([
  'title' => 'Judul Ketiga',
  'category_id' => 3,
  'slug' => 'judul-ketiga',
  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad aut numquam dolor veniam fugiat eligendi',
  'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ad aut numquam dolor veniam fugiat eligendi, corporis unde distinctio adipisci animi perspiciatis a facilis, voluptas odit nobis quasi eius culpa.</p><p>Reprehenderit incidunt corrupti maxime deserunt excepturi nesciunt nostrum corporis harum exercitationem officiis aliquam laborum porro vitae aut quibusdam eligendi suscipit minus aperiam, dolor eum vero rerum nobis repellendus omnis.</p><p>Ullam soluta mollitia, enim fugit quis eos voluptatem dicta aperiam deserunt est tenetur suscipit eaque iusto animi atque distinctio, explicabo nemo officia maiores quod temporibus! Est ipsam hic soluta autem, iusto possimus tenetur impedit molestias. Unde, autem soluta totam eum sit quas eius eos voluptas, deserunt illo, tempore ducimus aperiam accusantium explicabo alias neque deleniti asperiores dolorum!</p><p>Doloribus officia atque, reiciendis magni facere est animi quasi adipisci nam ipsa voluptate repellendus suscipit et aut. Facilis deserunt amet numquam quidem ducimus, voluptates exercitationem, cum laboriosam nesciunt molestiae impedit quia provident? Obcaecati, facilis?</p>'
]);

*/