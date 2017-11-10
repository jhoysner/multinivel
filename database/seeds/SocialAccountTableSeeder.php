<?php

use App\SocialAccount;
use Illuminate\Database\Seeder;

class SocialAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       SocialAccount::create([
                'provider' => 'facebook',
                'provider_id' => 'c796f25b7db96df65beffff72279afd3',
                'gender' =>  'Male',
                'user_link' => 'http://www.jhoysner.org/',
                'user_id' =>  1,
                'avatar' =>  'https://lorempixel.com/640/480/?25401',
                'avatar_original' => 'https://lorempixel.com/640/480/?25401',
                'profile_url' =>  'http://www.jhoysner.org/',
                'token' =>  '26d51d959a7d5168b63c132e67ca2b3973ae07170df2f6f03de0d4a6e226d99d',
        ]);

       SocialAccount::create([
                'provider' => 'facebook',
                'provider_id' => 'c796f25b7db96df65beffff72279afd3',
                'gender' =>  'Male',
                'user_link' => 'http://www.ronny.org/',
                'user_id' =>  2,
                'avatar' =>  'https://lorempixel.com/640/480/?25401',
                'avatar_original' => 'https://lorempixel.com/640/480/?25401',
                'profile_url' =>  'http://www.ronny.org/',
                'token' =>  '54b268714e232d8dc65aabbef8e7f43faeec12d8aa40f787651aa059b3e1e679',
        ]);

       SocialAccount::create([
                'provider' => 'facebook',
                'provider_id' => 'c796f25b7db96df65beffff72279afd3',
                'gender' =>  'Male',
                'user_link' => 'http://www.ramon.org/',
                'user_id' =>  3,
                'avatar' =>  'https://lorempixel.com/640/480/?25401',
                'avatar_original' => 'https://lorempixel.com/640/480/?25401',
                'profile_url' =>  'http://www.ramon.org/',
                'token' =>  'bb94f7e3f2613658c0f79a092e93c4057171b702dc903840b1ec7da99f510a70',
        ]);

       SocialAccount::create([
                'provider' => 'facebook',
                'provider_id' => 'c796f25b7db96df65beffff72279afd3',
                'gender' =>  'Male',
                'user_link' => 'http://www.Juan.org/',
                'user_id' =>  4,
                'avatar' =>  'https://lorempixel.com/640/480/?25401',
                'avatar_original' => 'https://lorempixel.com/640/480/?25401',
                'profile_url' =>  'http://www.Juan.org/',
                'token' =>  '67a48c6922cc2bcd5a414b5ed28b146ff6396aa100cbea6d64a1c53d747e20bf',
        ]);

       SocialAccount::create([
                'provider' => 'facebook',
                'provider_id' => 'c796f25b7db96df65beffff72279afd3',
                'gender' =>  'Male',
                'user_link' => 'http://www.manuel.org/',
                'user_id' =>  5,
                'avatar' =>  'https://lorempixel.com/640/480/?25401',
                'avatar_original' => 'https://lorempixel.com/640/480/?25401',
                'profile_url' =>  'http://www.manuel.org/',
                'token' =>  'a0981da8162eac8db29efc8daf70763832a7c7f8372ff09e7d3237913bd7913b',
        ]);
    }
}
