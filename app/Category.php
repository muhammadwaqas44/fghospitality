<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function category(){
            return $this->belongsTo('App\Category', 'parent_id', 'id');
    }
}
