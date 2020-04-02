<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPayment extends Model
{
    //
    protected $fillable = [
        'transaction_id','business_id','payment','date','expiry_date','status','package_id',
    ];

    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }
}
