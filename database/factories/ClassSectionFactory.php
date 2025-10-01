<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassSection>
 */
class ClassSectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'crs_id' => \App\Models\Course::inRandomOrder()->first()->crs_id,
            'sect_name' => $this->faker->word,
            'year_level' => $this->faker->numberBetween(1, 4),
        ];
    }
}
