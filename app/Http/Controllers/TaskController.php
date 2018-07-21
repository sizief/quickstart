<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks.index', [
        'tasks' => $tasks
    ]);
        //return view("task.index")
    }
}
