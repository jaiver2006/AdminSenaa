<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importa el controlador que atiende las peticiones API de areas.
use App\Http\Controllers\Api\AreaController;

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
