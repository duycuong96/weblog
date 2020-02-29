<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => 0,
        'password' => bcrypt(123456),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'role_id' => 0,
        'is_active' => 0,

    ];
});
