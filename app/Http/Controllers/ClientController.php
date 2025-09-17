<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = \App\Models\Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\StoreClientRequest $request)
    {
        $data = $request->validated();
        \App\Models\Client::create($data);
        return redirect()->route('clients.index')->with('success', 'Cliente creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\UpdateClientRequest $request, \App\Models\Client $client)
    {
        $data = $request->validated();
        $client->update($data);
        return redirect()->route('clients.index')->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
