<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','email','password','phone','business_status','user_status','two_factor_authentication','profile_status','is_deleted',
    ];

    protected $hidden = [
        'password',
    ];


    public function followed()
    {
        return $this->belongsToMany('App\Buiness', 'business_followers');
    }

    public function businesses()
    {
        return $this->hasMany('App\Buiness');
    }

    public function blocked()
    {
        return $this->belongsToMany('App\User', 'block_lists', 'user_id', 'blocked_user_id');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function profile()
    {
        return $this->hasOne('App\UserProfile');
    }

    public function mac_addresses()
    {
        return $this->hasMany('App\UserMacAddress');
    }

    public function booked_events()
    {
        return $this->belongsToMany('App\Event', 'event_bookings');
    }
}
