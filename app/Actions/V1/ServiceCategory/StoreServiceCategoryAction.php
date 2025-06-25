<?php

namespace App\Actions\V1\ServiceCategory;

use App\Services\V1\ServiceCategoryService;
use App\Models\ServiceCategory;

class StoreServiceCategoryAction
{
    public function __construct(protected ServiceCategoryService $service) {}
    public function handle(array $data): ServiceCategory
    {
        return $this->service->create($data);
    }
}
