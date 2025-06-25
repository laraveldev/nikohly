<?php

namespace App\Actions\V1\Favorite;

use App\Services\V1\FavoriteService;
use App\Models\Favorite;

class StoreFavoriteAction
{
    public function __construct(protected FavoriteService $service) {}
    public function handle(array $data): Favorite
    {
        return $this->service->create($data);
    }
}
