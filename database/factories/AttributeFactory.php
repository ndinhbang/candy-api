<?php

use Faker\Generator as Faker;
use GetCandy\Api\Core\Attributes\Models\Attribute;
use Illuminate\Support\Str;

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

$factory->define(Attribute::class, function (Faker $faker) {
    $name = $faker->unique()->company;

    return [
        'name' => [
            'en' => $name,
        ],
        'handle' => Str::slug($name),
        'position' => $faker->numberBetween(1, 10),
        'variant' => $faker->boolean,
        'searchable' => $faker->boolean,
        'filterable' => $faker->boolean,
        'system' => $faker->boolean,
        'channeled' => $faker->boolean,
        'translatable' => $faker->boolean,
        'type' => 'text',
        'required' => $faker->boolean,
        'scopeable' => $faker->boolean,
    ];
});
