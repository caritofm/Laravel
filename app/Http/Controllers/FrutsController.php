<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frutas;
use App\Http\Requests\FrutsRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\FrutsResource;

class FrutsController extends Controller
{
    public function index():JsonResponse
    {
        //$fruts = Frutas::all();
        //return response()->json(Frutas::all(), 200);
        return FrutsResource::collection(Frutas::all());
    }


    public function store(FrutsRequest $request):JsonResponse
    {
        Frutas::create($request-> all());
        return response()->json([
            'sucess' =>true
        ], 201);
    }

    public function show(string $id):JsonResponse
    {
        $fruts = Frutas::find($id);
        return response()->json($fruts, 200);
    }

    public function update(FrutsRequest $request, string $id):JsonResponse
    {
        $fruts= Frutas::findOrFail($id);
        $fruts -> name = $request->name;
        $fruts -> color = $request -> color;
        $fruts->save();

        return response()->json([
            'success' => true,
            'data' => $fruts
        ], 200);
    }

    public function destroy(string $id):JsonResponse
    {
        $fruts = Frutas::findOrFail($id);
        $fruts -> delete();
        return response()->json([
            'sucess' =>true
        ],200);
        
    }
}
