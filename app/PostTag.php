<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    //
    protected $fillable = ['post_id','tagged_user_id','status',];
}
