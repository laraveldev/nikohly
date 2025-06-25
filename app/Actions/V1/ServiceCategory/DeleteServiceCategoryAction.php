<?php

namespace App\Actions\V1\ServiceCategory;

use App\Services\V1\ServiceCategoryService;
use App\Models\ServiceCategory;

class DeleteServiceCategoryAction
{
    public function __construct(protected ServiceCategoryService $service) {}
    public function handle(ServiceCategory $category): bool
    {
        return $this->service->delete($category);
    }
}
