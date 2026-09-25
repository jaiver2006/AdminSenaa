<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        // Si ya existe una sesion, no se vuelve a mostrar el formulario de acceso.
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        // validate() detiene el proceso si el correo o la contrasena son invalidos.
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Auth::attempt compara las credenciales y admite la opcion "recordarme".
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Regenerar la sesion evita reutilizar el identificador anterior.
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // Se cierra la autenticacion, se invalida la sesion y se renueva el token CSRF.
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
