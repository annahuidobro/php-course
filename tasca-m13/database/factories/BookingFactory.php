<?php

namespace Database\Factories;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $totalGuest = $this->faker->numberBetween(1, 15);
        $remaining_days = $this->faker->numberBetween(1,20);
        $checkin_date = $this->faker->dateTimeInInterval('now', '-3 weeks');
        $checkout_date = Carbon::now()->addDay($remaining_days);

        return [
            'checkin_date' => $checkin_date,
            'checkout_date' => $checkout_date,
            'room_id' => $this->faker->numberBetween(1, 100),
            'guests' => $totalGuest,
            'price' => $totalGuest * $this->faker->randomFloat(2, 19, 58),
        ];
    }
}
