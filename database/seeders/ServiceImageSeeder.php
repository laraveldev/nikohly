<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceImage;

class ServiceImageSeeder extends Seeder
{
    public function run(): void
    {
        ServiceImage::insert([
            [
                'service_id' => 1,
                'image_url' => 'https://example.com/tozalash.jpg',
            ],
            [
                'service_id' => 2,
                'image_url' => 'https://example.com/yuk-tashish.jpg',
            ],
        ]);
    }
}
