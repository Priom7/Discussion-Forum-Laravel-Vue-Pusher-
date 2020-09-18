<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post;
use App\Model\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->text,
        'post_id' => function () {
            return Post::all()->random();
        },
        'user_id' => function () {
            return User::all()->random();
        },


    ];
});
