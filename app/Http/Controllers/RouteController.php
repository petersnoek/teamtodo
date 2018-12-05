<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class RouteController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dashboard() {
        if(Auth::check() == true) {
            $user = User::find(Auth::id());
            return view('dashboard')->with(['user' => $user]);
        } else {
            return view('auth.login');
        }
    }

    public function profile($id) {
        $user = User::find($id);

        return view('user.profile')->with(['user' => $user]);
    }

    public function settings() {
        if(Auth::check() == true) {
            $user = User::find(Auth::id());
            return view('user.settings')->with(['user' => $user]);
        } else {
            return view('auth.login');
        }
    }
}
