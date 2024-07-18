<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\URL;

// URL::forceScheme('https');

// Route::get('/', function () {
//     return view('welcome');
// });

// returns the home page with all users
Route::get('/', UserController::class .'@index')->name('users.index');

// returns the form for adding a post
Route::get('/users/create', UserController::class .'@create')->name('users.create');

// adds a user to the database
Route::post('/users', UserController::class .'@store')->name('users.store');

// returns a page that shows a full user detail
Route::get('/users/{user}', UserController::class .'@show')->name('users.show');

// returns the form for editing a user
Route::get('/users/{user}/edit', UserController::class .'@edit')->name('users.edit');

// updates a user from the database
Route::put('/users/{user}', UserController::class .'@update')->name('users.update');

// deletes a user from the database
Route::delete('/users/{user}', UserController::class .'@destroy')->name('users.destroy');


// _______________________________________________________________________________________________________________________________________________

// returns the post page with all posts
Route::get('/posts', PostController::class .'@index')->name('posts.index');
// Route::get('/', [PostController::class, 'index'])->name('post.index');

// returns the form for adding a post
Route::get('/posts/create', PostController::class .'@create')->name('posts.create');

// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');

// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');

// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');

// updates a post from the database
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');

// deletes a post from the database
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');