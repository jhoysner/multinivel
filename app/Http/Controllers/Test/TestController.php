<?php

namespace App\Http\Controllers\Test;


use App\CooperativeLevel;
use App\Country;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Payout;
use App\SponsorFollower;
use App\User;
use Illuminate\Http\Request;



class TestController extends Controller
{

    /**
     * @SWG\Get(
     *   tags={"Test"},
     *   path="/test/user/{userId}",
     *   summary="Find userId Relation",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target User.",
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */
   public function user($id)
    {

        $data  = User::with('countries', 'account_confirmation','payouts','cooperative_level','sponsor','followers','social_account')->get()->find($id);

        return $data;
    }


    /**
     * @SWG\Get(
     *   tags={"Test"},
     *   path="/test/country/{countryId}",
     *   summary="Find countryId Relation",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target country.",
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
    */

    public function country($id)
    {

       $data  = Country::with('provinces', 'users')->get()->find($id);

        return $data;
    }


     /**
     * @SWG\Get(
     *   tags={"Test"},
     *   path="/test/cooperative/{cooperativeId}",
     *   summary="Find cooperative Relation",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target cooperative.",
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function cooperative($id)
    {

        $data  = CooperativeLevel::with('users', 'payments')->get()->find($id);


        return $data;
    }

     /**
     * @SWG\Get(
     *   tags={"Test"},
     *   path="/test/payout/{payoutId}",
     *   summary="Find payout Relation",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target payout.",
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function payout($id)
    {

        $data  = Payout::with('user')->get()->find($id);

         return $data;
    }

    /**
     * @SWG\Get(
     *   tags={"Test"},
     *   path="/test/sponsorfollower/{sponsorfollowerId}",
     *   summary="Find sponsorfollower Relation",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target sponsorfollower.",
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function sponsorfollower($id)
    {

        $data  = SponsorFollower::with('user_sponsor','user_follower','payment_sponsor','payment_followers')->get()->find($id);


        return $data;
    }
}
