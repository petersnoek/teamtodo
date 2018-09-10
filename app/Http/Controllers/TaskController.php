<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showAll()
    {
        $task = Task::all();
        return view(
            'todo.index',
            compact('task')
        );
    }

}
