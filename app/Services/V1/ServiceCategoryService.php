<?php

namespace App\Services\V1;

use App\Models\ServiceCategory;

class ServiceCategoryService
{
    public function list(array $filter = [])
    {
        return ServiceCategory::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return ServiceCategory::create($data);
    }
    public function update(ServiceCategory $category, array $data)
    {
        $category->update($data);
        return $category;
    }
    public function delete(ServiceCategory $category)
    {
        return $category->delete();
    }
}
