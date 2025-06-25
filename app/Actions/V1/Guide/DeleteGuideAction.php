<?php

namespace App\Actions\V1\Guide;

use App\Services\V1\GuideService;
use App\Models\Guide;

class DeleteGuideAction
{
    public function __construct(protected GuideService $service) {}
    public function handle(Guide $guide): bool
    {
        return $this->service->delete($guide);
    }
}
