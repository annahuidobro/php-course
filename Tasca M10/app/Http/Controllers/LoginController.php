<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __invoke($name = null)
    {
    // TODO: Implement __invoke($name) method.
        return "Please $name access your credentials to Login";
}
}
