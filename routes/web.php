<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::get('/tv', function () {
    return view('tv');
});


Route::controller(MovieController::class)->group(function () {
    Route::get('/media', 'index');
    Route::get('/media/{movie}', 'show');
    Route::post('/media/{id}/post', 'store')->middleware('auth');
    Route::get('/media/{movie_id}/edit/{post_id}', 'edit')->middleware('auth'); 
    Route::patch('/media/{movie_id}/post/{post_id}', 'update')->middleware('auth');
    Route::delete('/media/{movie_id}/post/{post_id}', 'destroy')->middleware('auth');
});


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


Route::get('/admin', function () {
    App\Models\Movie::factory(200)->create();
    App\Models\Post::factory(2000)->create();
    App\Models\User::factory(200)->unverified()->create();
    return view('home');
});