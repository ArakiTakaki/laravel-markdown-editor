<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    protected $table = 'category_langs';

    // App\Models\Category\Lang::find(1)->libs()->get();
    public function libs(){
        return $this->hasMany('App\Models\Category\Lib');
    }
}
