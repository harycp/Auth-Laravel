<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', [PostController::class, 'filterPost']);

Route::get('/post/{post:slug}', [PostController::class, 'slugPost']);

Route::get('/authors/{user:username}', [PostController::class, 'authorLoad']);
    // $posts = $user->posts->load(['author', 'category']);

Route::get('/categories/{category:slug}', [PostController::class, 'categoryLoad']);

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get("/login", [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get("/register", [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
     return view('dashboard.index, ['title' => 'Dashboard']);
});
