<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesReview extends Model
{
    protected $fillable = [
        'service_id','user_id','rating','feedback','status',
    ];
}
