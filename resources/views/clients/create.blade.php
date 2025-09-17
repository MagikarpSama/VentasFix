@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Nuevo Cliente</h2>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="rut_empresa" class="form-label">RUT Empresa</label>
            <input type="text" class="form-control" id="rut_empresa" name="rut_empresa" required>
        </div>
        <div class="mb-3">
            <label for="rubro" class="form-label">Rubro</label>
            <input type="text" class="form-control" id="rubro" name="rubro" required>
        </div>
        <div class="mb-3">
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="nombre_contacto" class="form-label">Nombre Contacto</label>
            <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" required>
        </div>
        <div class="mb-3">
            <label for="email_contacto" class="form-label">Email Contacto</label>
            <input type="email" class="form-control" id="email_contacto" name="email_contacto" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
