<?php

namespace App\Actions\V1\ServiceImage;

use App\Services\V1\ServiceImageService;
use App\Models\ServiceImage;

class StoreServiceImageAction
{
    public function __construct(protected ServiceImageService $service) {}
    public function handle(array $data): ServiceImage
    {
        return $this->service->create($data);
    }
}
