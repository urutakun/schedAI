<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_name' => $this->faker->sentence(3), // e.g. "Annual Meeting"
            'location' => $this->faker->address(),    // e.g. "123 Main St, City, Country"
            'start_time' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'end_time' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
        ];
    }
}
