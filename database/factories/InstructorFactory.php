<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dept_id' => \App\Models\Department::inRandomOrder()->first()->dept_id,
            'instr_name' => $this->faker->name(),
            'instr_position' => $this->faker->jobTitle(),
        ];
    }
}
