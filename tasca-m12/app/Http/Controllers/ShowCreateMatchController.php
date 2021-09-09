<?php

namespace App\Http\Controllers;

use App\Models\Team;

class ShowCreateMatchController extends Controller
{
    public function __invoke()
    {
        return view('show-create-match', [
            'teams' => Team::all()
        ]);
    }
}
