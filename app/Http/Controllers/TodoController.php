<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use App\TodoUser;
use App\User;

class TodoController extends Controller
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
        $todos = Todo::all();
        $yourTodos = Todo::where('user_id', '=', Auth::user()->id)->get();
        return view(
            'todo.index',
            compact('todos'),
            compact('yourTodos'));

//        $todos = Todo::orderBy('name', 'desc')->paginate(5);
//        return view('todo.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    public function storeTodoUser(Request $request)
    {
        $user = User::where('name', '=', $request->get('user'))->first();
        if ($user === null) {
            $todoUser = new TodoUser();
                $user_name = $request->get('user');
                $todoUser->user_id = User::where('name', $user_name)->first()->id;
                $todoUser->todo_id = $request->get('todo_id');
            $todoUser->save();
            
            return redirect('/')->with('success', 'User has been added.');
        }
        return redirect('/todo/'.$request->get('todo_id'))->with('error', 'User has already been added to this list.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todo();
            $todo->name = $request->get('name');
            $todo->user_id = $request->get('user_id');
        $todo->save();
        
        return redirect('/')->with('success', 'Todo list has been made.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todo.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->name = $request->get('name');
        $todo->save();

            return response()->json([
                'id' => $todo->id,
                'name' => $todo->name,
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        return back();
    }
}
