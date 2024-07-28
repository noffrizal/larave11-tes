<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['title' => 'About Page','name' => 'NOFFRIZAL']);
});

route::get('/posts', function () {
    return view('posts',['title' => 'Blog Page', 'posts'=>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Noffrizal Zaim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempora cum consequuntur officia. Nihil sed fugit consectetur facilis officiis asperiores.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Noffrizal Zaim',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit inventore mollitia nisi facilis, ipsa illo molestias eveniet. Distinctio nisi amet tenetur debitis! Fugit laborum tempore quaerat atque corporis, explicabo maxime alias officia autem. Doloribus esse pariatur sunt fuga, nobis sit consequuntur quisquam quas porro doloremque similique dignissimos, iure temporibus non.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
  $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Noffrizal Zaim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempora cum consequuntur officia. Nihil sed fugit consectetur facilis officiis asperiores.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Noffrizal Zaim',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit inventore mollitia nisi facilis, ipsa illo molestias eveniet. Distinctio nisi amet tenetur debitis! Fugit laborum tempore quaerat atque corporis, explicabo maxime alias officia autem. Doloribus esse pariatur sunt fuga, nobis sit consequuntur quisquam quas porro doloremque similique dignissimos, iure temporibus non.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });



    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);

});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});
