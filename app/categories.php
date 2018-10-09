<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    protected $table = "categories";
    public function signals(){
    	return $this->hasMany('App\signals','category_id','id');
    }
}
