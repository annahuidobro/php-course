<?php

namespace App\Http\Controllers;

use App\Models\Room;

class ShowCreateController extends Controller
{
    public function __invoke()
    {
        return view('create', [
            'rooms' => Room::all(),
        ]);
    }
}
