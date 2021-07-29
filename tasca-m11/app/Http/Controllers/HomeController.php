<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'isHome' => true,
        ]);
    }
}
