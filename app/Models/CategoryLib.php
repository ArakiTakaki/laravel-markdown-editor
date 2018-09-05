<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryLib extends Model
{
    //
    protected $table = 'category_libs';
    public function articles(){
        return $this->belongsToMany('App\Models\Article');
    }
}
