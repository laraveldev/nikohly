<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\GuideType\StoreGuideTypeRequest;
use App\Http\Requests\V1\GuideType\UpdateGuideTypeRequest;
use App\Models\GuideType;
use App\Actions\V1\GuideType\StoreGuideTypeAction;
use App\Actions\V1\GuideType\UpdateGuideTypeAction;
use App\Actions\V1\GuideType\DeleteGuideTypeAction;

/**
 * @OA\Tag(
 *     name="GuideTypes",
 *     description="GuideType CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/guide-types",
 *     tags={"GuideTypes"},
 *     summary="Barcha guide turlarini olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/guide-types",
 *     tags={"GuideTypes"},
 *     summary="Yangi guide turi yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Get(
 *     path="/guide-types/{id}",
 *     tags={"GuideTypes"},
 *     summary="Guide turini ko‘rish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Put(
 *     path="/guide-types/{id}",
 *     tags={"GuideTypes"},
 *     summary="Guide turini yangilash",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=200, description="Updated")
 * )
 *
 * @OA\Delete(
 *     path="/guide-types/{id}",
 *     tags={"GuideTypes"},
 *     summary="Guide turini o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class GuideTypeController extends Controller
{
    public function index()
    {
        return response()->json(GuideType::all());
    }
    public function store(StoreGuideTypeRequest $request, StoreGuideTypeAction $action)
    {
        $guideType = $action->handle($request->validated());
        return response()->json($guideType, 201);
    }
    public function show(GuideType $guideType)
    {
        return response()->json($guideType);
    }
    public function update(UpdateGuideTypeRequest $request, GuideType $guideType, UpdateGuideTypeAction $action)
    {
        $guideType = $action->handle($guideType, $request->validated());
        return response()->json($guideType);
    }
    public function destroy(GuideType $guideType, DeleteGuideTypeAction $action)
    {
        $action->handle($guideType);
        return response()->json(['message' => 'Guide turi o‘chirildi']);
    }
}
