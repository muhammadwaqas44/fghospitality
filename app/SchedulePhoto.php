<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchedulePhoto extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
