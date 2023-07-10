<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\music>
 */
class musiccataloguesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   $types = ['Spotify', 'Youtube', 'AppleMusic'];
        return [
            //
            'songID' => $this->faker->unique()->numberBetween(1, 2000),
            'artistID' => $this->faker->unique()->numberBetween(1, 2000),
            'title' => $this->faker->sentence(),
            'platform' => $this->faker->randomElement($types),
            'ratePerStream' => $this->faker->randomFloat(2, $min = 0.1, $max = 0.9),
            'streams' => $this->faker->numberBetween(0, 2000000),
            'productionCost' => $this->faker->randomFloat(2, $min = 100, $max = 20000),
            'distributionCost' => $this->faker->randomFloat(2, $min = 100, $max = 20000),

        ];
    }
}
