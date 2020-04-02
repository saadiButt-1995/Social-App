<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventInvites extends Model
{
    protected $fillable = [
        'event_id','invited_user_id','status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'invited_user_id');
    }
}
