<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the incoming request
        $credentials = $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);

        // Find the user by phone number
        $user = User::where('phone', $credentials['phone'])->first();

        // Check if the user exists and the password is correct
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return response()->json(['error' => 'Invalid phone number or password'], 401);
        }

        // Generate the JWT token
        $token = JWTAuth::fromUser($user);

        // Return the token and user data
        return response()->json([
            'msg' => "User Logged In!",
            'token' => $token,
            'user' => $user,
        ]);
    }
}
