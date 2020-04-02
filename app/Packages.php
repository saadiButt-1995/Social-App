<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = [
        'name','price','status','duration',
    ];

    public function subscriptions()
    {
        $this->hasMany('App\SubscriptionPayment');
    }
}
