<?php

namespace App\Modules\Articals\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = [
        'blog_title', 'blog_post', 'password','likes','dislikes','user_id','comment_id'
    	];


    public function user(){
    	return $this->belogsTo('App\User');
    }

    public function comment(){
    	return $this->hasMany('App\Comment');
    }
}
