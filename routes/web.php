<?php

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

Route::get('/posts', function () {

    // $post = Post::with(['author', 'category'])->latest()->get();

    // dump(request('search'));

    $posts = Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString(); 
    return view('posts', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    
    return view('post', ['title' => 'Blog Page', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $posts = $user->posts->load(['author', 'category']);

    return view('posts', ['title' => count($user->posts) . ' Blogs by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load(['author', 'category']);
    
    return view('posts', ['title' => $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
