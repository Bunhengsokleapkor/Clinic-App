<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => $this->faker->unique()->numberBetween(1000, 9999),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'specialization' => $this->faker->randomElement(['Cardiology', 'Neurology', 'Orthopedics', 'Pediatrics', 'Dermatology', 'General Medicine']),
            'schedule' => json_encode([
                'monday' => '9:00 AM - 5:00 PM',
                'tuesday' => '9:00 AM - 5:00 PM',
                'wednesday' => '9:00 AM - 5:00 PM',
                'thursday' => '9:00 AM - 5:00 PM',
                'friday' => '9:00 AM - 5:00 PM',
            ]),
        ];
    }
}
