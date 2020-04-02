<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportChat extends Model
{
    protected $fillable = [
        'support_id','messages','sent_by','received_by','status',
    ];

}
