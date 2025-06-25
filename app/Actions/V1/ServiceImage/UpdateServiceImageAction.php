<?php

namespace App\Actions\V1\ServiceImage;

use App\Services\V1\ServiceImageService;
use App\Models\ServiceImage;

class UpdateServiceImageAction
{
    public function __construct(protected ServiceImageService $service) {}
    public function handle(ServiceImage $serviceImage, array $data): ServiceImage
    {
        return $this->service->update($serviceImage, $data);
    }
}
