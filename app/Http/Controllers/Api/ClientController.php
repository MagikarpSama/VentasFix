<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \App\Http\Resources\ClientResource::collection(\App\Models\Client::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'rut_empresa' => 'required|string|unique:clients,rut_empresa',
            'rubro' => 'required|string',
            'razon_social' => 'required|string',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'nombre_contacto' => 'required|string',
            'email_contacto' => 'required|email',
        ]);
        $client = \App\Models\Client::create($data);
        return new \App\Http\Resources\ClientResource($client);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = \App\Models\Client::findOrFail($id);
        return new \App\Http\Resources\ClientResource($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = \App\Models\Client::findOrFail($id);
        $rules = [
            'rut_empresa' => 'sometimes|required|string|unique:clients,rut_empresa,' . $client->id,
            'rubro' => 'sometimes|required|string',
            'razon_social' => 'sometimes|required|string',
            'telefono' => 'sometimes|required|string',
            'direccion' => 'sometimes|required|string',
            'nombre_contacto' => 'sometimes|required|string',
            'email_contacto' => 'sometimes|required|email',
        ];
        $data = $request->validate($rules);
        $client->update($data);
        return new \App\Http\Resources\ClientResource($client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = \App\Models\Client::findOrFail($id);
        $client->delete();
        return response()->json(['message' => 'Cliente eliminado correctamente.']);
    }
}
