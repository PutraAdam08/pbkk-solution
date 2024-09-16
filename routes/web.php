<?php

use Illuminate\Support\Facades\Route;

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
        'posts' => [
            [
            'title' => 'judul 1',
            'author' => 'Adam',
            'body' => 'Lorem ipsum dolor sit amet'
            ],
            [
            'title' => 'judul 2',
            'author' => 'Budi',
            'body' => 'Lorem ipsum dolor sit amet'
            ]

        ]
    ]);
});