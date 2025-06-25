<?php

namespace App\Services\V1;

use App\Models\ServiceImage;

class ServiceImageService
{
    public function list(array $filter = [])
    {
        return ServiceImage::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return ServiceImage::create($data);
    }
    public function update(ServiceImage $serviceImage, array $data)
    {
        $serviceImage->update($data);
        return $serviceImage;
    }
    public function delete(ServiceImage $serviceImage)
    {
        return $serviceImage->delete();
    }
}
