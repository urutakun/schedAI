<?php

namespace Database\Seeders;

use App\Models\InstructorAssignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstructorAssignment::factory()->count(10)->create();
    }
}
