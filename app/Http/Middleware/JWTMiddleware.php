<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
{
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            $request->merge(['authenticated_user' => $user]);
        } catch (\Exception $e) {
            return response()->json([
                'code' => '401',
                'message' => 'Unauthorized',
            ], 401);   
        }
        return $next($request);
    }
}