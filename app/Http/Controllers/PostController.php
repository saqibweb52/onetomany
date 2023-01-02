<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class PostController extends Controller
{
    public function add_post($id){
        $author = Author::find($id);
        $post = new Post;
     
        $post->title = "The way of water";
        $post->cat = "Action";
        
        $author->post()->save($post);
        
         }

       public function showpost($id){
        $post = Author::find($id)->post;
        return $post;
       }

       public function showa($id){
        $author = Post::find($id)->Author;
        return $author;
       }


       public function index($id){
    $author = Author::find($id);
   $a = $author->username;
    echo $a;
    foreach ($author->post as $post){

        echo $post->title;
        echo $post->cat;
    }


       }


}
