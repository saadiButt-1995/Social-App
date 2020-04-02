<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    protected $fillable = [
        'user_id','friend_id','status',
    ];
}
