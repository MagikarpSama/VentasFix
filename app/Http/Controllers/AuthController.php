<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // API: login y logout
    public function apiLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (!auth()->attempt($credentials)) {
            return response()->json(['message' => 'Credenciales inválidas'], 401);
        }
        $user = auth()->user();
        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'nombre' => $user->nombre,
                'apellido' => $user->apellido,
                'email' => $user->email,
            ]
        ]);
    }

    public function apiLogout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Sesión cerrada correctamente.']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
