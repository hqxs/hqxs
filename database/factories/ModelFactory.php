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

<<<<<<< HEAD
=======
/** @var \Illuminate\Database\Eloquent\Factory $factory */
>>>>>>> b07241033d05bb0a6ea97d43a53abc38da370ec1
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
<<<<<<< HEAD
        'email' => $faker->safeEmail,
=======
        'email' => $faker->unique()->safeEmail,
>>>>>>> b07241033d05bb0a6ea97d43a53abc38da370ec1
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
