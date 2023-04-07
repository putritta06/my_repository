<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::created([
        //     'name' => 'Tata',
        //     'email' => 'putritarry@gmail.com',
        //     'password' => bcrypt('0606')
        // ]);

        Post::created([
            'title' => 'ASING ft. Huang Renjun',
            'author' => 'sunHT06',
            'body' => 'Airin Rahardianti tidak menyebut ini sebagai pandangan yang benar, tapi dia harap, memanusiakan manusia lain bukanlah penyesalan yang akan membuatnya turun berperang tanpa senjata di masa-masa SMA-nya'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
