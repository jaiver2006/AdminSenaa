<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importa el controlador que atiende las peticiones API de areas.
use App\Http\Controllers\Api\AreaController;
// Importa el controlador que atiende las peticiones API de centros.
use App\Http\Controllers\Api\TrainingCenterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Genera automaticamente las rutas GET, POST, PUT/PATCH y DELETE para areas.
Route::apiResource('areas', AreaController::class);

// Genera automaticamente las rutas CRUD para los centros de formacion.
Route::apiResource('training-centers', TrainingCenterController::class)
    // Usa el mismo nombre de parametro que reciben los metodos del controlador.
    ->parameters(['training-centers' => 'trainingCenter']);
