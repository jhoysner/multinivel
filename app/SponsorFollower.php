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



    public static function levelUser($userId, $maxLevel, $base) {

        $leveles = self::generateLevels($maxLevel,$base);

        $follewers = self::getFollowersUser($userId);

        foreach ($leveles as $level) {

            if ($follewers >= $level['min'] &&  $follewers < $level['max']) {

                User::where('id' , $userId)->update(['level_id' =>  $level['level']]);

            }
        }
    }

    public static function generateLevels($maxLevel,$base) {

        $leveles = [];

        for ($i = 1; $i <= $maxLevel; $i ++) {

            $leveles[] = [
                'level' => $i,
                'min' => self::generatePow($i - 1, $base),
                'max' => self::generatePow($i, $base)
            ];

        }

        return $leveles;
    }

    public static function generatePow($i , $base) {

        if($i == 0) {
            return 0;
        }

        if($i == 1) {
            return $base;
        }

        return  self::operationPow($base,$i);
    }

    public static function getFollowersUser($userId) {

        $sponsors = SponsorFollower::where('sponsor_id', $userId)->get();

        $total = count($sponsors);

        foreach ($sponsors as $sponsor) {
            $total = $total + self::getFollowersUser($sponsor->follower_id);
        }

        return $total;
    }

    public static function operationPow ($number , $max) {
        $total = 1;

        for($i = 1; $i <= $max; $i ++) {
            $total =  $total * $number ;
        }

        return $total;
    }

}
