<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    public function publisher(){
    	
    	return $this->belongsTo('App\Publisher');
    }
    protected $fillable = ['title','author','publisher_id'];

}
