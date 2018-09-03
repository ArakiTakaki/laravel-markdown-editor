<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function get()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        var_dump($tasks);
        return view('tasks');
    }
    public function post(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:255'
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
        //
    }
}
