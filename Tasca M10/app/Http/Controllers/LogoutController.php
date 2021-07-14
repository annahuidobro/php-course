<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function __invoke($name = null)
    {
        // TODO: Implement __invoke() method.
        return "Bye bye $name!";
    }
}
