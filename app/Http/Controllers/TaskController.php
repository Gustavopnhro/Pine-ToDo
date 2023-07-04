<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;


class TaskController extends Controller
{
    public function index(){
        return view ('home');
    }

    public function create(Request $request){
        $userId = auth()->user()->id;
        $categories = Category::where('user_id', $userId)->get();
        
        return view('tasks/create', ['categories' => $categories]);
    }

    public function edit(Request $request){
        $userId = auth()->user()->id;
        $task = Task::find($request->id);
        $categories = Category::where('user_id', $userId)->get();
        
        return view('tasks/edit', ['task' => $task, 'categories' => $categories]);

    }

    public function delete(Request $request){
       
        $taskDb = Task::where('id', '=', $request->id)->delete();
        return redirect(route('home'));
    }

    public function createAction(Request $request){
        $userId = auth()->user()->id;
        $task = $request->only(['title', 'description', 'category_id', 'due_date']);
        $task['user_id'] = $userId;
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }

    public function editAction(Request $request){
        $task = $request->only(['id', 'title', 'description', 'category_id', 'due_date', 'is_done']);

        if(!$task){
            return "Erro de task";
        }
        $taskDb = Task::where('id', '=', $request->id)->update($task);
        return redirect(route('home'));

    }

    public function deleteAction(Request $request){
        $taskDb = Task::where('id', '=', $request->id);

        return $taskDb;
    }

    public function update(Request $request){
        $task = Task::findOrFail($request->taskId);
        $task->is_done = $request->status;
        $task->save();

        return['success' => true];
    }
}
