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
   public function user($id)
    {

        $data  = User::with('countries', 'account_confirmation','payouts','cooperative_level','sponsor','followers','social_account')->get()->find($id);

        return $data;
    }

    public function country($id)
    {

       $data  = Country::with('provinces', 'users')->get()->find($id);

        return $data;
    }

    public function cooperative($id)
    {

        $data  = CooperativeLevel::with('users', 'payments')->get()->find($id);


        return $data;
    }

    public function payout($id)
    {

        $data  = Payout::with('user')->get()->find($id);

         return $data;
    }


    public function sponsorfollower($id)
    {

        $data  = SponsorFollower::with('user_sponsor','user_follower','payment_sponsor','payment_follower')->get()->find($id);


        return $data;
    }
}
