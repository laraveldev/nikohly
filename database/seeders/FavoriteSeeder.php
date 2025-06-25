<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorite;

class FavoriteSeeder extends Seeder
{
    public function run(): void
    {
        Favorite::insert([
            [
                'user_id' => 1,
                'service_id' => 1,
            ],
            [
                'user_id' => 1,
                'service_id' => 2,
            ],
        ]);
    }
}
