<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Make sure to include Hash facade
use Illuminate\Support\Facades\DB; // Include DB facade
class AuthController extends Controller
{
    public function register(Request $request)
    {
   
        
        // Validate the incoming request data
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,user_email',
            'pws' => 'required|string|min:8', // Minimum 8 characters and must be confirmed
        ]);
   // Insert the user in the database using Query Builder
   DB::table('users')->insert([
    'user_name' => $data['username'], // Insert username
    'user_email' => $data['email'], // Insert email
    'pws' => Hash::make($data['pws']), // Hash the password before storing
    'created_at' => now(), // Add created_at timestamp
    'updated_at' => now(), // Add updated_at timestamp
]);

        // Optionally log the user in after registration
        // auth()->login($user);

        return redirect(route('login'))->with(['success_message' => 'User registered successfully']);
    }

    public function login(){
return view('admin.login');
    }
   
    public function login_user(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'pws' => 'required|min:8',
        ]);
    
        // Attempt to find the user by email
        $user = User::where('user_email', $request->input('email'))->first();
    
        // Check if user exists and the password matches
        if ($user && Hash::check($request->input('pws'), $user->pws)) {
            // Log the user in manually
            Auth::login($user);
    
            // Return a JSON response indicating success
            return redirect(route('admin.index'))->with(['success' => true, 'message' => 'Login Successful']);
        } else {
            // Return a JSON response indicating failure
            return redirect(route('login'))->with(['error_login' => false, 'message' => 'Invalid email or password']);
        }
    }
    
    public function dashboard()
    {
        // Return the view for the dashboard
        return view('admin.index'); // Adjust the view path as necessary
    }

    public function logout_user(Request $request)
    {
        // Log the user out
        Auth::logout();

        
    
        // Redirect to the login page with a success message
        return redirect()->route('login')->with('message', 'You have been logged out successfully.');
    }
    public function logout(){
        return view('admin.login');
    }

    
}


