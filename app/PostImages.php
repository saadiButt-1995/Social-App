<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImages extends Model
{
    protected $fillable = [
        'post_id','image','status',
    ];
}
