<?php

namespace App\Services\V1;

use App\Models\ServiceCategoryVendor;

class ServiceCategoryVendorService
{
    public function list(array $filter = [])
    {
        return ServiceCategoryVendor::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return ServiceCategoryVendor::create($data);
    }
    public function delete(ServiceCategoryVendor $scv)
    {
        return $scv->delete();
    }
}
