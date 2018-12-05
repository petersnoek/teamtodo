<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
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

    public function save(Request $request) {
        // $profile = Profile::find($user->profile->id);
        //
        // $profile->save();

        return redirect()->back()->with('message', 'Je profiel is succesvol aangepast.');
    }
}
