<?php

namespace Database\Factories;

use App\Models\Matches;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matches::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local_team_id' => $this->faker->numberBetween(1, 5),
            'local_goals' => $this->faker->numberBetween(0, 10),
            'visitor_team_id' => $this->faker->numberBetween(1, 5),
            'visitor_goals' => $this->faker->numberBetween(0, 10),
            'date' => $this->faker->date

        ];
    }
}
