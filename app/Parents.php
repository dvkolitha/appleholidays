<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
	protected $fillable = ['name','gender','dob'];
	protected $table = 'parents';
    public function parents()
    {
    	return $this->belongsToMany('App\Student','parents_id','parents_id');
    } 
  
}
