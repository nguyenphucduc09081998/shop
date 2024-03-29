<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        //
        'username' => $faker->userName,
        'name' => $faker->password,
        'name' => $faker->name,
    ];
});
