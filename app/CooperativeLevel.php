<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CooperativeLevel extends Model
{
    protected  $table = "cooperative_levels";

    protected $fillable = [
        'level_name',
        'tickeck_amount',
        'ticket_percent',
        'bussiness_amount',
        'bussiness_percent',
        'payout_amount',
        'payout_percent',
    ];


    public function users()
    {
        return $this->hasMany('App\User','level_id');
    }


    public function payments()
    {
        return $this->hasMany('App\Payment','level_id');
    }
}
