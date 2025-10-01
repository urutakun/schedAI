<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_name' => $this->faker->word(),          // e.g. "Room A101"
            'room_building' => $this->faker->word(),      // e.g. "Building 1"
            'room_capacity' => $this->faker->numberBetween(20, 30), // e.g. 30
            'room_type' => $this->faker->randomElement(['Lecture', 'Laboratory', 'Seminar']),
        ];
    }
}
