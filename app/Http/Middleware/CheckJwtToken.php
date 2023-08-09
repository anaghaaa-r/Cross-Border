<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class CheckJwtToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        if(!$token)
        {
            return response()->json(['error' => 'Authorization header is missing'], 401);
        }

        $jwtSecret = env('JWT_SECRET');

        try {
            $user = JWTAuth::parseToken()->authenticate();
            if(!user)
            {
                
            }
        } catch (\Exception $e) {
            
        }
        return $next($request);

    }
}
