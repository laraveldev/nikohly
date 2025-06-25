<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    public function run(): void
    {
        ServiceCategory::insert([
            ['name' => 'Toza xizmatlar'],
            ['name' => 'Transport'],
            ['name' => 'Taʼlim'],
        ]);
    }
}
