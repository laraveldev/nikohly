<?php

namespace App\Actions\V1\Vendor;

use App\Services\V1\VendorService;
use App\Models\Vendor;

class UpdateVendorAction
{
    public function __construct(protected VendorService $service) {}

    public function handle(Vendor $vendor, array $data): Vendor
    {
        return $this->service->update($vendor, $data);
    }
}
