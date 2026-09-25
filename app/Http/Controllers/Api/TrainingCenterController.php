<?php

namespace App\Http\Controllers\Api;

// Permite reutilizar la clase base de los controladores de Laravel.
use App\Http\Controllers\Controller;
// Importa el modelo que representa la tabla training_centers.
use App\Models\TrainingCenters;
// Permite recibir y validar los datos enviados por Postman.
use Illuminate\Http\Request;

// Controlador que devuelve respuestas JSON para los centros de formacion.
class TrainingCenterController extends Controller
{
    // Devuelve todos los centros ordenados del mas reciente al mas antiguo.
    public function index()
    {
        // Consulta la tabla training_centers y prepara una respuesta JSON.
        return response()->json(TrainingCenters::orderByDesc('id')->get());
    }

    // Crea un nuevo centro con los datos recibidos desde la API.
    public function store(Request $request)
    {
        // Valida que el nombre y la ubicacion sean textos obligatorios.
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        // Guarda el centro usando los campos permitidos por el modelo.
        $trainingCenter = TrainingCenters::create($data);

        // Devuelve el registro creado con el estado HTTP 201.
        return response()->json($trainingCenter, 201);
    }

    // Devuelve un centro especifico usando su identificador de la URL.
    public function show(TrainingCenters $trainingCenter)
    {
        // Laravel inyecta automaticamente el registro solicitado.
        return response()->json($trainingCenter);
    }

    // Actualiza un centro existente con los datos enviados por la API.
    public function update(Request $request, TrainingCenters $trainingCenter)
    {
        // Valida los datos antes de modificar el registro.
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        // Actualiza solamente los campos validados.
        $trainingCenter->update($data);

        // Devuelve el registro despues de aplicar los cambios.
        return response()->json($trainingCenter);
    }

    // Elimina un centro especifico usando su identificador.
    public function destroy(TrainingCenters $trainingCenter)
    {
        // Borra el registro encontrado por el enlace de modelo de Laravel.
        $trainingCenter->delete();

        // Confirma al cliente que la eliminacion fue realizada.
        return response()->json([
            'message' => 'Centro de formacion eliminado correctamente.',
        ]);
    }
}
