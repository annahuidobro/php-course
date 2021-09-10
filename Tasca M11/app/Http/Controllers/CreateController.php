<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'first' => 'min:2 | max:50',
            'last' => 'min:2|max:70',
            'incorporation_date' => 'required | date',
            'comments' => 'max:255',
            'department' => 'max:30',
        ]);

        $employee = new Employee();

        $employee->first = $request->get('first');
        $employee->last = $request->get('last');
        $employee->incorporation_date = $request->get('incorporation_date');
        $employee->comments = $request->get('comments');
        $employee->department = $request->get('department');
        $employee->updated_at = date('Y-m-d');

        $employee->save();


      //  return redirect('/home' . $request->get('id'));
        return redirect()->route('show',['id'=>$request->id]);
    }

}



