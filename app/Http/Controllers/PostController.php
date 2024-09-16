<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function filterPost():Response{
        $posts = Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString();

        return response()->view('posts', [
            'title' => 'Blog', 'posts' => $posts
        ]);
    }

    public function slugPost(Post $post){
        return view('post', [
            'title' => 'Blog Page', 
            'post' => $post
        ]);
    }

    public function authorLoad(User $user){
        return view('posts', ['title' => count($user->posts) . ' Blogs by ' . $user->name, 'posts' => $user->posts]);
    }

    public function categoryLoad(Category $category){
        return view('posts', ['title' => $category->name, 'posts' => $category->posts]);
    }

}
