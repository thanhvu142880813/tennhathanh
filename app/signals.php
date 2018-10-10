<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signals extends Model
{
    //
    protected $table = "signals";
    protected $fillable = ['name', 'number', 'content', 'category_id','slug'];
    public function categories(){
    	return $this->belongsTo('App\categories','category_id','id');
    }
}
