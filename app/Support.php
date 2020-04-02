<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'user_id','title','description','event_id','service_id','business_id','reply',
    ];

    public function chat()
    {
        return $this->hasMany('App\SupportChat');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function business()
    {
        return $this->belongsTo('App\Business');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
