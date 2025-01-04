<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Buat user
        User::create([
            'name' => 'Inzaghi Posuma',
            'email' => 'izzumiposhaf29@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Khoirul Fuadi',
            'email' => 'fuadi@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        // Buat kategori
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit! Vero voluptatibus odit, sequi distinctio dolor hic enim, ut natus
                harum iste facere magnam? Perferendis, accusantium magni doloribus aut iusto
                recusandae culpa aspernatur rerum nostrum et incidunt voluptate dolores
                molestias dolorem commodi porro possimus modi asperiores. Voluptates, dicta
                quibusdam! Vitae iure assumenda ad impedit dolore earum sunt laudantium
                reiciendis? Facilis necessitatibus, impedit, recusandae vitae perspiciatis sint
                quaerat distinctio beatae deleniti corporis, hic repudiandae fugit. Officiis
                amet, enim accusamus perferendis rerum possimus impedit omnis distinctio, cumque
                magnam accusantium magni praesentium?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit! Vero voluptatibus odit, sequi distinctio dolor hic enim, ut natus
                harum iste facere magnam? Perferendis, accusantium magni doloribus aut iusto
                recusandae culpa aspernatur rerum nostrum et incidunt voluptate dolores
                molestias dolorem commodi porro possimus modi asperiores. Voluptates, dicta
                quibusdam! Vitae iure assumenda ad impedit dolore earum sunt laudantium
                reiciendis? Facilis necessitatibus, impedit, recusandae vitae perspiciatis sint
                quaerat distinctio beatae deleniti corporis, hic repudiandae fugit. Officiis
                amet, enim accusamus perferendis rerum possimus impedit omnis distinctio, cumque
                magnam accusantium magni praesentium?',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit! Vero voluptatibus odit, sequi distinctio dolor hic enim, ut natus
                harum iste facere magnam? Perferendis, accusantium magni doloribus aut iusto
                recusandae culpa aspernatur rerum nostrum et incidunt voluptate dolores
                molestias dolorem commodi porro possimus modi asperiores. Voluptates, dicta
                quibusdam! Vitae iure assumenda ad impedit dolore earum sunt laudantium
                reiciendis? Facilis necessitatibus, impedit, recusandae vitae perspiciatis sint
                quaerat distinctio beatae deleniti corporis, hic repudiandae fugit. Officiis
                amet, enim accusamus perferendis rerum possimus impedit omnis distinctio, cumque
                magnam accusantium magni praesentium?',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit quod, in
                suscipit voluptatum ducimus, doloremque eveniet, inventore architecto corporis
                ut fugit! Vero voluptatibus odit, sequi distinctio dolor hic enim, ut natus
                harum iste facere magnam? Perferendis, accusantium magni doloribus aut iusto
                recusandae culpa aspernatur rerum nostrum et incidunt voluptate dolores
                molestias dolorem commodi porro possimus modi asperiores. Voluptates, dicta
                quibusdam! Vitae iure assumenda ad impedit dolore earum sunt laudantium
                reiciendis? Facilis necessitatibus, impedit, recusandae vitae perspiciatis sint
                quaerat distinctio beatae deleniti corporis, hic repudiandae fugit. Officiis
                amet, enim accusamus perferendis rerum possimus impedit omnis distinctio, cumque
                magnam accusantium magni praesentium?',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
