<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ServiceCategoryVendor\StoreServiceCategoryVendorRequest;
use App\Models\ServiceCategoryVendor;
use App\Actions\V1\ServiceCategoryVendor\StoreServiceCategoryVendorAction;
use App\Actions\V1\ServiceCategoryVendor\DeleteServiceCategoryVendorAction;

/**
 * @OA\Tag(
 *     name="ServiceCategoryVendor",
 *     description="ServiceCategoryVendor CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/service-category-vendor",
 *     tags={"ServiceCategoryVendor"},
 *     summary="Barcha vendor-category ulanishlarini olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/service-category-vendor",
 *     tags={"ServiceCategoryVendor"},
 *     summary="Yangi vendor-category ulanishi yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Delete(
 *     path="/service-category-vendor/{id}",
 *     tags={"ServiceCategoryVendor"},
 *     summary="Ulanishni o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class ServiceCategoryVendorController extends Controller
{
    public function index()
    {
        return response()->json(ServiceCategoryVendor::all());
    }
    public function store(StoreServiceCategoryVendorRequest $request, StoreServiceCategoryVendorAction $action)
    {
        $scv = $action->handle($request->validated());
        return response()->json($scv, 201);
    }
    public function destroy(ServiceCategoryVendor $serviceCategoryVendor, DeleteServiceCategoryVendorAction $action)
    {
        $action->handle($serviceCategoryVendor);
        return response()->json(['message' => 'Ulanish o‘chirildi']);
    }
}
