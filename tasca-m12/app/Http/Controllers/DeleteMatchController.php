<?php

namespace App\Http\Controllers;

use App\Models\Matches;

class DeleteMatchController extends Controller
{
    public function __invoke(string $id)
    {
        $match = Matches::where('id', $id)->first();

        if ($match !== null) {
            $match->delete();
        }

        return redirect('/home');
    }
}

