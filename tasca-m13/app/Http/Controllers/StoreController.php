<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'room_id' => 'min: 1| max: 50',
            'guests' => 'required|integer|min:1|max:15',
            'price' => 'required|integer|min:1|max:150'
        ]);
        $booking = Booking::where('id', $request->get('id'))->first();

        if ($booking !== null) {
            $booking->checkin_date = $request->get('checkin_date');
            $booking->checkout_date = $request->get('checkout_date');
            $booking->room_id = $request->get('room_id');
            $booking->guests = $request->get('guests');
            $booking->price = $request->get('price');
            $booking->updated_at = date('Y-m-d');

            $booking->save();

            return redirect('/show/' . $booking->id);
        } else {
            return redirect('/');

        }

    }
}
