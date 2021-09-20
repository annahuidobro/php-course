<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;

class EditController extends Controller
{
    public function __invoke($id)
    {
        return view('edit', [
            'booking' => Booking::where('id', $id)->first(),
            'rooms' => Room::all(),
        ]);

    }
}
