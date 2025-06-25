<?php

namespace App\Actions\V1\Service;

use App\Services\V1\ServiceService;
use App\Models\Service;

class StoreServiceAction
{
    public function __construct(protected ServiceService $service) {}
    public function handle(array $data): Service
    {
        return $this->service->create($data);
    }
}
