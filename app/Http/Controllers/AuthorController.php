<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class AuthorController extends Controller
{
    public function add_author(){

   $author = new Author;

   $author->username = "ali";
   $author->password = "ali.1234";
   $author->save();

   

   

    }
}
