<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(string $name = null)
    {
        return "Welcome $name to login page";
    }
}

