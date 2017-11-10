<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class AccountConfirmation extends Model
{
    protected  $table = "accounts_confirmation";

    protected $fillable = [
        'user_id',
        'phone_confirmation',
        'email_confirmation',
    ];


    public function user()
    {
         return $this->belongsTo('App\User');
    }

}
