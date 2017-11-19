<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'full_name',
        'email',
        'password',
        'phone_number',
        'level_id',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function cooperative_level()
    {
       return $this->belongsTo('App\CooperativeLevel','level_id');
    }


    public function social_account()
    {
        return $this->hasOne('App\SocialAccount');
    }

    public function account_confirmation()
    {
        return $this->hasOne('App\AccountConfirmation');
    }

    public function payouts()
    {
        return $this->hasMany('App\Payout');
    }

    public function countries()
    {
        return $this->belongsToMany('App\Country');
    }


    public function sponsor()
    {
        return $this->hasOne('App\SponsorFollower','follower_id', 'id');
    }

    public function followers()
    {
        return $this->hasMany('App\SponsorFollower','sponsor_id','id');
    }

    public static function exisPaymentFollower($user){

        foreach ($user->followers as  $follower) {
            if ($follower->payment_sponsor) {
                return true;
            }
            return false;
        }
    }


}

