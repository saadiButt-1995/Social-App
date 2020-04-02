<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $fillable = ['user_id','address','gender','dob','profession','slogan','description','latram_patram',];
}
