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

        // Seeder para el primer nivel
        factory(User::class, 4)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 1,
                    'follower_id' =>  $u->id,
                ]);

            }
        );

        // Seeder para el segundo nivel
        factory(User::class, 4)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 2,
                    'follower_id' =>  $u->id,
                ]);
            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {

                        $user = SponsorFollower::where('sponsor_id', 2)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        );

        // //Seeder para el tercer nivel

        factory(User::class, 4)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 3,
                    'follower_id' =>  $u->id,
                ]);
            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {

                        $user = SponsorFollower::where('sponsor_id', 3)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 3)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 3)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 3)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 3)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        );

        //Cuarto Nivel
        factory(User::class, 4)->create()->each(
            function($u){

                factory(SponsorFollower::class)->create([

                    'sponsor_id' => 4,
                    'follower_id' =>  $u->id,
                ]);
            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {

                        $user = SponsorFollower::where('sponsor_id', 4)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[0]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[1]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[2]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        )->each(

            function($u){
                factory(User::class, 4)->create()->each(
                    function($u, $key) {


                            $user = SponsorFollower::where('sponsor_id', 4)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            $user = SponsorFollower::where('sponsor_id',$user[3]->follower_id)->get();
                            factory(SponsorFollower::class)->create([

                                'sponsor_id' => $user[$key]->follower_id,
                                'follower_id' =>  $u->id,
                            ]);
                    }

                );

            }
        );


    }
}
