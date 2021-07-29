<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'first' => 'min:2 | max:50',
            'last' => 'min:2|max:70',
            'incorporation_date' => 'required | date',
            'comments' => 'max:255',
            'comments' => 'max:30',
        ]);

        $employee = Employee::where('id', $request->get('id'))->first();

        if ($employee !== null) {
            $employee->first = $request->get('first');
            $employee->last = $request->get('last');
            $employee->incorporation_date = $request->get('incorporation_date');
            $employee->comments = $request->get('comments');
            $employee->department = $request->get('department');
            $employee->updated_at = date('Y-m-d');

            $employee->save();
        }

        return redirect('/show/' . $request->get('id'));
    }

}


