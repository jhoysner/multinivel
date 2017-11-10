<?php

use App\Payout;
use Illuminate\Database\Seeder;

class PayoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payout::create([
                'user_id' => 1,
                'payout_amount' => '7.5',
                'payout_confirmation' =>  mt_rand(0, 127),

            ]);

        Payout::create([
                'user_id' => 2,
                'payout_amount' => '25',
                'payout_confirmation' =>  mt_rand(0, 127),

            ]);

        Payout::create([
                'user_id' => 3,
                'payout_amount' => '62.5',
                'payout_confirmation' =>  mt_rand(0, 127),

            ]);


        Payout::create([
                'user_id' => 4,
                'payout_amount' => '156.25',
                'payout_confirmation' =>  mt_rand(0, 127),

            ]);


        Payout::create([
                'user_id' => 5,
                'payout_amount' => '390.625',
                'payout_confirmation' =>  mt_rand(0, 127),

            ]);
    }
}
