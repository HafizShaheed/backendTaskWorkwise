<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login(){
        $countries = Country::all();
        return view('login')->with('countries', $countries);
    }

    public function signup(SignupRequest $request)
    {
        
        $user = new User();
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->country_id = $request->country;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 'A';
        $user->is_deleted = 'N';
        $user->save();

        return response()->json(['message' => 'Signup successful']);
    }


    public function attempt_login(Request $req){


        if (Auth::attempt(['email' => $req->login_email, 'password' => $req->login_password, 'status' => 'A', 'is_deleted' => 'N'])) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
