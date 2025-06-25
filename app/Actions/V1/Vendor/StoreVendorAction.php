<?php

namespace App\Actions\V1\Vendor;

use App\Services\V1\VendorService;
use App\Models\Vendor;

class StoreVendorAction
{
    public function __construct(protected VendorService $service) {}

    public function handle(array $data): Vendor
    {
        return $this->service->create($data);
    }
}
