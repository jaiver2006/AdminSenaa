<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Computers;
use Illuminate\Http\Request;

// Controlador que devuelve respuestas JSON para los computadores.
class ComputerController extends Controller
{
    // Devuelve todos los computadores ordenados del mas reciente al mas antiguo.
    public function index()
    {
        return response()->json(Computers::orderByDesc('id')->get());
    }

    // Crea un computador usando los datos validados de la peticion.
    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => ['required', 'integer'],
            'brand' => ['required', 'string', 'max:255'],
        ]);

        $computer = Computers::create($data);

        return response()->json($computer, 201);
    }

    // Devuelve un computador especifico mediante el enlace de modelo de Laravel.
    public function show(Computers $computer)
    {
        return response()->json($computer);
    }

    // Actualiza los datos del computador despues de validarlos.
    public function update(Request $request, Computers $computer)
    {
        $data = $request->validate([
            'number' => ['required', 'integer'],
            'brand' => ['required', 'string', 'max:255'],
        ]);

        $computer->update($data);

        return response()->json($computer);
    }

    // Elimina el computador y confirma la operacion al cliente.
    public function destroy(Computers $computer)
    {
        $computer->delete();

        return response()->json([
            'message' => 'Computador eliminado correctamente.',
        ]);
    }
}
