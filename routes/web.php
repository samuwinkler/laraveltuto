<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('post/{post}', function ($slug) {
    
//if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
//return redirect('/');
 //   }

 //  $post = cache()->remember("posts.{$slug}", 1200, fn()=> file_get_contents($path));
    
  //  return view('post', [
    //    'post' => $post
 //   ]
  //  );
$post = Post::find($slug);

  return view ('post', [
        'post' => $post 
  ]);
})->where('post', '[A-z_\-]+');
