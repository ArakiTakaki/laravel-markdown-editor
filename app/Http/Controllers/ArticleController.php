<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Auth;

/**
 * 記事の編集クラス
 */
class ArticleController extends Controller
{
    private $PAGE_MAX_COUNT = 2;

    public function get()
    {
        $articles = Article::paginate($this->PAGE_MAX_COUNT);
        $result = [
            'currentPage' => $articles->currentPage(),
            'nextPageUrl' => $articles->nextPageUrl(),
            'previousPageUrl' => $articles->previousPageUrl(),
            'hasMorePages' => $articles->hasMorePages()
        ];
        for ($i = 1; $i < $articles->count(); $i++) {
            $result[] = [
                'article' => $articles->find($i),
                'lib' => $articles->find($i)->categoryLibs()->get(),
                'lang' => $articles->find($i)->categoryLangs()->all()
            ];
        }
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
