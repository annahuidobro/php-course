<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = DB::table('employees');

        if ($request->get('department') !== null && $request->get('department') !== 'NULL') {
            $query->where('department', '=', $request->get('department'));
        }

        if ($request->get('incorporation_date') !== null) {
            $query->where('incorporation_date', '=', $request->get('incorporation_date'));
        }

        if ($request->get('first') !== null) {
            $query->where('first', 'like','%' . $request->get('first') . '%');
        }

        if ($request->get('last') !== null) {
            $query->where('last', 'like', '%' . $request->get('last') . '%');
        }

        return view('list', [
            'employees' => $query->get(),
            'filter' => [
                'first' => $request->get('first'),
                'department' => $request->get('department'),
            ],
        ]);
    }
}
