<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function categoryLibs()
    {
        return $this->belongsToMany('App\models\Category\Lib', 'article_category_lib');
    }

    // App\Models\Article::find(???)->categoryLangGet();
    public function findLang()
    {
        $libs = $this->categoryLibs()->groupBy('lang_id')->get();
        $langs = [];
        foreach($libs as $lib) $langs[] = Category\Lang::find($lib['lang_id']);
        return $langs;
    }
    //whereIn
}
