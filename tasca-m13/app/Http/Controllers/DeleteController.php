<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class DeleteController extends Controller
{
    public function __invoke(string $id)
    {
        $booking = Booking::where('id', $id)->first();

        if ($booking !== null) {
            $booking->delete();
        }

        return redirect('/');
    }
}

