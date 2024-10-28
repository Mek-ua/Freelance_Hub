<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Fetch all users
    public function index(){
        return User::all();
    }

    // Register a new user
    public function register(Request $request)
    {
        // Validate the incoming request
        $fields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:6'
        ]);

        // Hash the password before saving
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password'])
        ]);

        // Create a token for the new user
        $token = $user->createToken($user->name)->plainTextToken;

        // Return the user and token
        return response()->json([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    // Login an existing user
    public function login(Request $request)
    {
        // Validate the login request
        $fields = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string'
        ]);

        // Fetch the user by email
        $user = User::where('email', $fields['email'])->first();

        // Verify the password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Create a token for the user
        $token = $user->createToken($user->name)->plainTextToken;

        // Return the user and token
        return response()->json([
            'user' => $user,
            'token' => $token
        ], 200);
    }

    // Logout the current user
    public function logout(Request $request)
    {
        // Delete the current user's tokens
        $request->user()->tokens()->delete();

        // Return a success message
        return response()->json([
            'message' => 'You are logged out.'
        ], 200);
    }
}
