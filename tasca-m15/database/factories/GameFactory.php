<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dice1 = $this->faker->numberBetween(1, 12);
        $dice2 = $this->faker->numberBetween(1, 12);

        return [
            'user_id' => User::all()->random()->id,
            'dice1' => $dice1,
            'dice2' => $dice2,
            'success' => $dice1 + $dice2 === 7
        ];

    }
}
