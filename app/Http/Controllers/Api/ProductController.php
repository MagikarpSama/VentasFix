<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \App\Http\Resources\ProductResource::collection(\App\Models\Product::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sku' => 'required|string|unique:products,sku',
            'nombre' => 'required|string',
            'descripcion_corta' => 'required|string',
            'descripcion_larga' => 'required|string',
            'imagen' => 'required|url',
            'precio_neto' => 'required|numeric|min:0',
            'precio_venta' => 'required|numeric|min:0',
            'stock_actual' => 'required|integer|min:0',
            'stock_minimo' => 'required|integer|min:0',
            'stock_bajo' => 'required|integer|min:0',
            'stock_alto' => 'required|integer|min:0',
        ]);
        $product = \App\Models\Product::create($data);
        return new \App\Http\Resources\ProductResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return new \App\Http\Resources\ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $rules = [
            'sku' => 'sometimes|required|string|unique:products,sku,' . $product->id,
            'nombre' => 'sometimes|required|string',
            'descripcion_corta' => 'sometimes|required|string',
            'descripcion_larga' => 'sometimes|required|string',
            'imagen' => 'sometimes|required|url',
            'precio_neto' => 'sometimes|required|numeric|min:0',
            'precio_venta' => 'sometimes|required|numeric|min:0',
            'stock_actual' => 'sometimes|required|integer|min:0',
            'stock_minimo' => 'sometimes|required|integer|min:0',
            'stock_bajo' => 'sometimes|required|integer|min:0',
            'stock_alto' => 'sometimes|required|integer|min:0',
        ];
        $data = $request->validate($rules);
        $product->update($data);
        return new \App\Http\Resources\ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Producto eliminado correctamente.']);
    }
}
