<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::insert(
          [
            [
              'id' => 'admin002',
              'first_name' => 'Test',
              'last_name' => 'User',
              'role' => 'admin',
              'email' =>  'test1@example.com',
              'password' => Hash::make('test@123')
            ],
            // [
            //   'name' => 'Batman Boi',
            //   'email' => 'batman@gotham.com',
            //   'password' => 'batman@123'
            // ]
          ]
      );
    }
}
