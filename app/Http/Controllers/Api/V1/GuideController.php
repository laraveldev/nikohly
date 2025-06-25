<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Guide\StoreGuideRequest;
use App\Http\Requests\V1\Guide\UpdateGuideRequest;
use App\Models\Guide;
use App\Actions\V1\Guide\StoreGuideAction;
use App\Actions\V1\Guide\UpdateGuideAction;
use App\Actions\V1\Guide\DeleteGuideAction;

/**
 * @OA\Tag(
 *     name="Guides",
 *     description="Guide CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/guides",
 *     tags={"Guides"},
 *     summary="Barcha guidelarni olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/guides",
 *     tags={"Guides"},
 *     summary="Yangi guide yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Get(
 *     path="/guides/{id}",
 *     tags={"Guides"},
 *     summary="Guideni ko‘rish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Put(
 *     path="/guides/{id}",
 *     tags={"Guides"},
 *     summary="Guideni yangilash",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=200, description="Updated")
 * )
 *
 * @OA\Delete(
 *     path="/guides/{id}",
 *     tags={"Guides"},
 *     summary="Guideni o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class GuideController extends Controller
{
    public function index()
    {
        return response()->json(Guide::all());
    }
    public function store(StoreGuideRequest $request, StoreGuideAction $action)
    {
        $guide = $action->handle($request->validated());
        return response()->json($guide, 201);
    }
    public function show(Guide $guide)
    {
        return response()->json($guide);
    }
    public function update(UpdateGuideRequest $request, Guide $guide, UpdateGuideAction $action)
    {
        $guide = $action->handle($guide, $request->validated());
        return response()->json($guide);
    }
    public function destroy(Guide $guide, DeleteGuideAction $action)
    {
        $action->handle($guide);
        return response()->json(['message' => 'Guide o‘chirildi']);
    }
}
