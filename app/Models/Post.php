<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {

    public static function findAll(){
        return [
            [
                'id' => 1,
                'slug' => 'functionality-of-vuejs',
                'title' => 'Functionality of VueJS',
                'author' => 'Hary Capri',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero iure recusandae exercitationem voluptatibus
            quia veritatis quod reiciendis facilis eaque mollitia. Facere ea nobis earum. Officiis, asperiores.
            Distinctio placeat quam natus?Corrupti amet deleniti iste? Veniam dolores, distinctio consectetur impedit
            officiis sint recusandae. Magni distinctio, repellat nihil, dolor reiciendis maxime explicabo inventore
            ipsam libero illo molestiae optio deserunt aperiam tenetur. Magnam?',
            ],
            [
                'id' => 2,
                'slug' => 'what-is-react-js',
                'title' => 'What is React JS ?',
                'author' => 'Hary Capri',
                'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam est repudiandae
            praesentium similique et quia dolores voluptas blanditiis nihil eligendi modi corrupti aperiam voluptatibus
            consequatur, explicabo assumenda magnam ex neque!',
            ],
        ];
    }

    public static function findOne($slug):array{
        $posts = static::findAll();

        $post =  Arr::first($posts, fn($post) => $post['slug'] == $slug);

        if(! $post) abort(404);

        return $post;
    }
}