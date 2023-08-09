<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    // login
    public function adminLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();

            if($user->isAdmin)
            {
                $role = 'Admin';
                // $token = JWTAuth::fromUser($user);
                
                return response()->json([
                    'statusCode' => 201,
                    'status' => true,
                    'message' => 'Logged in successfully as admin',
                    'currentusername' => $user->username,
                    'role' => $role,
                    // 'token' => $token
                ], 201);
            }
            else
            {
                $role = 'User';

                return response()->json([
                    'statusCode' => 401,
                    'status' => false,
                    'message' => 'Access denied, not authorized as admin',
                    'role' => $role
                ], 401);
            }
        }
        else
        {
            return response()->json([
                'statusCode' => 401,
                'status' => false,
                'message' => 'Invalid Credentials'
            ]);
        }
    }


    // logout
    public function adminLogout()
    {
        try {
            // $user = JWTAuth::parseToken()->authenticate();
            // JWTAuth::parseToken()->invalidate();

            Auth::logout();

            return response()->json([
                'statusCode' => 200,
                'status' => true,
                'message' => 'Successfully logged out',
            ], 200);
        } catch (\Exception $e) {
            
            return response()->json([
                'statusCode' => 500,
                'status' => false,
                'message' => 'Already Logged Out/Error logging out',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }


}
