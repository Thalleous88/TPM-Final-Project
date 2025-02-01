<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
            $validated['binusian_flazz_card'] = $request->file('binusian_flazz_card')->store('public/cards');
        } else {
            $validated['non_binusian_card'] = $request->file('non_binusian_card')->store('public/cards');
        }

        $group_id = session('group_id');
        if (!$group_id) {
            Log::error('Session group_id is missing before inserting participant.');
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }

        Participant::create(array_merge(session('leader_data'), $validated, [
            'group_id' => $group_id,
            'is_leader' => true, // Explicitly set is_leader to true for leader
        ]));

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
            $validated['binusian_flazz_card'] = $request->file('binusian_flazz_card')->store('public/cards');
        } else {
            $validated['non_binusian_card'] = $request->file('non_binusian_card')->store('public/cards');
        }

        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }
        Participant::create(array_merge(session('member1_data'), $validated, [
            'group_id' => $group_id,
            'is_leader' => false, // Set is_leader to false for member
        ]));

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
            $validated['binusian_flazz_card'] = $request->file('binusian_flazz_card')->store('public/cards');
        } else {
            $validated['non_binusian_card'] = $request->file('non_binusian_card')->store('public/cards');
        }

        $group_id = session('group_id');
        if (!$group_id) {
            return redirect()->route('getRegister')->withErrors(['error' => 'Session expired, please restart registration.']);
        }

        Participant::create(array_merge(session('member2_data'), $validated, [
            'group_id' => $group_id,
            'is_leader' => false, // Set is_leader to false for member
        ]));

        session()->forget(['group_id', 'leader_data', 'member1_data', 'member2_data']);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function getLogin()
    {
        return view('login');
    }

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
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'login_error' => 'Group with this name was not found on our records.',
        ])->onlyInput('name');
    }

    public function getUserDashboard()
    {
        $group_id = Cookie::get('group_id');
        
        if (!$group_id) {
            return redirect()->route('login')->withErrors(['error' => 'Please login first']);
        }

        $group = Group::with(['participants' => function($query) {
            $query->where('is_leader', true);
        }])->find($group_id);

        if (!$group) {
            return redirect()->route('login')->withErrors(['error' => 'Group not found']);
        }

        return view('dashboard', [
            'group' => $group,
            'leader' => $group->participants->first()
        ]);
    }

    public function getLoginAdmin()
    {
        return view('admin_login');
    }

    // Admin login

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
    }

    public function getRegisterAdmin()
    {
        return view('admin_register');
    }

   

    public function getParticipantAdmin() {
        $groups = Group::all(); // Fetch groups with participant count
        return view('admin_participant', compact('groups'));
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
        return redirect('loginAdmin')->with('success', 'Logged out successfully!');
    }

    public function participantEdit($group_id)
    {
        // Fetch participants for the group
        $participants = Participant::where('group_id', $group_id)
        ->where('is_leader', 1)
        ->get();

        // Pass the $group_id and $participants to the view
        return view('edit_team', [
            'group_id' => $group_id,
            'participants' => $participants,
        ]);
    }

    public function participantUpdate(Request $request, $group_id)
    {
        // Fetch participants for the group
        $participants = Participant::where('group_id', $group_id)
            ->where('is_leader', 1)
            ->get();
    
        if ($participants->isEmpty()) {
            return redirect()->route('participantEdit', $group_id)->with('error', 'Group not found.');
        }
    
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:participants,email,' . $participants->first()->id,
            'wa_number' => 'required',
            'line_id' => 'nullable',
            'github_id' => 'nullable',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
        ]);
    
        // Update each participant
        foreach ($participants as $participant) {
            $participant->update([
                'name' => $request->name,
                'email' => $request->email,
                'wa_number' => $request->wa_number,
                'line_id' => $request->line_id,
                'github_id' => $request->github_id,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
            ]);
        }
    
        return redirect()->route('participantAdmin')->with('success', 'Team updated successfully.');
    }

    public function participantDelete($group_id) {
        $participants = Participant::find($group_id);
        
        if (!$participants) {
            return redirect()->back()->with('error', 'Group not found.');
        }
    
        $participants->delete();
    
        return redirect()->back()->with('success', 'Group deleted successfully.');
    }
}
