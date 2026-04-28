<?php

namespace Database\Factories;

use App\Models\Billing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Billing>
 */
class BillingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'billing_id' => $this->faker->unique()->numberBetween(7000, 9999),
            'patient_id' => $this->faker->numberBetween(1000, 9999),
            'amount' => $this->faker->randomFloat(2, 50, 5000),
            'billing_date' => $this->faker->dateTimeThisMonth()->format('Y-m-d'),
            'payment_status' => $this->faker->randomElement(['Paid', 'Pending', 'Overdue']),
        ];
    }
}
