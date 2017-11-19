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

        factory(SponsorFollower::class)->create([
            'sponsor_id' => 1,
            'follower_id' => 2,
        ]);


        $userCount = 300;

        function autoIncremento($userCount)
        {
            for ($i = 2; $i <$userCount; $i++) {
                yield $i;
            }
        }


        $autoIncremento = autoIncremento($userCount);

        factory(User::class, $userCount)->create()->each(
            function($u) use ($autoIncremento) {
                for ($i=1; $i <= 4 ; $i++) {
                    $autoIncremento->next();

                    if ($autoIncremento->current() != null) {
                        factory(SponsorFollower::class)->create([

                            'sponsor_id' => $u->id,
                            'follower_id' => $autoIncremento->current(),
                        ]);
                    }
                }
            }
        );


    }
}
