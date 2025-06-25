<?php

namespace App\Actions\V1\GuideType;

use App\Services\V1\GuideTypeService;
use App\Models\GuideType;

class UpdateGuideTypeAction
{
    public function __construct(protected GuideTypeService $service) {}
    public function handle(GuideType $guideType, array $data): GuideType
    {
        return $this->service->update($guideType, $data);
    }
}
