<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
           'name',
           'class_id',
           'city',
           'dob'
       ];
    public function parents()
    {
    	return $this->belongsToMany('App\Parents');
    }  

    public function class()
    {
      return $this->belongsTo('App\Classes');
    } 

    public function checkParents($parentsOfStudent , $requestParents)
    {
       $getParents = $parentsOfStudent->pluck('id');
       if (count($getParents->diff($requestParents)) == 0) {
         return true;
       }
     }


}
