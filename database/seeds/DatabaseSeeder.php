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
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // DB::statement('SET FOREIGN_KEYS_CHECKS = 0');

        CooperativeLevel::truncate();
        User::truncate();
        AccountConfirmation::truncate();
        Country::truncate();
        Province::truncate();
        AccountConfirmation::truncate();
        SponsorFollower::truncate();
        Payment::truncate();
        Payout::truncate();
        SocialAccount::truncate();
        DB::table('country_user')->truncate();

        factory(CooperativeLevel::class, 5)->create();
        factory(Country::class, 20)->create();
        factory(Province::class, 20)->create();

        factory(User::class, 10)->create()->each(
            function ($user){
                $country = Country::all()->random()->id;
                $user->countries()->attach($country);
            }
        );

        factory(AccountConfirmation::class, 5)->create();
        factory(SponsorFollower::class, 5)->create();
        factory(Payment::class, 10)->create();
        factory(Payout::class, 10)->create();
        factory(SocialAccount::class, 10)->create();

    }
}
