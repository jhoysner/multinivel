<?php

use App\Payment;
use App\SponsorFollower;
use App\User;
use Illuminate\Database\Seeder;

class SponsorFollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SponsorFollower::create([
            'sponsor_id' => 1,
             'follower_id' => 2,
         ]);


        Payment::create([

            'follower_id' =>  2,
            'sponsor_id' =>    1,
            'level_id' =>    1,
            'payment_amount' => 5,
            'payment_confirmation' =>  mt_rand(0, 127),
        ]);


        SponsorFollower::create([
            'sponsor_id' => 2,
             'follower_id' => 3,
        ]);


        Payment::create([

            'follower_id' =>  3,
            'sponsor_id' =>    2,
            'level_id' =>    2,
            'payment_amount' => 5,
            'payment_confirmation' =>  mt_rand(0, 127),
        ]);

        SponsorFollower::create([
            'sponsor_id' => 3,
             'follower_id' => 4,
        ]);


        Payment::create([

            'follower_id' =>  4,
            'sponsor_id' =>    2,
            'level_id' =>    3,
            'payment_amount' => 5,
            'payment_confirmation' =>  mt_rand(0, 127),
        ]);

        SponsorFollower::create([
            'sponsor_id' => 4,
             'follower_id' => 5,
        ]);

        Payment::create([

            'follower_id' =>  5,
            'sponsor_id' =>    4,
            'level_id' =>    4,
            'payment_amount' => 5,
            'payment_confirmation' =>  mt_rand(0, 127),
        ]);


        factory(User::class, 3)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 1,
                    'follower_id' =>  $u->id,
                ]);

                factory(Payment::class)->create([

                    'follower_id' =>  $u->id,
                    'sponsor_id' =>    1,
                    'level_id' =>    1,
                    'payment_amount' => 5,
                    'payment_confirmation' =>  mt_rand(0, 127),
                ]);

            }
        );




        factory(User::class, 7)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 2,
                    'follower_id' =>  $u->id,
                ]);

                factory(Payment::class)->create([

                    'follower_id' =>  $u->id,
                    'sponsor_id' =>    2,
                    'level_id' =>    2,
                    'payment_amount' => 5,
                    'payment_confirmation' =>  mt_rand(0, 127),
                ]);
            }
        );

        factory(User::class, 63)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 3,
                    'follower_id' =>  $u->id,
                ]);

                factory(Payment::class)->create([

                    'follower_id' =>  $u->id,
                    'sponsor_id' =>    3,
                    'level_id' =>    3,
                    'payment_amount' => 5,
                    'payment_confirmation' =>  mt_rand(0, 127),
                ]);
            }
        );

        factory(User::class, 255)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 4,
                    'follower_id' =>  $u->id,
                ]);

                factory(Payment::class)->create([

                    'follower_id' =>  $u->id,
                    'sponsor_id' =>    4,
                    'level_id' =>    4,
                    'payment_amount' => 5,
                    'payment_confirmation' =>  mt_rand(0, 127),
                ]);
            }
        );

    }
}
