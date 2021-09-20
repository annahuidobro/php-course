<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        return view('show', [
            'booking' => Booking::where('id', $id)->first(),
            'rooms' => Room::all(),
        ]);

    }
}
