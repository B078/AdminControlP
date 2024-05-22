<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Usercontroller extends Controller
{
    public function register(Request $request) {
        $incoming_field = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:100']
        ]);

        $incoming_field['password'] = bcrypt($incoming_field['password']);
        $user = User::create($incoming_field);
        auth()->login($user);

        if (auth()->user()) {
            return redirect()->route('panel');
        } else {
            return redirect('/');
        }

    }

    public function login(Request $request) {
        $incoming_field = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['name' => $incoming_field['loginname'], 'password' => $incoming_field['loginpassword']])) {
            $request->session()->regenerate();

            return redirect()->route('panel');
        } else {
            return redirect('/');
        }
        
        
    }
}