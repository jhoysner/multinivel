<?php

use Illuminate\Database\Seeder;

class AccountConfirmationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('accounts_confirmation')->insert([
            'user_id'=> 1,
            'phone_confirmation'=> mt_rand(0, 127),
            'email_confirmation'=> mt_rand(0, 127),
        ]);

        DB::table('accounts_confirmation')->insert([
            'user_id'=> 2,
            'phone_confirmation'=> mt_rand(0, 127),
            'email_confirmation'=> mt_rand(0, 127),
        ]);

        DB::table('accounts_confirmation')->insert([
            'user_id'=> 3,
            'phone_confirmation'=> mt_rand(0, 127),
            'email_confirmation'=> mt_rand(0, 127),
        ]);

        DB::table('accounts_confirmation')->insert([
            'user_id'=> 4,
            'phone_confirmation'=> mt_rand(0, 127),
            'email_confirmation'=> mt_rand(0, 127),
        ]);

        DB::table('accounts_confirmation')->insert([
            'user_id'=> 5,
            'phone_confirmation'=> mt_rand(0, 127),
            'email_confirmation'=> mt_rand(0, 127),
        ]);


    }
}
