<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    //
    protected $table = "training";
     public function signals(){
    	return $this->belongsTo('App\signals','signal_id','id');
    }
}
