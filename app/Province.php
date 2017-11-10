<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected  $table = "provinces";

    protected $fillable = [
        'province',
        'country_id',
        'zip_code',
        'is_capital',
    ];

    public function country()
    {

        return $this->belongsTo('App\Country');
    }
}
