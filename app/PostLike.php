<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    //
    protected $fillable =['post_id','user_id','status',];
}
