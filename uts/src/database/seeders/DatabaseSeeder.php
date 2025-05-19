<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed user admin
        $user = \App\Models\User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Admin', 'password' => bcrypt('password')] // Pastikan password disediakan
        );
        

        $user->assignRole('super_admin');

        // Panggil DriverSeeder
        $this->call([
            DriverSeeder::class,
        ]);
    }
}
