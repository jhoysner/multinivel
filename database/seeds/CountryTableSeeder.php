<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'country' => 'Venezuela',
            'currency_code' =>  'VEF',
            'official_language' => 'Español',
            'nationality' => 'Venezolano',
        ]);

        DB::table('countries')->insert([
            'country' => 'Canada',
            'currency_code' =>  'CAD',
            'official_language' => 'English ',
            'nationality' => 'Canadians',
        ]);

        DB::table('countries')->insert([
            'country' => 'Brazil',
            'currency_code' =>  'BRL',
            'official_language' => 'Portugues',
            'nationality' => 'Brazileño',
        ]);

        DB::table('countries')->insert([
            'country' => 'Colombia',
            'currency_code' =>  'COP',
            'official_language' => 'Español',
            'nationality' => 'Colombiano',
        ]);

        DB::table('countries')->insert([
            'country' => 'United State',
            'currency_code' =>  'USD',
            'official_language' => 'English',
            'nationality' => 'American',
        ]);


    }
}
