<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importa el controlador que atiende las peticiones API de areas.
use App\Http\Controllers\Api\AreaController;
// Importa el controlador que atiende las peticiones API de centros.
use App\Http\Controllers\Api\TrainingCenterController;
// Importa los controladores API de los demas modulos del sistema.
use App\Http\Controllers\Api\ApprenticeController;
use App\Http\Controllers\Api\ComputerController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\TeacherController;

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

// Genera las rutas CRUD para los computadores registrados.
Route::apiResource('computers', ComputerController::class);

// Genera las rutas CRUD para los instructores.
Route::apiResource('teachers', TeacherController::class)
    ->parameters(['teachers' => 'teacher']);

// Genera las rutas CRUD para los cursos.
Route::apiResource('courses', CourseController::class)
    ->parameters(['courses' => 'course']);

// Genera las rutas CRUD para los aprendices.
Route::apiResource('apprentices', ApprenticeController::class)
    ->parameters(['apprentices' => 'apprentice']);
