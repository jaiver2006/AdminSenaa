<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

// Controlador que devuelve respuestas JSON para los cursos.
class CourseController extends Controller
{
    // Devuelve los cursos con el area y el centro de formacion asociados.
    public function index()
    {
        $courses = Courses::with('area', 'training_center')
            ->orderByDesc('id')
            ->get();

        return response()->json($courses);
    }

    // Crea un curso comprobando sus relaciones antes de guardarlo.
    public function store(Request $request)
    {
        $data = $request->validate([
            'numero_de_curso' => ['required', 'integer'],
            'day' => ['required', 'string', 'max:255'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_centers_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $course = Courses::create($data);

        return response()->json($course->load('area', 'training_center'), 201);
    }

    // Devuelve un curso especifico junto con sus relaciones principales.
    public function show(Courses $course)
    {
        return response()->json($course->load('area', 'training_center'));
    }

    // Actualiza los datos del curso despues de validar la peticion.
    public function update(Request $request, Courses $course)
    {
        $data = $request->validate([
            'numero_de_curso' => ['required', 'integer'],
            'day' => ['required', 'string', 'max:255'],
            'area_id' => ['nullable', 'exists:areas,id'],
            'training_centers_id' => ['nullable', 'exists:training_centers,id'],
        ]);

        $course->update($data);

        return response()->json($course->load('area', 'training_center'));
    }

    // Elimina el curso y confirma la operacion al cliente.
    public function destroy(Courses $course)
    {
        $course->delete();

        return response()->json([
            'message' => 'Curso eliminado correctamente.',
        ]);
    }
}
