<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \App\Http\Resources\UserResource::collection(\App\Models\User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'rut' => 'required|string|unique:users,rut',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        $data['password'] = bcrypt($data['password']);
        $data['name'] = $data['nombre'] . ' ' . $data['apellido'];
        $user = \App\Models\User::create($data);
        return new \App\Http\Resources\UserResource($user);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return new \App\Http\Resources\UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $data = $request->validate([
            'rut' => 'required|string|unique:users,rut,' . $user->id,
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
        ]);
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        return new \App\Http\Resources\UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'Usuario eliminado correctamente.']);
    }
}
