<?php

namespace App\Actions\V1\ServiceCategory;

use App\Services\V1\ServiceCategoryService;
use App\Models\ServiceCategory;

class UpdateServiceCategoryAction
{
    public function __construct(protected ServiceCategoryService $service) {}
    public function handle(ServiceCategory $category, array $data): ServiceCategory
    {
        return $this->service->update($category, $data);
    }
}
