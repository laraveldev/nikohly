<?php

namespace App\Services\V1;

use App\Models\Vendor;

class VendorService
{
    public function list(array $filter = [])
    {
        return Vendor::query()->where($filter)->get();
    }

    public function create(array $data)
    {
        return Vendor::create($data);
    }

    public function update(Vendor $vendor, array $data)
    {
        $vendor->update($data);
        return $vendor;
    }

    public function delete(Vendor $vendor)
    {
        return $vendor->delete();
    }
}
