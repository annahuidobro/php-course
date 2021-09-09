<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'coach' => $this->faker->name(),
            'town' => $this->faker->city(),
            'stadium' => $this->faker->colorName(),
            'total_score' => $this->faker->numberBetween(0, 100),
            'shield' => $this->faker->numberBetween(1, 7),
        ];
    }
}
