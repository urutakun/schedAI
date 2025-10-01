<?php

namespace Database\Seeders;

use App\Models\ClassSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClassSection::factory()->count(10)->create();
    }
}
