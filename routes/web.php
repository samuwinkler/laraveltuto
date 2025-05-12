<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

Route::get('/', function () {
  //$posts = Post::all();
  //if (is_null($posts)) {
    //Log::error('Posts is null!');
    //abort(400, 'Posts not found'); 
//}

 

  //  return view('posts', [
    //    'posts' => $posts
    //]);
   // return view('posts', [
     //   'posts' => Post::all()
    //]);

    $document = YamlFrontMatter::parseFile(resource_path('posts/my-fourth-post.html'));
});

Route::get('posts/{post}', function ($slug) {
    
//$post = Post::find($slug);

  //return view ('post', [
  //      'post' => $post 
 // ]);
 return view ('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');
