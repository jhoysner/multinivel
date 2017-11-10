<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected  $table = "payouts";

    protected $fillable = [
        'user_id',
        'payout_amount',
        'payout_confirmation',
    ];


    public function user(){

        return $this->belongsTo('App\User');
    }
}
