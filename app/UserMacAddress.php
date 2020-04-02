<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMacAddress extends Model
{
    //
    protected $fillable = [
        'user_id','mac_address','status',
    ];
}
