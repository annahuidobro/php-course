<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Team;

class UpdateMatchController extends Controller
{
    public function __invoke(string $id)
    {
        return view('update-match', [
            'match' => Matches::where('id', $id)->first(),
            'teams' => Team::all(),
        ]);

    }
}
