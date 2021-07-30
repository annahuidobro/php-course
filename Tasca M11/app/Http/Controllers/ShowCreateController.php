<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ShowCreateController extends Controller
{
    public function __invoke()
    {
        return view('create');

    }

}


