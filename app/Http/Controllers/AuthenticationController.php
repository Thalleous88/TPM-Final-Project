<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthenticationController extends Controller
{
    // Render the registration form
    public function getRegister()
    {
        return view('register');
    }

    // Handle registration logic
    public function register(Request $request)
    {
        // Common validation rules
        $rules = [
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
        ];

        // Additional validation based on status
        if ($request->status === 'binusian') {
            $rules['binusian_flazz_card'] = 'required|image|mimes:jpeg,png,jpg|max:2048';
        } elseif ($request->status === 'non-binusian') {
            $rules['non_binusian_card'] = 'required|image|mimes:jpeg,png,jpg|max:2048';
        }

        $validated = $request->validate($rules);

        // Save participant data
        Participant::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'group_name' => $validated['group_name'],
            'status' => $validated['status'],
            'wa_number' => $validated['wa_number'],
            'line_id' => $validated['line_id'],
            'github_id' => $validated['github_id'],
            'birth_place' => $validated['birth_place'],
            'birth_date' => $validated['birth_date'],
            'cv' => $request->file('cv')->store('uploads', 'public'),
            'binusian_flazz_card' => $request->status === 'binusian' ? $request->file('binusian_flazz_card')->store('uploads', 'public') : null,
            'non_binusian_card' => $request->status === 'non-binusian' ? $request->file('non_binusian_card')->store('uploads', 'public') : null,
        ]);

        return redirect('/welcome')->with('success', 'Registration successful!');
    }

    // Render the login form
    public function getLogin()
    {
        return view('login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Cookie::queue('email', Auth::user()->email);
            Log::info(Auth::user()->email . ' logged in.');

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Handle logout logic
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
