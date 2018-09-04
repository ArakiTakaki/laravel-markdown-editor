<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\User;
use Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(Request $request)
    {
        $userId = Auth::user()->id;
        $tasks = User::find($userId)->tasks()->get();
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function post(Request $request)
    {
        $userId = Auth::user()->id;
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $task = new Task;
        $task->name = $request->name;
        $task->user_id =$userId;
        $task->save();

        return redirect('/task');
    }

    /**
     * @param id number 削除するtodoのprimary-keyを取得する。
     */
    public function delete($id)
    {
        $userId = Auth::user()->id;
        User::find($userId)->tasks()->findOrFail($id)->delete();
        return redirect('/task');
    }
}
