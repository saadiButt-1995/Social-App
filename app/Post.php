<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable  = [
        'user_id','status','post_title','post_description','business_id_tag',
    ];

    public function publisher()
    {
        return $this->belongsTo('App\User');
    }

    public function tagged_business()
    {
        return $this->belongsTo('App\Business');
    }

    public function comments()
    {
        return $this->hasMany('App\PostComment');
    }

    public function images()
    {
        return $this->hasMany('App\PostImages');
    }

    public function videos()
    {
        return $this->hasMany('App\PostVideos');
    }

    public function likes()
    {
        return $this->hasMany('App\PostLike');
    }

    public function shares()
    {
        return $this->hasMany('App\PostShare');
    }

    public function tags()
    {
        return $this->hasMany('App\PostTag');
    }
}
