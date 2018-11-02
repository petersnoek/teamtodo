<?php

namespace App\Http\Controllers;

use App\Team;
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
        return view('team.index',
            compact('teams')
            );
    }

    public function show(Request $request, $id)
    {
        $team = Team::find($id);
        return view('team.show', compact('team'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $team = new Team();
            $team->name = $request->get('name');
        $team->save();

        return redirect('/teams/' . $team->id);
    }

}
