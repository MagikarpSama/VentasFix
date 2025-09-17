@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Clientes</h2>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Nuevo Cliente</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>RUT Empresa</th>
                <th>Rubro</th>
                <th>Razón Social</th>
                <th>Teléfono</th>
                <th>Contacto</th>
                <th>Email Contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->rut_empresa }}</td>
                <td>{{ $client->rubro }}</td>
                <td>{{ $client->razon_social }}</td>
                <td>{{ $client->telefono }}</td>
                <td>{{ $client->nombre_contacto }}</td>
                <td>{{ $client->email_contacto }}</td>
                <td>
                    <a href="{{ route('clients.show', $client) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline-block;">
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
