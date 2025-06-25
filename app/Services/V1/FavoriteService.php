<?php

namespace App\Services\V1;

use App\Models\Favorite;

class FavoriteService
{
    public function list(array $filter = [])
    {
        return Favorite::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return Favorite::create($data);
    }
    public function delete(Favorite $favorite)
    {
        return $favorite->delete();
    }
}
