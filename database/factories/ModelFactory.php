<?php

use App\CooperativeLevel;
use App\User;

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
$autoIncrement = autoIncrement();
$autoincremento = autoIncremento();

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) use ($autoIncrement , $autoincremento) {
    static $password;
    $autoIncrement->next();

    return [
        'id' => $autoIncrement->current(),
        'name' => $faker->name,
        'middle_name' =>  $faker->name,
        'last_name' =>  $faker->lastName,
        'full_name' => $faker->firstName.' '.$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number'=> $faker->phoneNumber,
        'level_id'=>  1,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\SponsorFollower::class, function (Faker\Generator $faker) {

    return [
        'sponsor_id' => User::all()->random()->id,
        'follower_id' =>  User::all()->random()->id,
    ];
});


$factory->define(App\Payment::class, function (Faker\Generator $faker) {

    return [
        'follower_id' => User::all()->random()->id,
        'sponsor_id' =>  User::all()->random()->id,
        'level_id' =>    CooperativeLevel::all()->random()->id,
        'payment_amount' => $faker->numberBetween($min = 1000, $max = 9000),
        'payment_confirmation' =>  mt_rand(0, 127),
    ];
});

function autoIncrement()
{
    for ($i = 5; $i < 1000; $i++) {
        yield $i;
    }
}



function autoIncremento()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}