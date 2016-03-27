<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Votemike\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Votemike\BlogPost::class, function (Faker\Generator $faker) {
    $title = $faker->sentence;

    return [
        'author_id' => factory(Votemike\User::class)->create()->id,
        'title' => $title,
        'body' => $faker->paragraph,
        'slug' => str_slug($title),
        'active' => rand(0,1),
    ];
});
