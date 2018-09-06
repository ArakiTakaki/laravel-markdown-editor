<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Article;
use App\Models\Category\Lib;

/**
 * 記事の編集クラス
 */
class ArticleController extends Controller
{
    private $PAGE_MAX_COUNT = 2;

    public function get($category = null)
    {
        $result;
        if (isset($category)) {
            $result = Lib::where('name', $category);
            if (!$result->exists()) return redirect('/api/articles');
            $result = $result->first()->articles()->paginate($this->PAGE_MAX_COUNT);
        } else{
            $result = Article::paginate($this->PAGE_MAX_COUNT);
        }
        print('<pre>');
        var_dump($result);
        print('</pre>');

        return $result;
    }

    public function find($id)
    {
        return Article::find($id);
    }

    public function edit($id, Request $request)
    {
        $returns = [
            'article' => Article::find($id),
            'libs' => Article::find($id)->categoryLibs(),
            'langs' => Article::find($id)->categoryLangs()
        ];
    }

    public function post(Request $request)
    {
        $id = Article::insertGetId([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'detail' => $request->detail,
            'description' => substr($request->detail, 0, 50),
            'status' => $request->status
        ]);
        return redirect('/article/'.$id);
    }

    public function delete($id)
    {
        Article::destroy($id);
    }

    public function put($id, Request $request)
    {
        $article = Article::find($id);
        // validation
    }
}
