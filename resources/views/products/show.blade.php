@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalle de Producto</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>SKU:</strong> {{ $product->sku }}</p>
            <p><strong>Nombre:</strong> {{ $product->nombre }}</p>
            <p><strong>Descripción corta:</strong> {{ $product->descripcion_corta }}</p>
            <p><strong>Descripción larga:</strong> {{ $product->descripcion_larga }}</p>
            <p><strong>Imagen:</strong> <img src="{{ $product->imagen }}" alt="Imagen" style="max-width:150px;"></p>
            <p><strong>Precio Neto:</strong> {{ $product->precio_neto }}</p>
            <p><strong>Precio Venta:</strong> {{ $product->precio_venta }}</p>
            <p><strong>Stock Actual:</strong> {{ $product->stock_actual }}</p>
            <p><strong>Stock Mínimo:</strong> {{ $product->stock_minimo }}</p>
            <p><strong>Stock Bajo:</strong> {{ $product->stock_bajo }}</p>
            <p><strong>Stock Alto:</strong> {{ $product->stock_alto }}</p>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
