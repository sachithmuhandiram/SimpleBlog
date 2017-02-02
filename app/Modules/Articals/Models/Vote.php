<?php

namespace App\Modules\Articals\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'post_id', 'user_id','type_id'
    	];

    public $timestamps = false;

   public function votetype(){
   		return $this->hasOne('App\Modules\Articals\Models\Votetype');
   }

   public function blog(){
   		return $this->hasOne('App\Modules\Articals\Models\Blog');
   }

    public function user(){
   		return $this->belogsTo('App\User');
   }
}
