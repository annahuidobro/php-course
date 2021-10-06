<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->only('email', 'password'), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'updated_at' => date('Y-m-d'),
        ]);

        return response()->json(
            [
                'success' => true,
            ],
            200
        );
    }
}
