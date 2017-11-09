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
        return $this->hasMany('App\Payment','sponsor_id','sponsor_id');
    }

    public function payment_follower()
    {

       return $this->hasMany('App\Payment','follower_id','follower_id');

    }

}
