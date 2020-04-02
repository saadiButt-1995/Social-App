<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventFavourite extends Model
{
    protected $fillable = [
        'user_id','event_id','status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
