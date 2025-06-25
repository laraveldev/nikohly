<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'user_id' => 1,
            'name' => 'Test Vendor',
            'phone' => '+998901234567',
            'email' => 'vendor@example.com',
            'location' => 'Toshkent',
            'description' => 'Test vendor uchun tavsif',
        ]);
    }
}
