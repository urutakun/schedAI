<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InstructorAssignment>
 */
class InstructorAssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'instr_id' => \App\Models\Instructor::inRandomOrder()->first()->instr_id,
        'sub_id' => \App\Models\Subject::inRandomOrder()->first()->sub_id,
        'sect_id' => \App\Models\ClassSection::inRandomOrder()->first()->sect_id,
        'semester' => $this->faker->numberBetween(1, 2),
        'year' => $this->faker->year,
        ];
    }
}
