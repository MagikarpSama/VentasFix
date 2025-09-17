<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = \App\Models\User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\StoreUserRequest $request)
    {
    $data = $request->validated();
    $data['password'] = bcrypt($data['password']);
    $data['name'] = $data['nombre'] . ' ' . $data['apellido'];
    \App\Models\User::create($data);
    return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\UpdateUserRequest $request, $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $data = $request->validated();
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
