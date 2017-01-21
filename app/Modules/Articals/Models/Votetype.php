<?php

namespace App\Modules\Articals\Models;

use Illuminate\Database\Eloquent\Model;

class Votetype extends Model
{
    protected $fillable = [
        'votetype'
    	];


   public function vote(){
   		return $this->hasOne('App\Modules\Articals\Models\Vote');
   }
}
