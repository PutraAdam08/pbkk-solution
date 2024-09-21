<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/blog', function () {
    return view('blogs', [
        'title' => 'blogs',
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('blog', [
        'title' => 'blog',
        'post' => $post
    ]);
});

Route::get('/blog/{user}', function (User $user) {
    return view('blogs', [
        'title' => 'blog',
        'post' => $user->posts
    ]);
});