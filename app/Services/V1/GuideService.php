<?php

namespace App\Services\V1;

use App\Models\Guide;

class GuideService
{
    public function list(array $filter = [])
    {
        return Guide::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return Guide::create($data);
    }
    public function update(Guide $guide, array $data)
    {
        $guide->update($data);
        return $guide;
    }
    public function delete(Guide $guide)
    {
        return $guide->delete();
    }
}
