<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName() . $this->faker->numberBetween(1,20),
            'description' => $this->faker->text(),
            'number' => $this->faker->numberBetween(100, 600),
            'occupation_limit' => $this->faker->numberBetween(1, 15),
        ];
    }
}
