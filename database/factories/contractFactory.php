<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contract>
 */
class contractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'contractID' => $this->faker->unique()->numberBetween(1, 2000),
            'artistID' => $this->faker->unique()->numberBetween(1, 2000),
            'startDate' => $this->faker->date(),
            'endDate' => $this->faker->date(),
            'royaltyRate' => $this->faker->randomFloat(2, $min = 0.1, $max = 0.9),
            'advanceFee' => $this->faker->randomFloat(2, $min = 10000, $max = null),
            'eventCut' => $this->faker->randomFloat(2, $min = 0.1, $max = 0.9),
            'merchandiseCut' => $this->faker->randomFloat(2, $min = 0.1, $max = 0.9),
        ];
    }
}
