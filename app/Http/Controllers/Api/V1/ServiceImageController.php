<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ServiceImage\StoreServiceImageRequest;
use App\Http\Requests\V1\ServiceImage\UpdateServiceImageRequest;
use App\Models\ServiceImage;
use App\Actions\V1\ServiceImage\StoreServiceImageAction;
use App\Actions\V1\ServiceImage\UpdateServiceImageAction;
use App\Actions\V1\ServiceImage\DeleteServiceImageAction;

/**
 * @OA\Tag(
 *     name="ServiceImages",
 *     description="ServiceImage CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/service-images",
 *     tags={"ServiceImages"},
 *     summary="Barcha xizmat rasmlarini olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/service-images",
 *     tags={"ServiceImages"},
 *     summary="Yangi xizmat rasmi yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Get(
 *     path="/service-images/{id}",
 *     tags={"ServiceImages"},
 *     summary="Xizmat rasmini ko‘rish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Put(
 *     path="/service-images/{id}",
 *     tags={"ServiceImages"},
 *     summary="Xizmat rasmini yangilash",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=200, description="Updated")
 * )
 *
 * @OA\Delete(
 *     path="/service-images/{id}",
 *     tags={"ServiceImages"},
 *     summary="Xizmat rasmini o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class ServiceImageController extends Controller
{
    public function index()
    {
        return response()->json(ServiceImage::all());
    }
    public function store(StoreServiceImageRequest $request, StoreServiceImageAction $action)
    {
        $serviceImage = $action->handle($request->validated());
        return response()->json($serviceImage, 201);
    }
    public function show(ServiceImage $serviceImage)
    {
        return response()->json($serviceImage);
    }
    public function update(UpdateServiceImageRequest $request, ServiceImage $serviceImage, UpdateServiceImageAction $action)
    {
        $serviceImage = $action->handle($serviceImage, $request->validated());
        return response()->json($serviceImage);
    }
    public function destroy(ServiceImage $serviceImage, DeleteServiceImageAction $action)
    {
        $action->handle($serviceImage);
        return response()->json(['message' => 'Rasm o‘chirildi']);
    }
}
