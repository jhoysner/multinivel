<?php

use App\AccountConfirmation;
use App\CooperativeLevel;
use App\Country;
use App\Payment;
use App\Payout;
use App\Province;
use App\SocialAccount;
use App\SponsorFollower;
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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\CooperativeLevel::class, function (Faker\Generator $faker) {

    return [
        'level_name' => $faker->randomLetter,
        'tickeck_amount' =>  $faker->numberBetween($min = 1000, $max = 9000),
        'ticket_percent' =>  $faker->numberBetween($min = 1000, $max = 9000),
        'bussiness_amount' => $faker->numberBetween($min = 1000, $max = 9000),
        'bussiness_percent' => $faker->numberBetween($min = 1000, $max = 9000),
        'payout_amount'=> $faker->numberBetween($min = 1000, $max = 9000),
        'payout_percent'=> $faker->numberBetween($min = 1000, $max = 9000),
    ];
});




$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'middle_name' =>  $faker->name,
        'last_name' =>  $faker->lastName,
        'full_name' => $faker->firstName.' '.$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number'=> $faker->phoneNumber,
        'level_id'=> CooperativeLevel::all()->random()->id,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\AccountConfirmation::class, function (Faker\Generator $faker) {

    return [
        'user_id'=> User::all()->random()->id,
        'phone_confirmation'=> mt_rand(0, 127),
        'email_confirmation'=> mt_rand(0, 127),

    ];
});


$factory->define(App\Country::class, function (Faker\Generator $faker) {

    return [
        'country' => $faker->country,
        'currency_code' =>  $faker->currencyCode,
        'official_language' =>  $faker->languageCode,
        'nationality' => $faker->country,
    ];
});


$factory->define(App\Province::class, function (Faker\Generator $faker) {

    return [
        'province' => $faker->state,
        'country_id' =>  Country::all()->random()->id,
        'zip_code' =>  $faker->numberBetween(100,1000),
        'is_capital' => $faker->numberBetween(0,1),

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


$factory->define(App\Payout::class, function (Faker\Generator $faker) {

    return [
        'user_id' => User::all()->random()->id,
        'payout_amount' => $faker->numberBetween($min = 1000, $max = 9000),
        'payout_confirmation' =>  mt_rand(0, 127),

    ];
});

$factory->define(App\SocialAccount::class, function (Faker\Generator $faker) {

    return [
        'provider' => 'facebook',
        'provider_id' => $faker->md5,
        'gender' =>  $faker->randomElement(['Male','Female']),
        'user_link' =>  $faker->url,
        'user_id' =>   User::all()->random()->id,
        'avatar' =>  $faker->imageUrl,
        'avatar_original' => $faker->imageUrl,
        'profile_url' =>  $faker->url,
        'token' =>  $faker->sha256,

    ];
});
