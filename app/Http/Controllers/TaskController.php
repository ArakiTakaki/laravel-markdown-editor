<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function get()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/task');
    }

    /**
     * @param id number 削除するtodoのprimary-keyを取得する。
     */
    public function delete($id)
    {
        Task::findOrFail($id)->delete();
        return redirect('/task');
    }
}
