<?php

namespace App\Http\Controllers;

use App\Events\DeleteTodo;
use App\Team;
use App\Teamtodo;
use App\User;
use App\Events\AddTodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teams = Team::all();
        $userId = Auth::user()->id;
        return view('team.index',
            compact('teams',
                'userId')
            );
    }

    public function show(Request $request, $id)
    {
        $noTeam = [];
        $users = User::all();
        foreach ($users as $user){
            if(!$user->teams()->where('id', $id)->exists()){
//                $noTeam = $user;
                array_push($noTeam, $user);
            }
        }

        $team = Team::find($id);
        return view('team.show', compact('team', 'noTeam'));
    }

    public function create()
    {
        $userId = Auth::user()->id;
        return view('team.create', compact('userId'));
    }

    public function store(Request $request)
    {
//        Create a new team
        $team = new Team();
            $team->name = $request->get('name');
        $team->save();

//        Get the user id of the user that is currently logged in
        $userId = $request->get('userId');

//        Save the user to the pivot table
        $team->users()->attach($userId);


        return redirect('/team/' . $team->id);
    }

    public function deleteUser($teamId, $userId)
    {
        $team = Team::find($teamId);

        $team->users()->detach($userId);
        return back();
    }

    public function addUser($teamId, $userId)
    {
        $team = Team::find($teamId);

        $team->users()->attach($userId);

        return back();
    }

    public function addTodo(Request $request, $teamId)
    {
        $todo = new Teamtodo();
            $todo->name = $request->get('name');
            $todo->team_id = $teamId;

        if ($todo->save()) {
            event(new AddTodo($todo->name, $teamId));
        }

        return response()->json([
            'id' => $todo->id,
            'name' => $todo->name
        ]);
    }

    public function deleteTodo($id)
    {
        $todo = Teamtodo::find($id);
        $todo->delete();
        event(new DeleteTodo($id));

        return back();
    }

}
