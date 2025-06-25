<?php

namespace App\Actions\V1\GuideType;

use App\Services\V1\GuideTypeService;
use App\Models\GuideType;

class DeleteGuideTypeAction
{
    public function __construct(protected GuideTypeService $service) {}
    public function handle(GuideType $guideType): bool
    {
        return $this->service->delete($guideType);
    }
}
