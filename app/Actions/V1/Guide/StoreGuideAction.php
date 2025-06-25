<?php

namespace App\Actions\V1\Guide;

use App\Services\V1\GuideService;
use App\Models\Guide;

class StoreGuideAction
{
    public function __construct(protected GuideService $service) {}
    public function handle(array $data): Guide
    {
        return $this->service->create($data);
    }
}
