<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProfile()
    {
    	return view('user', ['id'=>Auth::user()->id]);
    }

    public function showChangePasswordForm()
    {
    	return view('auth.changepassword');
    }

    public function changePassword(Request $request)
    {
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully!");
 
    }


    public function showChangeEmailForm()
    {
    	return view('auth.changeemail');
    }

    public function changeEmail(Request $request)
    {
 
        $user = Auth::user();

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp( $user->email, $request->get('new-email') ) == 0){
            //Current email and new email are same
            return redirect()->back()->with("error","New Email cannot be same as your current email. Please choose a different email.");
        }
 
        $validatedData = $request->validate([
            'new-email' => 'required|string|confirmed',
        ]);
 
        //Change Email
        $user->email = $request->get('new-email');
        $user->save();
 
        return redirect()->back()->with("success","Email changed successfully!");
 
    }

    public function getAll()
    {
        $users = User::all();
        return view('auth.allusers', compact('users'));
    }
}
