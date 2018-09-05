<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

/**
 * 記事の編集クラス
 */
class ArticleController extends Controller
{

    public function get($id)
    {
        return Article::find($id);
    }

    public function post(Request $request)
    {
    }

    public function delete($id)
    {
    }

    public function put($id, Request $request)
    {
    }

    public function articles()
    {
        $request->page;
    }
    //
}
