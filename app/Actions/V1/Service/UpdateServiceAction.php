<?php

namespace App\Actions\V1\Service;

use App\Services\V1\ServiceService;
use App\Models\Service;

class UpdateServiceAction
{
    public function __construct(protected ServiceService $service) {}
    public function handle(Service $serviceModel, array $data): Service
    {
        return $this->service->update($serviceModel, $data);
    }
}
