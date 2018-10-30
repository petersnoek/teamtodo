<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use App\UserTeam;
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
}
