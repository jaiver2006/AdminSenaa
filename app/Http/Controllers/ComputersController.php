<?php

namespace App\Http\Controllers;

use App\Models\Computers;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;

// Controlador que devuelve respuestas JSON para los computadores.
class ComputersController extends Controller
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
            'imagen' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $result = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'computers',
                'resource_type' => 'image',
            ]
        );

        $computer = Computers::create([
            'number' => $data['number'],
            'brand' => $data['brand'],
            'imagen_url' => $result['secure_url'],
            'imagen_public_id' => $result['public_id'],
        ]);

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
