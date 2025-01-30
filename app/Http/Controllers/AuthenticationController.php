<?php

namespace App\Http\Controllers;

use App\Models\Group;
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
            'name' => 'required',
            'password' => 'required',
        ]);

        $group = Group::where('group_name', $request->input('name'))->first();

        if ($group && Hash::check($request->input('password'), $group->password)) {
            $request->session()->regenerate();
            Cookie::queue('group_id', $group->id);
            return redirect('/');
        }

        return back()->withErrors([
            'login_error' => 'Group with this name was not found on our records.',
        ])->onlyInput('name');
    }

    // Handle logout logic
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }

    public function getParticipantAdmin()
    {
        return view('admin_participant'); 
    }

    public function viewPage()
    {
        return view('admin_participant');
    }

    // Admin Logics

    public function getLoginAdmin()
    {
        return view('admin_login');
    }

    public function loginAdmin(Request $request)
    {   
        $credentials = $request->validate([
            'group_name' => 'required',
            'password' => 'required',
        ]);

        $admin = Group::where('group_name', $request->input('group_name'))->first();

        if ($admin && Hash::check($request->input('password'), $admin->password)
            ) {
            $request->session()->regenerate();
            Cookie::queue('group_id', $admin->id);
            return redirect('/admin/participant');
        }

        return back()->withErrors([
            'login_error' => 'Invalid admin credentials.',
        ])->onlyInput('group_name');
    }

    public function getRegisterAdmin()
    {   
        return view('admin_register'); 
    }

    // Admin registration
    public function registerAdmin(Request $request)
    {   
        $validated = $request->validate([
            'group_name' => 'required|unique:groups',
            'password' => 'required|min:8',
        ]);

        Group::create([
            'group_name' => $validated['group_name'],
            'password' => Hash::make($validated['password']),
            'is_admin' => true
        ]);

        return redirect('/admin/login')->with('success', 'Admin registration successful!');
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Cookie::queue(Cookie::forget('group_id'));

        return redirect('/admin/login')->with('success', 'Logged out successfully!');
    }
}
