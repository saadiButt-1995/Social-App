<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostShare extends Model
{
    //
    protected $fillable = ['post_id','shared_by','status',];
}
