<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

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
    return view("main");
});

Route::get("/blog/blog", function() {
    return view("/blog/blog");
});

Route::get("/bayu", [HomeController::class, 'createTest']);


Route::get("/profile", [HomeController::class, 'index']);
Route::get("/profile/{id}", [HomeController::class, 'getId' ]);



//view post dengan getAll
Route::get("/post", [PostController::class, 'index']);
//view form post
Route::get('/post/createpost', [PostController::class, 'createPost']);
//create method post
Route::post('/post', [PostController::class, 'store']);

//view post dengan getId
Route::get('/post/{id}', [PostController::class, 'show']);
//view form update post
Route::get('/post/{id}/edit', [PostController::class, 'edit']);
//update method put
Route::put('/post/{id}', [PostController::class, 'update']);
//remove method delete
Route::delete('/post/{id}', [PostController::class, 'destroy']);


Route::get("/form", [FormController::class, 'form']);
