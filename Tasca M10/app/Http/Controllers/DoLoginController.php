<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoLoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'user' => 'required | max:50',
            'pasword' => 'required',
        ]);
        echo $request->get('user') . ' you logged in successfully!';
        exit;
    }
}
