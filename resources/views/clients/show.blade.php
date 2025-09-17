@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalle de Cliente</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $client->id }}</p>
            <p><strong>RUT Empresa:</strong> {{ $client->rut_empresa }}</p>
            <p><strong>Rubro:</strong> {{ $client->rubro }}</p>
            <p><strong>Razón Social:</strong> {{ $client->razon_social }}</p>
            <p><strong>Teléfono:</strong> {{ $client->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $client->direccion }}</p>
            <p><strong>Nombre Contacto:</strong> {{ $client->nombre_contacto }}</p>
            <p><strong>Email Contacto:</strong> {{ $client->email_contacto }}</p>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
