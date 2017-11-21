<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorFollower extends Model
{
    protected  $table = "sponsor_followers";


    protected $fillable = [
        'sponsor_id',
        'follower_id',
    ];


    public function user_sponsor()
    {
        return $this->belongsTo('App\User','sponsor_id', 'id');
    }

    public function user_follower()
    {

        return $this->belongsTo('App\User','follower_id', 'id');
    }

    public function payment_sponsor()
    {
        return $this->hasOne('App\Payment','follower_id','follower_id');
    }


    public function payment_followers()
    {

       return $this->hasMany('App\Payment','sponsor_id','sponsor_id');

    }

    public static function nivelAsignationAfterCreate($user)
    {

        $user_count = 0;


        $userNivel = SponsorFollower::where('sponsor_id', $user)->get()->pluck('follower_id');

        if ($userNivel->count() == 4){

            foreach ($userNivel as  $value) {
                $user_count++;

                $userNivel = SponsorFollower::where('sponsor_id', $value)->get()->pluck('follower_id');

                    foreach ($userNivel as  $value) {

                        $userNivel = SponsorFollower::where('sponsor_id', $value)->get()->pluck('follower_id');
                        if ($userNivel->count() == 4){
                                foreach ($userNivel as  $value) {
                                    $user_count++;
                                    $userNivel = SponsorFollower::where('sponsor_id', $value)->get()->pluck('follower_id');
                                    if ($userNivel->count() == 4){
                                            foreach ($userNivel as  $value) {
                                                $user_count++;
                                                $userNivel = SponsorFollower::where('sponsor_id', $value)->get()->pluck('follower_id');
                                            }
                                    }
                                }
                        }
                         $user_count++;
                    }
            }

        }
        else{

            $user = User::where('id' , $user)->update(['level_id' => 1]);
        }


        if($user_count >= 4 && $user_count < 20)
        {

            $user = User::where('id' , $user)->update(['level_id' => 2]);
        }

        elseif ($user_count >= 20 && $user_count < 84)
        {
            $user = User::where('id' , $user)->update(['level_id' => 3]);
        }
        elseif ($user_count >= 84 &&  $user_count < 340)
        {
            $user = User::where('id' , $user)->update(['level_id' => 4]);
        }
        elseif ($user_count >= 340)
        {
           $user = User::where('id' , $user)->update(['level_id' => 5]);
        }



    }
}
