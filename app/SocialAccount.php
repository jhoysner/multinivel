<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected  $table = "social_account";

    protected $fillable = [
        'provider',
        'provider_id',
        'gender',
        'user_link',
        'user_id',
        'avatar',
        'avatar_original',
        'profile_url',
        'token',
    ];


    public function user()
    {

        return $this->belongsTo('App\User');
    }
}
