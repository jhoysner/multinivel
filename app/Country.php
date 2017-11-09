<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected  $table = "countries";

    protected $fillable = [
        'country',
        'courrency_code',
        'officil_language',
        'nationality',
    ];


    public function provinces()
    {

         return $this->hasMany('App\Province');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
