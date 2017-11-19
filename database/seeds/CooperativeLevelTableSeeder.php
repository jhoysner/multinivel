<?php

use Illuminate\Database\Seeder;

class CooperativeLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('cooperative_levels')->insert([
            'id' => 0,
            'level_name' => 'admin',
            'tickeck_amount' =>  12.5,
            'ticket_percent' =>  62.5,
            'bussiness_amount' => 0 ,
            'bussiness_percent' => 0,
            'payout_amount' =>  7.5,
            'payout_percent' => 37.5,
        ]);

        DB::table('cooperative_levels')->insert([

            'level_name' => 'Classic',
            'tickeck_amount' =>  12.5,
            'ticket_percent' =>  62.5,
            'bussiness_amount' => 0 ,
            'bussiness_percent' => 0,
            'payout_amount' =>  7.5,
            'payout_percent' => 37.5,
        ]);



        DB::table('cooperative_levels')->insert([
            'level_name' => 'Manager',
            'tickeck_amount' =>  50,
            'ticket_percent' =>  62.5,
            'bussiness_amount' => 5 ,
            'bussiness_percent' => 6.25,
            'payout_amount' =>  25,
            'payout_percent' => 31.25,
        ]);

        DB::table('cooperative_levels')->insert([
            'level_name' => 'C.E.O',
            'tickeck_amount' =>  125,
            'ticket_percent' =>  62.5,
            'bussiness_amount' => 12.5 ,
            'bussiness_percent' => 6.25,
            'payout_amount' =>  62.5    ,
            'payout_percent' => 31.25,
        ]);

        DB::table('cooperative_levels')->insert([
            'level_name' => 'Director',
            'tickeck_amount' =>  312.5,
            'ticket_percent' =>  62.5,
            'bussiness_amount' => 31.25 ,
            'bussiness_percent' => 6.25,
            'payout_amount' =>  156.25,
            'payout_percent' => 31.25,
        ]);
;

        DB::table('cooperative_levels')->insert([
            'level_name' => 'Mentor',
            'tickeck_amount' =>  781.25,
            'ticket_percent' =>  62.5,
            'bussiness_amount' => 78.125,
            'bussiness_percent' => 6.25,
            'payout_amount' =>  390.625,
            'payout_percent' => 31.25,
        ]);

    }
}
