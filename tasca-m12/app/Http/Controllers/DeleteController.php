<?php

namespace App\Http\Controllers;

use App\Models\Team;

class DeleteController extends Controller
{
    public function __invoke(string $id)
    {
        $team = Team::where('id', $id)->first();

        if ($team !== null) {
            $team->delete();
        }

        return redirect('/home');
    }
}










