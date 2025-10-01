<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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
            'crs_name' => $this->faker->randomElement([
                    'Introduction to Psychology',
                    'Computer Science 101',
                    'Principles of Economics',
                    'Business Law',
                    'Organic Chemistry',
                    'Philosophy of Mind',
                    'Database Systems',
                    'Linear Algebra',
                    'World History',
                    'Creative Writing',
            ]),
            ];
        }
}
