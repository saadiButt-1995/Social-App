<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name','email','password','role_id','status',
    ];

    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
}
