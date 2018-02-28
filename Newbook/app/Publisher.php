<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable=['name']; 
    public $timestamps = false;
    public function book(){

    	return $this->hasMany('App\Book');
    
    }

}
