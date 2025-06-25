<?php

namespace App\Actions\V1\ServiceCategoryVendor;

use App\Services\V1\ServiceCategoryVendorService;
use App\Models\ServiceCategoryVendor;

class StoreServiceCategoryVendorAction
{
    public function __construct(protected ServiceCategoryVendorService $service) {}
    public function handle(array $data): ServiceCategoryVendor
    {
        return $this->service->create($data);
    }
}
