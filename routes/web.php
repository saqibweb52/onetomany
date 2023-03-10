<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
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

Route::get('/',[AuthorController::class,"add_author"]);

Route::get('post/{id}',[PostController::class,"add_post"]);

Route::get('showpost/{id}',[PostController::class,"showpost"]);

Route::get('showa/{id}',[PostController::class,"showa"]);

Route::get('index/{id}',[PostController::class,"index"]);

