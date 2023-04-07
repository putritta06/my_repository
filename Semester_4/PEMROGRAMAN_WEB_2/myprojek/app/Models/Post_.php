<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            'title' => 'ASING ft. Huang Renjun',
            'slug' => 'judul-pertama',
            'author' => 'sunHT06',
            'body' => 'Airin Rahardianti tidak menyebut ini sebagai pandangan yang benar, tapi dia harap, memanusiakan manusia lain bukanlah penyesalan yang akan membuatnya turun berperang tanpa senjata di masa-masa SMA-nya'
        ],
        [
            'title' => 'This Is What It Takes',
            'slug' => 'judul-kedua',
            'author' => 'pawlvinaz',
            'body' => 'Hanan, sosok gadis yang memendam apa pun sendiri. Gadis itu selalu terlihat baik-baik saja, tetapi kenyataannya tidak. Hanan telah banyak merasakan kehilangan.'
        ]
    ];

    public static function all(){
        return self::$blog_posts;
    }
}
