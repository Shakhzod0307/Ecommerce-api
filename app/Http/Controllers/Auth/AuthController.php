<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
          'token'=>$user->createToken($request->email)->plainTextToken
        ]);
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->all());
        $user->password = Hash::make($request->password);
        $user->roles()->attach(2);
        return response()->json([
            'token'=>$user->createToken($request->email)->plainTextToken
        ]);
    }
}
