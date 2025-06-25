<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategoryVendor;

class ServiceCategoryVendorSeeder extends Seeder
{
    public function run(): void
    {
        ServiceCategoryVendor::insert([
            [
                'category_id' => 1,
                'vendor_id' => 1,
            ],
            [
                'category_id' => 2,
                'vendor_id' => 1,
            ],
        ]);
    }
}
