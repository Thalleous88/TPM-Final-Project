<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participant;
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
            'email' => ['required', 'email', 'unique:participants'],
            'password' => 'required|min:8',
            'group_name' => 'required',
            'status' => 'required|in:binusian,non-binusian', 
            'wa_number' => 'required',
            'line_id' => 'required',
            'github_id' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'cv' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
       
        if ($request->status === 'binusian') {
            $request->validate([
                'binusian_flazz_card' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        } elseif ($request->status === 'non-binusian') {
            $request->validate([
                'non_binusian_card' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
        }
    
        Participant::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'group_name' => $request->group_name,
            'status' => $request->status,
            'wa_number' => $request->wa_number,
            'line_id' => $request->line_id,
            'github_id' => $request->github_id,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'cv' => $request->file('cv')->store('uploads', 'public'),
            'binusian_flazz_card' => $request->file('binusian_flazz_card')?->store('uploads', 'public'),
            'non_binusian_card' => $request->file('non_binusian_card')?->store('uploads', 'public'),
        ]);
    
        return redirect('/welcome');

    }

    function getLogin() {
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
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