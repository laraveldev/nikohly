<?php

namespace App\Services\V1;

use App\Models\GuideType;

class GuideTypeService
{
    public function list(array $filter = [])
    {
        return GuideType::query()->where($filter)->get();
    }
    public function create(array $data)
    {
        return GuideType::create($data);
    }
    public function update(GuideType $guideType, array $data)
    {
        $guideType->update($data);
        return $guideType;
    }
    public function delete(GuideType $guideType)
    {
        return $guideType->delete();
    }
}
