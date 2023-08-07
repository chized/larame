<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register
    public function create() {
        return view('users.register');
    }

    //Create new User
    public function store(Request $request){
        $formfields = $request->validate([
            'name' => ['required', 'min:3'],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        //Hash Password
        $formfields['password'] = bcrypt($formfields['password']);

        //Create User
        $user = User::create($formfields);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in Succesfully');
    }

    //Logout user
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }

    //Show ogin form
    public function login() {
        return view('users.login');
    }

    //Aunthenticate and Login User
    public function authenticate(Request $request) {
        $formfields = $request->validate([
            'email' => ['required', 'email'], //Rule::unique('users', 'email'),
            'password' => 'required'
        ]);

        if(auth()->attempt($formfields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now succefully logged in');
        }

        return back()->withErrors(['email' => 'invalid Credentials']);
    }
}

