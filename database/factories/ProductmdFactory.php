<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productmd>
 */
class ProductmdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'category' => $this->faker->word,
            'serial_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
