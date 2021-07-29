<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function __invoke(string $id)
    {

        return view('update', [
            'employee' => Employee::where('id', $id)->first(),
        ]);

    }
}

