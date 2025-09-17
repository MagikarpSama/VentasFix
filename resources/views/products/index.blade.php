@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Productos</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Nombre</th>
                <th>Precio Neto</th>
                <th>Precio Venta</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->precio_neto }}</td>
                <td>{{ $product->precio_venta }}</td>
                <td>{{ $product->stock_actual }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
