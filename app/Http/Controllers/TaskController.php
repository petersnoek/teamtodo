<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function create()
    {
        return view('todo.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:200'
        ]);

        Task::create([
            'content' => request('content'),
            'todo_id' => request('todo_id'),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function done(Request $request, $id)
    {
        $task = Task::find($id);
        $task->done = $request->get('done');
        $task->save();

        return response()->json([
           'id' => $task->id,
           'content' => $task->content,
            'done' => $task->done
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $id = $request->get('todo');
        $update = Task::find($request->get('id'));
        $update->content = $request->get('content');
        $update->save();
        return redirect('/todo/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return back();
    }

    public function editAjax(Request $request, $id)
    {
        $task = Task::find($id);
        $task->content = $request->get('name');
        $task->save();
        return response()->json([
            'succes' => 'Updated',
            'error' => 'error',
            'id' => $task->id,
            'content' => $task->content,
        ]);
    }

    public function addUser(Request $request) {
        $validatedData = $request->validate([
            'user' => 'required'
        ]);
    }
}
