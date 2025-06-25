<?php

namespace App\Services\V1;

use App\Models\Service;

class ServiceService
{
    public function list(array $filter = [])
    {
        return Service::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return Service::create($data);
    }
    public function update(Service $service, array $data)
    {
        $service->update($data);
        return $service;
    }
    public function delete(Service $service)
    {
        return $service->delete();
    }
}
