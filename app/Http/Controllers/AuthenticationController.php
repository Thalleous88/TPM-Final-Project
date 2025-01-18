<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthenticationController extends Controller
{
    function getRegister() {
        return view('register');
    }

    function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => 'required',
            'group_name' => 'required',
            'status' => 'required',
            'wa_number' => 'required',
            'line_id' => 'required',
            'github_id' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'binusian_flazz_card' => 'required|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cv' => 'required|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'non_binusian_card' => 'required|nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => bcrypt($request->password)
            'password' => Hash::make($request->password)
        ]);

        return redirect('/welcome');
    }

    function getLogin() {
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = ([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Cookie::queue('email', Auth::user()->email);
            Log::info(Auth::user()->email.' is login.');
            return redirect('/welcome');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); 
    }
}