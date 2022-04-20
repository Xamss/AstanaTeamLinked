<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $name;
    public $age;
    public $date;
    public $profession;
    public $experience;
    public $contact;
    public $body;
    public $slug;


    public function __construct($name, $age, $date, $profession, $experience, $contact, $body, $slug)
    {
        $this->name = $name;
        $this->age = $age;
        $this->date = $date;
        $this->profession = $profession;
        $this->experience = $experience;
        $this->contact = $contact;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all(){
        #TESTING
//        $documents = File::allFiles(resource_path("posts"));
//        return array_map(
//            ->map
//            ,$documents);
//        cache()->rememberForever('posts.all', );

//        $files = File::files(resource_path("/posts/"));
//
//        array_map(function ($file){
//            return $file->getContents();
//        }, $files);

        return cache()->rememberForever('posts', function(){
            $files = File::files(resource_path("posts"));
            return collect($files)
                ->map(function($file){
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function($document){
                    return new Post(
                        $document->name,
                        $document->age,
                        $document->date,
                        $document->profession,
                        $document->experience,
                        $document->contact,
                        $document->body(),
                        $document->slug
                    );
                })
                ->sortByDesc('date');
            });


    }

    public static function find($slug){
        #TESTING
       // $files = this->all();
#TESTING
//        $path = resource_path("/posts/{$slug}.html");
//        if(!file_exists($path)){
//            throw new ModelNotFoundException();
//        }
//
//        $document = YamlFrontMatter::parseFile($path);
//        $posts = new Post(
//            $document->name,
//            $document->age,
//            $document->date,
//            $document->profession,
//            $document->experience,
//            $document->contact,
//            $document->body(),
//            $document->slug
//        );
//        return cache()->remember(".post.{$slug}", 10, fn() => $posts);


        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
