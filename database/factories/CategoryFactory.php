<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;
use PhpParser\Node\Expr\Cast\String_;

$factory->define(Category::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        //
        'name' => $word,
        'slug' => Str::slug($word)
    ];
});
