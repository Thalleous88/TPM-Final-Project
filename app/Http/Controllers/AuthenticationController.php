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
    public function getRegister()
    {
        session()->forget(['group_id', 'leader_data', 'member1_data', 'member2_data']);
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'group_name' => 'required|unique:groups',
            'password' => 'required|min:8',
            'status' => 'required|in:binusian,non-binusian',
        ]);

        $group = Group::create([
            'group_name' => $validated['group_name'],
            'password' => Hash::make($validated['password']),
            'is_admin' => false
        ]);

        session(['group_id' => $group->id]);
        session(['status' => $validated['status']]);

        return redirect()->route('getLeaderPage1');
    }

    public function getLeaderPage1()
    {
        return view('register_leader1');
    }

    public function getLeaderPage2()
    {
        return view('register_leader2');
    }

    public function storeLeaderPage1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:participants',
            'wa_number' => 'required',
            'line_id' => 'nullable',
            'github_id' => 'nullable',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
        ]);

        $validated['is_leader'] = true;
        session(['leader_data' => $validated]);
        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }

        return redirect()->route('getLeaderPage2');
    }

    public function storeLeaderPage2(Request $request)
    {
        $validated = $request->validate([
            'cv' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $status = session('status');
        if ($status === 'binusian' && $request->hasFile('binusian_flazz_card')) {
            $validated['binusian_flazz_card'] = $request->file('binusian_flazz_card')->store('cards');
        } else {
            $validated['non_binusian_card'] = $request->file('non_binusian_card')->store('cards');
        }

        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }

        Participant::create(array_merge(session('leader_data'), $validated, ['group_id' => $group_id]));

        return redirect()->route('getMember1Page1');
    }

    public function getMember1Page1()
    {
        return view('register_member1');
    }

    public function getMember1Page2()
    {
        return view('register_member2');
    }

    public function storeMember1Page1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:participants',
            'wa_number' => 'required',
            'line_id' => 'nullable',
            'github_id' => 'nullable',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
        ]);

        session(['member1_data' => $validated]);
        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }

        return redirect()->route('getMember1Page2');
    }

    public function storeMember1Page2(Request $request)
    {
        $validated = $request->validate([
            'cv' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);
        
        $status = session('status');
        if ($status === 'binusian' && $request->hasFile('binusian_flazz_card')) {
            $validated['binusian_flazz_card'] = $request->file('binusian_flazz_card')->store('cards');
        } else {
            $validated['non_binusian_card'] = $request->file('non_binusian_card')->store('cards');
        }

        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }
        Participant::create(array_merge(session('member1_data'), $validated, ['group_id' => $group_id]));

        return redirect()->route('getMember2Page1');
    }

    public function getMember2Page1()
    {
        return view('register_new_member1');
    }

    public function getMember2Page2()
    {
        return view('register_new_member2');
    }

    public function storeMember2Page1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:participants',
            'wa_number' => 'required',
            'line_id' => 'nullable',
            'github_id' => 'nullable',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
        ]);

        session(['member2_data' => $validated]);
        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }

        return redirect()->route('getMember2Page2');
    }

    public function storeMember2Page2(Request $request)
    {
        $validated = $request->validate([
            'cv' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $status = session('status');
        if ($status === 'binusian' && $request->hasFile('binusian_flazz_card')) {
            $validated['binusian_flazz_card'] = $request->file('binusian_flazz_card')->store('cards');
        } else {
            $validated['non_binusian_card'] = $request->file('non_binusian_card')->store('cards');
        }

        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }
        Participant::create(array_merge(session('member2_data'), $validated, ['group_id' => $group_id]));

        session()->forget(['group_id', 'leader_data', 'member1_data', 'member2_data']);

        return redirect()->route('landingpage')->with('success', 'Registration successful!');
    }
}
