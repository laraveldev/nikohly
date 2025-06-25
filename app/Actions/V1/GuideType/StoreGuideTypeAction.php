<?php

namespace App\Actions\V1\GuideType;

use App\Services\V1\GuideTypeService;
use App\Models\GuideType;

class StoreGuideTypeAction
{
    public function __construct(protected GuideTypeService $service) {}
    public function handle(array $data): GuideType
    {
        return $this->service->create($data);
    }
}
