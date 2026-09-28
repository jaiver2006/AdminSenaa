<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teachers;
use Illuminate\Http\Request;

// Controlador que devuelve respuestas JSON para los instructores.
class TeacherController extends Controller
{
    // Devuelve los instructores con sus relaciones principales.
    public function index()
    {
        $teachers = Teachers::with('area', 'trainingCenter')
            ->orderByDesc('id')
            ->get();

        return response()->json($teachers);
    }

    // Crea un instructor con referencias validas a area y centro de formacion.
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_centers_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $teacher = Teachers::create($data);

        return response()->json($teacher->load('area', 'trainingCenter'), 201);
    }

    // Devuelve un instructor especifico junto con sus relaciones.
    public function show(Teachers $teacher)
    {
        return response()->json($teacher->load('area', 'trainingCenter'));
    }

    // Actualiza solo los campos permitidos y previamente validados.
    public function update(Request $request, Teachers $teacher)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_centers_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $teacher->update($data);

        return response()->json($teacher->load('area', 'trainingCenter'));
    }

    // Elimina un instructor y devuelve un mensaje de confirmacion.
    public function destroy(Teachers $teacher)
    {
        $teacher->delete();

        return response()->json([
            'message' => 'Instructor eliminado correctamente.',
        ]);
    }
}
