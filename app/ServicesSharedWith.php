<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesSharedWith extends Model
{
    protected $fillable = [
        'service_id','shared_by','shared_with','status'
    ];
}
