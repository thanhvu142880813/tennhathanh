<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signals extends Model
{
    //
    protected $table = "signals";
    public function categories(){
    	return $this->belongsTo('App\categories','signal_category_id','category_id');
    }

}
