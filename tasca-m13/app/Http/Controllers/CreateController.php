<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
         $request->validate([
            'checking_date' => 'required',
            'checkout_date' => 'required',
            'guests' => 'required|integer|min:1|max:15',
            'price' => 'required|integer|min:1|max:150'
        ]);

        $booking = new Booking();

        $booking->checking_date = $request->get('checking_date');
        $booking->checkout_date = $request->get('checkout_date');
        $booking->room_id = $request->get('room_id');
        $booking->guests = $request->get('guests');
        $booking->price = $request->get('price');
        $booking->updated_at = date('Y-m-d');


        $booking->save();

        return redirect('/');
    }

}
