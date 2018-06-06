<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $fillable = ['name','year'];
   public function students()
   {
   	return $this->hasMany('App\Student');
   } 
}
