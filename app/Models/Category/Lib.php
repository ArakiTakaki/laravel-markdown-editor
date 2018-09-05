<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    protected $table = 'category_libs';

    public function articles(){
        return $this->belongsToMany('App\models\Article','article_category_lib');
    }

    // App\Models\Category\Lib::find(1)->lang()->get();
    public function lang(){
        return $this->belongsTo('App\Models\Category\Lang');
    }
}