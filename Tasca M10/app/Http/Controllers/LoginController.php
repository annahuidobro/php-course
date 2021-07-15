<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->method() === 'POST') {
            $user_cookie = cookie('user', $request->get('user'), 60);
            $response = response("{{'user'}} is the user name");

            return redirect('/')->withCookie($user_cookie);
        }
        return view('login');
    }
}
