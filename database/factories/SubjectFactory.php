<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'crs_id'     => \App\Models\Course::inRandomOrder()->first()->crs_id,
            'sub_name'   => $this->faker->words(3, true),          // e.g. "Advanced Database Systems"
            'hours'      => $this->faker->numberBetween(2, 5),     // credit hours
            'year_level' => $this->faker->numberBetween(1, 4),     // year level 1-4
            'semester'   => $this->faker->numberBetween(1, 2),     // semester 1 or 2
        ];
    }
}
