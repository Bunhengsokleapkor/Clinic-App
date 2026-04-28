<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'appointment_id' => $this->faker->unique()->numberBetween(5000, 9999),
            'patient_id' => $this->faker->numberBetween(1000, 9999),
            'doctor_id' => $this->faker->numberBetween(1000, 9999),
            'appointment_date' => $this->faker->dateTimeBetween('now', '+2 months')->format('Y-m-d H:i:s'),
            'status' => $this->faker->randomElement(['Scheduled', 'Completed', 'Cancelled', 'No-show']),
        ];
    }
}
