<?php

namespace App\Actions\V1\Favorite;

use App\Services\V1\FavoriteService;
use App\Models\Favorite;

class DeleteFavoriteAction
{
    public function __construct(protected FavoriteService $service) {}
    public function handle(Favorite $favorite): bool
    {
        return $this->service->delete($favorite);
    }
}
