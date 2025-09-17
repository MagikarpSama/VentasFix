@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Nuevo Usuario</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="rut" class="form-label">RUT</label>
            <input type="text" class="form-control" id="rut" name="rut" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
