<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventSharedWith extends Model
{
    protected $fillable = [
        'event_id','shared_by','shared_with','status',
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
