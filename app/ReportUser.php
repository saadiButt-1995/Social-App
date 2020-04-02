<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportUser extends Model
{
    protected $fillable = [
        'reported_by_user_id','reported_user_id','status','post_id',
    ];

    
    public function post()
    {
        return $this->belongsTo('App\User', 'post_id');
    }

    public function complain_by()
    {
        return $this->belongsTo('App\User', 'reported_by_user_id');
    }

    public function complain_to()
    {
        return $this->belongsTo('App\User', 'reported_user_id');
    }
}
