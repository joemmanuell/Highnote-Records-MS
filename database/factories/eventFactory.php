<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class eventFactory extends Factory
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
            'eventID' => $this->faker->unique()->numberBetween(1, 2000),
            'artistID' => $this->faker->unique()->numberBetween(1, 2000),
            'eventDate' => $this->faker->date(),
            'eventName' => $this->faker->sentence(),
            'fixedFee' => $this->faker->randomFloat(2, $min = 100, $max = null),
            'doorFee' => $this->faker->randomFloat(2, $min = 100, $max = null),
            'eventOrganizer' => $this->faker->name(),
            'merchandiseSales' => $this->faker->randomFloat(2, $min = 100, $max = null),
        ];
    }
}
