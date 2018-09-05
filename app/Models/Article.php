<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function categoryLibs(){
        return $this->belongsToMany('App\Models\CategoryLib');
    }
    //
}
