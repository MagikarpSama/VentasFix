@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Usuarios</h2>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo Usuario</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->rut }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline-block;">
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
