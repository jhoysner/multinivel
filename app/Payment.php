<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected  $table = "payments";

    protected $fillable = [
        'follower_id',
        'sponsor_id',
        'level_id',
        'payment_amount',
        'payment_confirmation',
    ];


    public function cooperative_level()
    {
        return $this->belongsTo('App\CooperativeLevel','level_id','id');
    }


    public function follower()
    {
        return $this->belongsTo('App\SponsorFollower','follower_id','follower_id');
    }


    public function sponsor()
    {
        return $this->belongsTo('App\SponsorFollower','sponsor_id','sponsor_id');
    }

}
