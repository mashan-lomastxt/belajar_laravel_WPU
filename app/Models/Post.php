<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Post #extends Model
{
    #use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mashan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quidem suscipit cupiditate. Architecto deleniti non quasi, corrupti fuga esse tenetur ipsa doloremque. Quidem amet recusandae doloribus. Possimus nesciunt ducimus excepturi, in amet qui vel aliquid! Temporibus rem, dolorem mollitia accusantium necessitatibus provident molestias quidem architecto sed asperiores ex cupiditate ipsum!"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "dika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia excepturi, nulla ipsum laborum fugiat unde cum voluptates nobis. Quis iste sit praesentium quisquam veniam odit architecto accusantium odio ab assumenda, ut, pariatur sunt, quos neque beatae obcaecati eaque impedit. Alias dolores aliquid amet, ut perspiciatis repellendus quidem excepturi autem adipisci voluptate maxime, dolorem consequuntur ratione iusto velit quisquam blanditiis magni officia fuga natus voluptates. Maxime et tempore in tempora illo nihil totam aperiam saepe, facere ratione consectetur quisquam repellat non quis similique cupiditate dolor pariatur provident molestias, quasi, debitis possimus doloremque! Eos voluptas ratione necessitatibus, ullam magnam maxime, natus tempore eaque culpa illo voluptatum alias perspiciatis eum, nostrum impedit! Non!"
        ],
    
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
