<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // Tambahkan ini

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pastikan role super_admin sudah ada
        Role::firstOrCreate(['name' => 'super_admin']);

        if (User::count() == 0) {
            $user = \App\Models\User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);

            $user->assignRole('super_admin');
        }

        $this->call([
            ProductSeeder::class,
            PageConfigSeeder::class,
            LogoSeeder::class,
            SeoSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
