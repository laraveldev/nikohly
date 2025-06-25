<?php

namespace App\Actions\V1\Service;

use App\Services\V1\ServiceService;
use App\Models\Service;

class DeleteServiceAction
{
    public function __construct(protected ServiceService $service) {}
    public function handle(Service $serviceModel): bool
    {
        return $this->service->delete($serviceModel);
    }
}
