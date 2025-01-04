<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts() {
      return $this->hasMany(Post::class);
    }
}

// PHP Tinker Commands :

// $user = new App\Models\User;
// $user = new User;
// $user->name = 'Inzaghi Posuma';
// $user->email = 'inzaghi@email.com';
// $user->password = bcrypt('123456');

// $user->save();         // Untuk menyimpan semua Data ke Database
// $user->all();          // Untuk menampilkan semua Data pada Database
// $user->first();        // Untuk menampilkan semua Data Pertama pada Database
// $user->find(n);        // Untuk menampilkan semua Data Ke-n pada Database
// $user->findOrFail(n);  // Untuk menampilkan Data ke-n apakah Ada atau Tidak (dengan Pesan Error jika tidak ada)