
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassportController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $data =[
            'email'=> $request->email,
            'password'=> $request->password
        ];

        $user = User::where('email', $request->get('email'))->first();
        if (null === $user) {
            return response()->json(['error'=>'Unauthorzed',401]);
        }

        if (!Hash::check($request->get('password'), $user->password)) {
            return response()->json(['error'=>'Unauthorzed',401]);
        }

        $token= $user->createToken('Personal Access Token')->accessToken;
        return response()->json(['token'=>$token,200]);

    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Personal Access Token')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $token = Auth::user()->token();
        $token->revoke();
        return response()->json([
            'message'=>'Successfully loged out'
        ]);
    }
}