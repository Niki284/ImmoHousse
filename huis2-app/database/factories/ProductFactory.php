<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'title' => $this->faker->name(10),
            'price' => $this->faker->randomFloat(1, 50000, 500000),
            'description' => $this->faker->text(100),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
            'rooms' => $this->faker->numberBetween(1, 6),
            'image' => fake()->imageUrl(640, 480, 'cats', true, 'Faker'),
            'type' => $this->faker->randomElement(['Huis', 'Appartement', 'Grond']),
            'size' => $this->faker->numberBetween(50, 500),
        ];
    }
}
