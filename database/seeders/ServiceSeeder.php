<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([
            [
                'category_id' => 1,
                'vendor_id' => 1,
                'title' => 'Tozalash xizmati',
                'description' => 'Uyingizni professional tozalash xizmati',
                'price' => 100000,
                'discount' => 0,
                'address' => 'Toshkent, Chilonzor',
                'latitude' => 41.2995,
                'longitude' => 69.2401,
            ],
            [
                'category_id' => 2,
                'vendor_id' => 1,
                'title' => 'Yuk tashish',
                'description' => 'Shahar ichida yuk tashish xizmati',
                'price' => 150000,
                'discount' => 10,
                'address' => 'Toshkent, Yunusobod',
                'latitude' => 41.3667,
                'longitude' => 69.2817,
            ],
        ]);
    }
}
