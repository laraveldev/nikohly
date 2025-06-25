<?php

namespace App\Actions\V1\Guide;

use App\Services\V1\GuideService;
use App\Models\Guide;

class UpdateGuideAction
{
    public function __construct(protected GuideService $service) {}
    public function handle(Guide $guide, array $data): Guide
    {
        return $this->service->update($guide, $data);
    }
}
