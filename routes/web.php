<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mashan",
        "email" => "handikawilwatikta@gmail.com",
        "image" => "img.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);