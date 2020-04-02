<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    //
    protected $fillable = [
        'user_id','event_id','status','transaction_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
