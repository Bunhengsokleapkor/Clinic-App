<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inventory_id' => $this->faker->unique()->numberBetween(1000, 9999),
            'item_name' => $this->faker->randomElement(['Aspirin', 'Ibuprofen', 'Bandages', 'Thermometer', 'Stethoscope', 'Syringes', 'Antibiotics', 'Vitamins']),
            'quantity' => $this->faker->numberBetween(10, 500),
            'expiration_date' => $this->faker->dateTimeBetween('+1 month', '+2 years')->format('Y-m-d'),
        ];
    }
}
