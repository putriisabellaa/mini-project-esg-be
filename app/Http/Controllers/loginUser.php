<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;

class loginUser extends Controller
{
    //
    public function loginUser(LoginRequest $request)
    {
        try {
            $credentials = $request->only(['email', 'password']);

            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'code' => '401',
                    'message' => 'Unauthorized',
                ], 401);  
            }

            return response()->json([
                'code' => '200',
                'message' => 'Berhasil melakukan login',
                'token' => $token
            ], 200);  

        } catch (\Exception $e) {
            return response()->json([
                'code' => '500',
                'message' => 'Unauthorized',
                'data' =>  $e->getMessage()
            ], 500);  
        }
    }
    public function userData(Request $request){
        try {
            // Ambil user dari JWT token
            $user = JWTAuth::parseToken()->authenticate();
            
            // Pastikan user ditemukan
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }

            return response()->json([
                'success' => true,
                'user' => $user
            ]);
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token invalid or expired'
            ], 401);
        }
    }
}
