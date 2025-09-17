@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Producto</h2>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku }}" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $product->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion_corta" class="form-label">Descripción corta</label>
            <input type="text" class="form-control" id="descripcion_corta" name="descripcion_corta" value="{{ $product->descripcion_corta }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion_larga" class="form-label">Descripción larga</label>
            <textarea class="form-control" id="descripcion_larga" name="descripcion_larga" required>{{ $product->descripcion_larga }}</textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">URL Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen" value="{{ $product->imagen }}" required>
        </div>
        <div class="mb-3">
            <label for="precio_neto" class="form-label">Precio Neto</label>
            <input type="number" step="0.01" class="form-control" id="precio_neto" name="precio_neto" value="{{ $product->precio_neto }}" required>
        </div>
        <div class="mb-3">
            <label for="precio_venta" class="form-label">Precio Venta</label>
            <input type="number" step="0.01" class="form-control" id="precio_venta" name="precio_venta" value="{{ $product->precio_venta }}" required>
        </div>
        <div class="mb-3">
            <label for="stock_actual" class="form-label">Stock Actual</label>
            <input type="number" class="form-control" id="stock_actual" name="stock_actual" value="{{ $product->stock_actual }}" required>
        </div>
        <div class="mb-3">
            <label for="stock_minimo" class="form-label">Stock Mínimo</label>
            <input type="number" class="form-control" id="stock_minimo" name="stock_minimo" value="{{ $product->stock_minimo }}" required>
        </div>
        <div class="mb-3">
            <label for="stock_bajo" class="form-label">Stock Bajo</label>
            <input type="number" class="form-control" id="stock_bajo" name="stock_bajo" value="{{ $product->stock_bajo }}" required>
        </div>
        <div class="mb-3">
            <label for="stock_alto" class="form-label">Stock Alto</label>
            <input type="number" class="form-control" id="stock_alto" name="stock_alto" value="{{ $product->stock_alto }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
