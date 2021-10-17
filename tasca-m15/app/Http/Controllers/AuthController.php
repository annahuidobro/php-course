<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Registro de usuario.
     */
    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = JWTAuth::attempt($request->only('email', 'password'));

        if ($token) {
            return response()->json([
            'success' => true,
            'token' => $token,
            'user' => Auth::user(),
        ], 200);
        } else {
            return response()->json([
            'success' => false,
            'error' => 'Unauthorized',
        ], 401);
        }
    }

    /**
     * Inicio de sesión y creación de token.
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->only('email', 'password'), [
        'email' => 'required|email',
        'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
            'success' => false,
            'error' => $validator->errors(),
        ], 422);
        }

        $token = JWTAuth::attempt($request->only('email', 'password'));

        if ($token) {
            return response()->json([
            'success' => true,
            'token' => $token,
            'user' => Auth::user(),
        ], 200);
        } else {
            return response()->json([
            'success' => false,
            'error' => 'Unauthorized',
        ], 401);
        }
    }

    /**
     * Cierre de sesión (anular el token).
     */
    public function logout()
    {
        $token = JWTAuth::getToken();
        try {
            JWTAuth::invalidate($token);

            return response()->json([
                'success' => true,
            ], 200);
        } catch (JWTException $ex) {
            return response()->json([
                'success' => false,
                'error' => 'Failed logout',
            ], 422);
        }
    }

    /**
     * Obtener el objeto User como json.
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
