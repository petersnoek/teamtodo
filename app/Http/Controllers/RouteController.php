<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RouteController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dashboard() {
        if(Auth::check() == true) {
            return view('dashboard');
        } else {
            return view('auth.login');
        }
    }
}
