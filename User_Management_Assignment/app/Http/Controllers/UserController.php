<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * ROUTING FUNCTIONS
     * 
     * Login User
     * Create User
     * Show Profile of User and UserProfile tables using Inner Join
     * 
     *  */ 
    public function login()
    {
        return view('users.index');
    }
    public function createUser()
    {
        return view('users.create');
    }
    public function showUser()
    {
        return view('users.show', ['user' => Auth::user()]);
    }

    /**
     * API FUNCTIONS
     * 
     * Register User with unique Mobile number, unique Email, unique User ID
     * Validate User Credentials with UserID an Password
     * (Used Laravel UI and auth functionality for authentication)
     * Validate User Credentials with Email and Password (Commented method. Actual Scenario)
     * Logout method invalidating credentials
     * 
     *  */ 

    public function registerUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',// Checks if the Email entered is already taken or not
            'user_id' => 'required|unique:users,user_id', // Checks if the User Id entered is already taken or not
            'mobile_no' => 'required|digits:10|unique:users,mobile_no',// Checks if the Mobile No entered is already taken or not
            'password' => 'required|min:8',
            'address_1' => 'required|max:255',
            'address_2' => 'nullable|max:255',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'pincode' => 'required|digits:6',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'user_id' => $validated['user_id'],
            'mobile_no' => $validated['mobile_no'],
            'password' => Hash::make($validated['password']),
        ]);

        UserProfile::create([
            'user_id' => $user->user_id,
            'address_1' => $validated['address_1'],
            'address_2' => $validated['address_2'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'pincode' => $validated['pincode'],
        ]);

        Auth::login($user);

        return redirect()->route('profile')->with('success', 'Account Created');
    }

    public function validateAccount(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|string',
            'password' => 'required|min:8',
        ]);
        $user = User::where('user_id', $validated['user_id'])->first();
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return back()->with('error', 'Incorrect credentials');
        }
        Auth::login($user);
        return redirect()->route('profile')->with('success', 'Login Successful');
    }

    // Email valdiation

    // public function validateAccountEmail(Request $request)
    // {
    //     $validated = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);
    //     $user = User::where('email', $validated['email'])->first();
    //     if (!$user || !Hash::check($validated['password'], $user->password)) {
    //         return back()->with('error', 'Incorrect credentials');
    //     }
    //     Auth::login($user);
    //     return redirect()->route('profile')->with('success', 'Login Successful');
    // }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
