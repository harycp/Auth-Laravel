<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function (){
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function (){
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Functionality of VueJS',
            'author' => 'Hary Capri',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero iure recusandae
            exercitationem
            voluptatibus
            quia veritatis quod reiciendis facilis eaque mollitia. Facere ea nobis earum. Officiis, asperiores.
            Distinctio placeat quam natus?Corrupti amet deleniti iste? Veniam dolores, distinctio consectetur impedit
            officiis sint recusandae. Magni distinctio, repellat nihil, dolor reiciendis maxime explicabo inventore
            ipsam libero illo molestiae optio deserunt aperiam tenetur. Magnam?'
        ],
        [
            'title' => 'What is React JS ?',
            'author' => 'Hary Capri',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam est repudiandae
            praesentium similique et quia dolores voluptas blanditiis nihil eligendi modi corrupti aperiam voluptatibus
            consequatur, explicabo assumenda magnam ex neque!'
        ]
    ]]);
});

Route::get('/contact', function (){
    return view('contact', ['title' => 'Contact']);
});
