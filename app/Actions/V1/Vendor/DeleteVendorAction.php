<?php

namespace App\Actions\V1\Vendor;

use App\Services\V1\VendorService;
use App\Models\Vendor;

class DeleteVendorAction
{
    public function __construct(protected VendorService $service) {}

    public function handle(Vendor $vendor): bool
    {
        return $this->service->delete($vendor);
    }
}
