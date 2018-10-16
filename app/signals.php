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

    public static function getCategoryOption($parentId = 0, $currentId = 0, $str = '', $exclude = 0) {
        $html = '';
        $result = self::query();
        if ($exclude != 0) {
            $cate = self::find($exclude);
            if($cate){
                $ids = [$cate->id];
                $children = $cate->children()->get();
                if ($children) {
                    foreach ($children as $key => $value) {
                        $ids[] = $value->id;
                    }
                }
                $result->whereNotIn('id', $ids);
            }
        }
        $result = $result->where('signal_category_id', $parentId)->get();
        foreach ($result as $item) {
            $name = $str.$item->name;

            if($currentId == $item->id) {
                $selected = 'selected = "selected"';
            } else {
                $selected = '';
            }
            $html .= '<option ' .$selected. 'value="' . $item->id . '">' . $name . '</option>';
            $html .= self::getCategoryOption($item->id, $currentId, $str.'|--');
        }
        return $html;
    }
}
