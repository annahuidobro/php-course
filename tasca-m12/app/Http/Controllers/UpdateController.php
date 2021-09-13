<?php

namespace App\Http\Controllers;

use App\Models\Team;

class UpdateController extends Controller
{
    //
    public function __invoke(string $id)
    {

        return view('update', [
            'team' => Team::where('id', $id)->first(),
        ]);

    }
}



