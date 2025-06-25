<?php

namespace App\Actions\V1\ServiceCategoryVendor;

use App\Services\V1\ServiceCategoryVendorService;
use App\Models\ServiceCategoryVendor;

class DeleteServiceCategoryVendorAction
{
    public function __construct(protected ServiceCategoryVendorService $service) {}
    public function handle(ServiceCategoryVendor $scv): bool
    {
        return $this->service->delete($scv);
    }
}
