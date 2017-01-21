<?php

namespace App\Modules\Articals\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = [
        'blog_title', 'blog_post','likes','dislikes','user_id'
    	];


    public function user(){
    	return $this->belogsTo('App\User');
    }

    public function comment(){
    	return $this->hasMany('App\Modules\Articals\Models\Comment');
    }

    public function vote(){
    	return $this->hasMany('App\Modules\Articals\Models\Vote');
    }

}
