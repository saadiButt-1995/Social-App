<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'business_id','name','description','latitude','longitude','image','status','event_date','event_time','price','created_by','shared_status','is_deleted',
    ];

    public function business()
    {
        return $this->belongsTo('App\Business');
    }

    public function bookings()
    {
        return $this->hasMany('App\EventBooking');
    }

    public function interested()
    {
        return $this->hasMany('App\EventFavorite');
    }

    public function event_invites()
    {
        return $this->hasMany('App\EventInvites');
    }
    public function shares()
    {
        return $this->hasMany('App\EventSharedWith');
    }

}
