<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GuideType;

class GuideTypeSeeder extends Seeder
{
    public function run(): void
    {
        GuideType::insert([
            ['name' => 'Qadam-baqadam'],
            ['name' => 'Foydali maslahatlar'],
        ]);
    }
}
