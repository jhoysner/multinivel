<?php

use App\Country;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::create([
                'name' => 'Pedro',
                'middle_name'=> 'Manuel',
                'last_name' => 'Perez',
                'full_name' => 'Pedron Manuel Perez',
                'phone_number' => '0416-123456',
                'level_id' => 1,
                'email' => 'Pedro@gmail.com',
                'password' => bcrypt('123456'),

            ])->countries()->attach(Country::cuntryRandom());


        User::create([
                'name' => 'Jesus',
                'middle_name' => 'Daniel',
                'last_name' => 'Gonzales',
                'full_name' => 'Jesus Daniel Daniel',
                'phone_number' => '0416-654321',
                'level_id' => 2,
                'email' =>  'jesus@gmail.com',
                'password' => bcrypt('123456'),

            ])->countries()->attach(Country::cuntryRandom());


        User::create([
                'name' => 'Ramon',
                'middle_name' => 'Jose',
                'last_name' => 'Perez',
                'full_name' => 'Ramon Jose Perez',
                'phone_number' => '0416-789456',
                'level_id' => 3,
                'email' =>  'Ramon@gmail.com',
                'password' => bcrypt('123456'),

            ])->countries()->attach(Country::cuntryRandom());

        User::create([
                'name' => 'Juan',
                'middle_name' => 'Amtonio',
                'last_name' => 'Mendez',
                'full_name' => 'Juan Antonio Mendez',
                'phone_number' => '0426-5435643',
                'level_id' => 4,
                'email' =>  'Juan@gmail.com',
                'password' => bcrypt('123456'),

            ])->countries()->attach(Country::cuntryRandom());

        User::create([
                'name' => 'Manuel',
                'middle_name' => 'Daniel',
                'last_name' => 'Rivas',
                'full_name' => 'Manuel Daniel Rivas',
                'phone_number' => '0414-4324563',
                'level_id' => 5,
                'email' =>  'Manuel@gmail.com',
                'password' => bcrypt('123456'),

            ])->countries()->attach(Country::cuntryRandom());
    }
}
