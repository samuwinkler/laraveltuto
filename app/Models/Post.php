<?php 

namespace App\Models;

use Illuminate\Support\Facades\File;

class Post{

    public static function all2(){

        $files = File::files(resource_path("posts/"));

        array_map(function($file){

            return $file->getContents();
        }, $files);
    }

    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $files);
    }

    
    public static function find($slug){

    
    if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
        throw new ModelNotFoundException();
    }

   return cache()->remember("posts.{$slug}", 1200, fn()=> file_get_contents($path));
    

   ;

    }


}