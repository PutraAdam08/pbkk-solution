<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/blog', function () {
    $posts = Post::filter(request(['search', 'category']))->latest();
    return view('blogs', [
        'title' => 'blogs',
        'posts' => $posts->get()
    ]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('blog', [
        'title' => 'blog',
        'post' => $post
    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('blogs', [
        'title' => 'blog',
        'posts' => $user->posts
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('blogs', [
        'title' => 'blog',
        'posts' => $category->posts
    ]);
});