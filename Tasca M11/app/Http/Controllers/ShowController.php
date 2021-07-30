<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class ShowController extends Controller
{
    public function __invoke(string $id)
    {
        return view('show', [
            'employee' => Employee::where('id', $id)->first(),
        ]);
    }
}
