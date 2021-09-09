<?php

namespace App\Http\Controllers;

use App\Models\Team;

class ShowController extends Controller
{
    public function __invoke(string $id)
    {
        return view('show', [
            'team' => Team::where('id', $id)->first(),
        ]);
    }
}
