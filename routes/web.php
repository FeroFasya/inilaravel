<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['who' => 'FeroFasya']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/welcome', function () {
    // return view('welcome', ['id' => '123'], ['name' => 'FeroFasya']);
    return "Selamat datang di laravel";
});






// Route untuk UserController
Route::get('/user', [UserController::class, 'index']);
// Route untuk UserController
Route::get('/user/{id}', [UserController::class, 'show']);