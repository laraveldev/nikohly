<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Vendor\StoreVendorRequest;
use App\Http\Requests\V1\Vendor\UpdateVendorRequest;
use App\Models\Vendor;
use App\Actions\V1\Vendor\StoreVendorAction;
use App\Actions\V1\Vendor\UpdateVendorAction;
use App\Actions\V1\Vendor\DeleteVendorAction;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Vendors",
 *     description="Vendor CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/vendors",
 *     tags={"Vendors"},
 *     summary="Barcha vendorlarni olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/vendors",
 *     tags={"Vendors"},
 *     summary="Yangi vendor yaratish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Get(
 *     path="/vendors/{id}",
 *     tags={"Vendors"},
 *     summary="Vendorni ko‘rish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Put(
 *     path="/vendors/{id}",
 *     tags={"Vendors"},
 *     summary="Vendorni yangilash",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=200, description="Updated")
 * )
 *
 * @OA\Delete(
 *     path="/vendors/{id}",
 *     tags={"Vendors"},
 *     summary="Vendorni o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */
class VendorController extends Controller
{
    public function index()
    {
        return response()->json(Vendor::all());
    }

    public function store(StoreVendorRequest $request, StoreVendorAction $action)
    {
        $vendor = $action->handle($request->validated());
        return response()->json($vendor, 201);
    }

    public function show(Vendor $vendor)
    {
        return response()->json($vendor);
    }

    public function update(UpdateVendorRequest $request, Vendor $vendor, UpdateVendorAction $action)
    {
        $vendor = $action->handle($vendor, $request->validated());
        return response()->json($vendor);
    }

    public function destroy(Vendor $vendor, DeleteVendorAction $action)
    {
        $action->handle($vendor);
        return response()->json(['message' => 'Vendor o‘chirildi']);
    }
}
