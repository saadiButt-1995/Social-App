<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'user_id','business_name','owner_name','logo','slogan','category_id','status','is_deleted',
    ];

    public function owner()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Cateogry');
    }

    public function followers()
    {
        return $this->hasMany('App\User', 'business_followers');
    }

    public function subscriptions()
    {
        return $this->hasMany('App\SubscriptionPayment');
    }

    public function events()
    {
        return $this->hasMany('App\Post');
    }

    public function services()
    {
        return $this->hasMany('App\Services');
    }

}
