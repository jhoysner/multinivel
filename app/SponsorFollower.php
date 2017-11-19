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

    public static function nivelAsignation($user)
    {

        $userNivel = SponsorFollower::where('sponsor_id', $user)->get()->pluck('follower_id');

        if ($userNivel->count() == 4){

            $user = User::findOrFail($user)->update(['level_id' => 2]);

        }

    }

}
