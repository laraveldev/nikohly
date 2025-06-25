<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Service\StoreServiceRequest;
use App\Http\Requests\V1\Service\UpdateServiceRequest;
use App\Models\Service;
use App\Actions\V1\Service\StoreServiceAction;
use App\Actions\V1\Service\UpdateServiceAction;
use App\Actions\V1\Service\DeleteServiceAction;

/**
 * @OA\Tag(
 *     name="Services",
 *     description="Service CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/services",
 *     tags={"Services"},
 *     summary="Barcha xizmatlarni olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/services",
 *     tags={"Services"},
 *     summary="Yangi xizmat yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Get(
 *     path="/services/{id}",
 *     tags={"Services"},
 *     summary="Xizmatni ko‘rish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Put(
 *     path="/services/{id}",
 *     tags={"Services"},
 *     summary="Xizmatni yangilash",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=200, description="Updated")
 * )
 *
 * @OA\Delete(
 *     path="/services/{id}",
 *     tags={"Services"},
 *     summary="Xizmatni o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class ServiceController extends Controller
{
    public function index()
    {
        return response()->json(Service::all());
    }
    public function store(StoreServiceRequest $request, StoreServiceAction $action)
    {
        $service = $action->handle($request->validated());
        return response()->json($service, 201);
    }
    public function show(Service $service)
    {
        return response()->json($service);
    }
    public function update(UpdateServiceRequest $request, Service $service, UpdateServiceAction $action)
    {
        $service = $action->handle($service, $request->validated());
        return response()->json($service);
    }
    public function destroy(Service $service, DeleteServiceAction $action)
    {
        $action->handle($service);
        return response()->json(['message' => 'Xizmat o‘chirildi']);
    }
}
