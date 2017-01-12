<?php

namespace App\Modules\Articals\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'user_id','blog_id'
    	];

   public function user(){
   		return $this->belongsTo('App\User');
   }

   public function blog(){
   		return $this->hasOne('App\Blog');
   }
}
