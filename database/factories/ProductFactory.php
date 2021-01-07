<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Item::class, function (Faker $faker) {
    return [
        "item_name" => $faker->jobTitle,
        "item_description" => $faker->text,
        "price" => $faker->randomDigit,
        "unit" => $faker->randomDigit,
        "category_id" => $faker->numberBetween(1,2),
        "image" => $faker->imageUrl()
    ];
});
