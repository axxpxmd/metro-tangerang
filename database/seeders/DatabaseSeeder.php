<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('password123'),
                'role' => 'admin',
                'status' => 'active',
                'phone' => '081234567890',
                'bio' => 'Super Administrator for Metro Tangerang CMS.',
                'birth_date' => '1990-01-01',
            ]
        );
    }
}
