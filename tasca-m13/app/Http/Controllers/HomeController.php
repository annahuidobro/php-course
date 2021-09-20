<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke()
    {
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format('Y-m-d');

        $bookings = Booking::all();

        $totalGuest = 0;
        $totalBookings = 0;
        $totalBookingsThisWeek = 0;
        $totalPrice = 0;
        foreach ($bookings as $booking) {
            $totalGuest += $booking->guests;
            $totalBookings++;
            if ($booking->checkin_date >= $weekStartDate) {
                $totalBookingsThisWeek++;
            }
            $totalPrice += $booking->price;
        }

        return view('index', [
            'bookings' => $bookings,
            'totalGuest' => $totalGuest,
            'totalBookings' => $totalBookings,
            'totalBookingsThisWeek' => $totalBookingsThisWeek,
            'totalPrice' => $totalPrice,
        ]);
    }
}
