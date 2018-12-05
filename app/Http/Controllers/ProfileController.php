<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Auth;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($id) {
        if(Auth::check() == true) {
            $user = User::find($id);

            if($user == null) { return redirect()->back(); }

            return view('user.profile')->with(['user' => $user]);
        } else {
            return view('auth.login');
        }
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

        $validatedData = $request->validate([
            'omschrijving' => 'max:75',
            'name' => 'max:50',
            'phone' => 'max:50',
            'linkedin' => 'max:75',
            'twitter' => 'max:75',
            'facebook' => 'max:75'
        ]);

        $user = User::find(Auth::id());

        if(empty($request->confirmPassword) == false) {
            $validatedData = $request->validate([
                'wachtwoord' => 'required',
                'confirmPassword' => 'required|same:newPassword',
            ]);

            if (Hash::check($request->wachtwoord, $user->password) == false) {
                return redirect()->back()->with('errorMessage', 'Het ingevoerde wachtwoord klopt niet.');
            }

            $user->password = Hash::make($request->newPassword);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $profile = Profile::find($user->profile->id);

        if(empty($request->image) == false) {
            $validatedData = $request->validate([
                'image' => 'max:50000|mimes:png,jpg,jpeg',
            ]);

            $file = $request->file('image');
            $file->move(public_path().'/img/profilepictures/', $user->id . '.jpg');
        }

        $profile->phone = $request->phone;
        $profile->linkedin = $request->linkedin;
        $profile->twitter = $request->twitter;
        $profile->facebook = $request->facebook;
        $profile->description = $request->omschrijving;
        $profile->save();

        return redirect()->back()->with('message', 'Je profiel is succesvol aangepast.');
    }
}
