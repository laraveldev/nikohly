<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guide;

class GuideSeeder extends Seeder
{
    public function run(): void
    {
        Guide::insert([
            [
                'type_id' => 1,
                'title' => 'Nikoh uchun hujjatlar',
                'slug' => 'nikoh-uchun-hujjatlar',
                'content' => 'Nikoh uchun kerakli hujjatlar roʻyxati va tartibi.',
                'author' => 'Admin',
            ],
            [
                'type_id' => 2,
                'title' => 'Toza uy sirlari',
                'slug' => 'toza-uy-sirlari',
                'content' => 'Uyni toza saqlash bo‘yicha foydali maslahatlar.',
                'author' => 'Admin',
            ],
        ]);
    }
}
