<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Favorite\StoreFavoriteRequest;
use App\Models\Favorite;
use App\Actions\V1\Favorite\StoreFavoriteAction;
use App\Actions\V1\Favorite\DeleteFavoriteAction;

/**
 * @OA\Tag(
 *     name="Favorites",
 *     description="Favorite CRUD endpoints"
 * )
 *
 * @OA\Get(
 *     path="/favorites",
 *     tags={"Favorites"},
 *     summary="Barcha sevimlilarni olish",
 *     @OA\Response(response=200, description="Success")
 * )
 *
 * @OA\Post(
 *     path="/favorites",
 *     tags={"Favorites"},
 *     summary="Yangi sevimli qo'shish",
 *     @OA\RequestBody(required=true, @OA\MediaType(mediaType="application/json")),
 *     @OA\Response(response=201, description="Created")
 * )
 *
 * @OA\Delete(
 *     path="/favorites/{id}",
 *     tags={"Favorites"},
 *     summary="Sevimlini o‘chirish",
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Deleted")
 * )
 */

class FavoriteController extends Controller
{
    public function index()
    {
        return response()->json(Favorite::all());
    }
    public function store(StoreFavoriteRequest $request, StoreFavoriteAction $action)
    {
        $favorite = $action->handle($request->validated());
        return response()->json($favorite, 201);
    }
    public function destroy(Favorite $favorite, DeleteFavoriteAction $action)
    {
        $action->handle($favorite);
        return response()->json(['message' => 'Sevimli xizmat o‘chirildi']);
    }
}
