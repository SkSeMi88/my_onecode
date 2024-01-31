<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Registered;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});


Route::get('/test'. TestController::class);

Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::post('register', [RegisterController::class, 'store'])->name('register.store');


Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('login/{user}/confirmation', [LoginController::class, 'confirmation'])->name('login.confirmation');

Route::post('login/{user}/confirm', [LoginController::class, 'confirm'])->name('login.confirm');

/*

//CRUD

Route::get('posts',[PostController::class, 'index'])->name('posts');

Route::get('posts/create',[PostController::class, 'create'])->name('posts.create');

Route::post('posts',[PostController::class, 'store'])->name('posts.store');

Route::get('posts/{post}',[PostController::class, 'show'])->name('posts.show');

Route::get('posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');

Route::put('posts/{post}',[PostController::class, 'update'])->name('posts.update');

Route::delete('posts/{post}',[PostController::class, 'delete'])->name('posts.delete');

Route::put('posts/{post}/like',[PostController::class, 'like'])->name('posts.like');


Route::resource('posts/{post}/comments', CommentController::class)->only(['index','show']);

*/

Route::get('blog', [BlogController::class, 'index'])->name('blog');

Route::get('blog/{post}',  [BlogController::class, 'show'])->name('blog.show');

Route::post('blog/{post}/like',  [BlogController::class, 'like'])->name('blog.like');


Route::prefix('user')->as('user.')->group(function(){

    Route::get('posts',[PostController::class, 'index'])->name('posts');

    Route::get('posts/create',[PostController::class, 'create'])->name('posts.create');

    Route::post('posts',[PostController::class, 'store'])->name('posts.store');

    Route::get('posts/{post}',[PostController::class, 'show'])->name('posts.show');

    Route::get('posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');

    Route::put('posts/{post}',[PostController::class, 'update'])->name('posts.update');

    Route::delete('posts/{post}',[PostController::class, 'delete'])->name('posts.delete');

    Route::put('posts/{post}/like',[PostController::class, 'like'])->name('posts.like');
});

Route::resource('posts/{post}/comments', CommentController::class)->only(['index','show']);

// Route::fallback(function () {

//     return 'Fallback';
// });






