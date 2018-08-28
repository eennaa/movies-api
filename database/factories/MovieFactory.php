<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
            'title' => $faker->sentence(3,true),
            'director' => $faker->name,
            'imageURL' => $faker->imageUrl(750, 400, 'people'),
            'duration' => $faker->numberBetween(40,240),
            'releaseDate' => $faker->date('Y-m-d', 'now'),
            'genre' => $faker->word,
            
        ];
    
});

/*id (int)
title (string)
director (string)
imageUrl (string)
duration (int)
releaseDate (date)
genre (string)

*/