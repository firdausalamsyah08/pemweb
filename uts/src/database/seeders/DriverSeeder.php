<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    public function run(): void
    {
        Driver::create([
            'name' => 'Supir Satu',
            'email' => 'supir1@example.com',
            'phone_number' => '081234567890',
            'license_number' => 'SIM123456',
            'address' => 'Jl. Raya No. 1',
        ]);

        Driver::create([
            'name' => 'Supir Dua',
            'email' => 'supir2@example.com',
            'phone_number' => '081298765432',
            'license_number' => 'SIM654321',
            'address' => 'Jl. Utama No. 2',
        ]);
    }
}
