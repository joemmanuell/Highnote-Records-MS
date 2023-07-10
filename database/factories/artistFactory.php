<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\artist>
 */
class artistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $numberLength = 10; // Specify the desired length of the number
        //$paragraphSize = 3;
        return [
            //
            'artistID' => $this->faker->unique()->numberBetween(1, 2000),
            'artistName' => $this->faker->name(),
            'legalName' => $this->faker->name(),
            'contractID' => $this->faker->unique()->numberBetween(1, 2000),
            'sex' => $this->faker->randomElement(['male', 'female']),
            'age' => $this->faker->numberBetween(1, 99),
            'nationality' => $this->faker->country(),
            'contactDetails' => $this->faker->numerify(str_pad('', $numberLength, '#')),
            'address' => $this->faker->address(),
            'socialMediaHandle' => $this->faker->userName,
            'biography' => $this->faker->sentence(),
        ];
    }
}
