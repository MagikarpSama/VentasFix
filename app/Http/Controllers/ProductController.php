<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = \App\Models\Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\StoreProductRequest $request)
    {
        $data = $request->validated();
        \App\Models\Product::create($data);
        return redirect()->route('products.index')->with('success', 'Producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\UpdateProductRequest $request, \App\Models\Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente.');
    }
}
