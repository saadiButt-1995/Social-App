<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessFollowers extends Model
{
    protected $fillable = [
        'user_id','business_id','status',
    ];
}
