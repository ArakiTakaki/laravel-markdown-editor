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
    private $PAGE_MAX_COUNT = 4;

    public function get(Request $req, $category = null)
    {
        //TODO カテゴリ用のパラメータも作成しておくと楽になるかも。
        //$req->input("key");
        $article = Article::where("status","OPEN")
            ->select("title","description","created_at","updated_at")
            ->orderBy("created_at")
            ->paginate($this->PAGE_MAX_COUNT)
            ->toJson();
        return $article;
    }

    public function findCategory($category){
        $result = Lib::find($category)->articles()->get();
        if (isset($category)){
            return  response()->json($result);
        }
        return response()->json(['error'=>'指定されたカテゴリが存在しませんでした。'],404);
    }

    public function find($id)
    {
        return response()->json(Article::find($id));
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
        $article = Article::find($id);
        if(isset($article)){
            //TODO field
            return response()->json();
        }

        $article.delete();
        //TODO success
        return response()->json();
    }

    public function put($id, Request $request)
    {
        return response()->json(Article::find($id));
    }
}
