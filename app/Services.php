<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'business_id','service_name','description','price','start_time','end_time','status','is_deleted',
    ];

    public function images()
    {
        return $this->hasMany('App\ServiceImage');
    }

    public function reviews()
    {
        return $this->hasMany('App\ServiceReview');
    }
}
