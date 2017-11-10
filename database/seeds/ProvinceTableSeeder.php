<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'province' => 'Caracas',
            'country_id' =>  1,
            'zip_code' => 1083,
            'is_capital' => 1,
        ]);

        DB::table('provinces')->insert([
            'province' => 'Ontarios',
            'country_id' =>  2,
            'zip_code' => '0102522',
            'is_capital' => 0,
        ]);

        DB::table('provinces')->insert([
            'province' => 'Brasília',
            'country_id' =>  3,
            'zip_code' => 70040-000,
            'is_capital' =>  1,
        ]);

        DB::table('provinces')->insert([
            'province' => 'Antioquia',
            'country_id' =>  4,
            'zip_code' => 050001,
            'is_capital' => 0,
        ]);

        DB::table('provinces')->insert([
            'province' => 'California',
            'country_id' =>  5,
            'zip_code' =>  91202,
            'is_capital' => 0,
        ]);
    }
}
