<?php

use App\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'confirmed' => true,
        'confirmation_code' => $faker->md5,
        'github_id' => $faker->numberBetween(10000, 99999),
        'github_url' => $faker->userName,
        'ip' => $faker->ipv4,
        'is_banned' => false,
        'type' => User::DEFAULT,
    ];
});