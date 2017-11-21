<?php

use App\User;
use App\Payment;
use App\SponsorFollower;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorfollowers = SponsorFollower::all();


        foreach ($sponsorfollowers as  $sponsorfollower) {


                Payment::create([
                    'follower_id' =>   $sponsorfollower->follower_id,
                    'sponsor_id' =>    $sponsorfollower->sponsor_id,
                    'level_id' =>    1,
                    'payment_amount' => 5,
                    'payment_confirmation' =>  mt_rand(0, 127),
                ]);

        }
    }
}
