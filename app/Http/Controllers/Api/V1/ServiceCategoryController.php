<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ServiceCategory\StoreServiceCategoryRequest;
use App\Http\Requests\V1\ServiceCategory\UpdateServiceCategoryRequest;
use App\Models\ServiceCategory;
use App\Actions\V1\ServiceCategory\StoreServiceCategoryAction;
use App\Actions\V1\ServiceCategory\UpdateServiceCategoryAction;
use App\Actions\V1\ServiceCategory\DeleteServiceCategoryAction;

/**
 * @OA\Tag(
 *     name="ServiceCategories",
 *     description="ServiceCategory CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/service-categories",
 *     tags={"ServiceCategories"},
 *     summary="Barcha xizmat kategoriyalarini olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/service-categories",
 *     tags={"ServiceCategories"},
 *     summary="Yangi xizmat kategoriyasi yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Get(
 *     path="/service-categories/{id}",
 *     tags={"ServiceCategories"},
 *     summary="Xizmat kategoriyasini ko‘rish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Put(
 *     path="/service-categories/{id}",
 *     tags={"ServiceCategories"},
 *     summary="Xizmat kategoriyasini yangilash",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=200, description="Updated")
 * )
 *
 * @OA\Delete(
 *     path="/service-categories/{id}",
 *     tags={"ServiceCategories"},
 *     summary="Xizmat kategoriyasini o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class ServiceCategoryController extends Controller
{
    public function index()
    {
        return response()->json(ServiceCategory::all());
    }
    public function store(StoreServiceCategoryRequest $request, StoreServiceCategoryAction $action)
    {
        $category = $action->handle($request->validated());
        return response()->json($category, 201);
    }
    public function show(ServiceCategory $serviceCategory)
    {
        return response()->json($serviceCategory);
    }
    public function update(UpdateServiceCategoryRequest $request, ServiceCategory $serviceCategory, UpdateServiceCategoryAction $action)
    {
        $category = $action->handle($serviceCategory, $request->validated());
        return response()->json($category);
    }
    public function destroy(ServiceCategory $serviceCategory, DeleteServiceCategoryAction $action)
    {
        $action->handle($serviceCategory);
        return response()->json(['message' => 'Kategoriya o‘chirildi']);
    }
}
