<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;


class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        try {
            $token = \JWTAuth::attempt($credentials);
        } catch (JWTException $exception) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        if (!$token) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }

        return response()->json(compact('token'));

    }

    public function logout()
    {
        try {
            \JWTAuth::invalidate();
        } catch (JWTException $exception) {
            return response()->json(['error' => 'could_not_invalidate_token'], 500);
        }
        return response()->json([], 204);

    }

    public function refreshToken(Request $request)
    {
        try {
            $bearerToken = \JWTAuth::setRequest($request)->getToken();
            $token = \JWTAuth::refresh($bearerToken);
        } catch (JWTException $exception) {
            return response()->json(['error' => 'could_not_refresh_token'], 500);
        }
        return response()->json(compact('token'));
    }
}
