@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalle de Usuario</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>RUT:</strong> {{ $user->rut }}</p>
            <p><strong>Nombre:</strong> {{ $user->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $user->apellido }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
