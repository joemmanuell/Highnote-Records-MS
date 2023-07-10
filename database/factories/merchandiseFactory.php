<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class merchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = ['shirt', 'hoodie', 'pants', 'wristband', 'poster', 'hats'];
        return [
            'merchandiseID' => $this->faker->unique()->numberBetween(1, 2000),
            'type' => $this->faker->randomElement($types),
            'quantity' => $this->faker->numberBetween(0, 300),
            'cost' => $this->faker->randomFloat(2, $min = 100, $max = null),
             //
        ];
    }
}
