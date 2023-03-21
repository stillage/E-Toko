<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email','password'))){
            return new AuthenticationException();
        }

        return [
            'token' => $request->user()->createToken($request->deviceId)->plainTextToken
        ];
    }

    public function user(Request $request) {
        return $request->user();
    }

    public function destroy(Request $request)
    {
        $request->user()->tokens()->where('name', $request->deviceId)->delete();
        return response('', 204);
    }
}
