<?php

namespace App\Actions\V1\ServiceImage;

use App\Services\V1\ServiceImageService;
use App\Models\ServiceImage;

class DeleteServiceImageAction
{
    public function __construct(protected ServiceImageService $service) {}
    public function handle(ServiceImage $serviceImage): bool
    {
        return $this->service->delete($serviceImage);
    }
}
