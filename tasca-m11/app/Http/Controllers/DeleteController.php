<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class DeleteController extends Controller
{
    public function __invoke(string $id)
    {

        $employee = Employee::where('id', $id)->first();

        if ($employee !== null) {
            $employee->delete();
        }

        return redirect('/home');
    }

}
