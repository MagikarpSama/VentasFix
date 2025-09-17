@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <p class="card-text display-4">{{ $usersCount ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <p class="card-text display-4">{{ $productsCount ?? 0 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text display-4">{{ $clientsCount ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
