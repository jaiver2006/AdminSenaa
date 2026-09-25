<?php

use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TrainingCentersController;
use App\Models\Apprentices;
use App\Models\Computers;
use App\Models\Courses;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Todas las rutas dentro de este grupo requieren una sesion iniciada.
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        // El dashboard consulta la base de datos para mostrar indicadores reales.
        // latest()->first() obtiene el ultimo registro de cada modulo.
        $latestApprentice = Apprentices::latest()->first();
        $latestTeacher = Teachers::latest()->first();
        $latestCourse = Courses::latest()->first();
        $latestComputer = Computers::latest()->first();

        // Se arma una actividad breve con los ultimos registros disponibles.
        // collect() permite ordenar y limitar facilmente las actividades mostradas.
        $recentActivities = collect([
            // El operador ternario evita acceder a propiedades si la tabla esta vacia.
            $latestApprentice ? [
                'message' => 'Se registró el aprendiz ' . $latestApprentice->name . '.',
                'date' => $latestApprentice->created_at,
            ] : null,
            $latestTeacher ? [
                'message' => 'Se registró el instructor ' . $latestTeacher->name . '.',
                'date' => $latestTeacher->created_at,
            ] : null,
            $latestCourse ? [
                'message' => 'Se registró el curso ' . $latestCourse->numero_de_curso . '.',
                'date' => $latestCourse->created_at,
            ] : null,
            $latestComputer ? [
                'message' => 'Se registró el computador ' . $latestComputer->number . '.',
                'date' => $latestComputer->created_at,
            ] : null,
            // filter elimina elementos vacios, sortByDesc pone lo mas reciente primero,
            // take limita el panel a tres elementos y values() reindexa la coleccion.
        ])->filter()->sortByDesc('date')->take(3)->values();

        return view('welcome', [
            // count() envia a Blade el total actual de cada tabla.
            'apprenticesCount' => Apprentices::count(),
            'teachersCount' => Teachers::count(),
            'coursesCount' => Courses::count(),
            'computersCount' => Computers::count(),
            'recentActivities' => $recentActivities,
        ]);
    })->name('dashboard');

    Route::get('areas/create', [AreasController::class, 'create'])->name('area.create');
    Route::post('areas/store', [AreasController::class, 'salida'])->name('area.store');
    Route::get('areas/store', [AreasController::class, 'index'])->name('area.index');
    Route::get('areas/{id}', [AreasController::class, 'show'])->name('area.show');
    Route::get('areas/{areas}/editar', [AreasController::class, 'edit'])->name('area.edit');
    Route::put('areas/{areas}', [AreasController::class, 'update'])->name('area.update');
    Route::delete('areas/{areas}', [AreasController::class, 'destroy'])->name('area.destroy');

    // ===================== CENTROS =====================
    Route::get('trainingcenter/registro', [TrainingCentersController::class, 'create'])->name('trainingcenter.registro');
    Route::post('trainingcenter/salidas', [TrainingCentersController::class, 'dato'])->name('trainingcenter.salidas');
    Route::get('trainingcenter/salidas', [TrainingCentersController::class, 'index'])->name('trainingcenter.index');
    Route::get('trainingcenter/{id}', [TrainingCentersController::class, 'show'])->name('trainingcenter.show');
    Route::get('trainingcenter/{trainingcenter}/editar', [TrainingCentersController::class, 'edit'])->name('trainingcenter.edit');
    Route::put('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'update'])->name('trainingcenter.update');
    Route::delete('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'destroy'])->name('trainingcenter.destroy');

    // ===================== COMPUTADORES =====================
    Route::get('computer/computador', [ComputersController::class, 'create'])->name('computer.computador');
    Route::post('computer/model', [ComputersController::class, 'model'])->name('computer.model');
    Route::get('computer/completado', [ComputersController::class, 'index'])->name('computer.index');
    Route::get('computer/{id}', [ComputersController::class, 'show'])->name('computer.show');
    Route::get('computer/{computer}/editar', [ComputersController::class, 'edit'])->name('computer.edit');
    Route::put('computer/{computer}', [ComputersController::class, 'update'])->name('computer.update');
    Route::delete('computer/{computer}', [ComputersController::class, 'destroy'])->name('computer.destroy');

    // ===================== INSTRUCTORES =====================
    Route::get('teacher/registro', [TeachersController::class, 'create'])->name('teacher.registro');
    Route::post('teacher/admin', [TeachersController::class, 'dato'])->name('teacher.admin');
    Route::get('teacher/admin', [TeachersController::class, 'index'])->name('teacher.index');
    Route::get('teacher/{id}', [TeachersController::class, 'show'])->name('teacher.show');
    Route::get('teacher/{teachers}/editar', [TeachersController::class, 'edit'])->name('teacher.edit');
    Route::put('teacher/{teachers}', [TeachersController::class, 'update'])->name('teacher.update');
    Route::delete('teacher/{teachers}', [TeachersController::class, 'destroy'])->name('teacher.destroy');

    // ===================== CURSOS =====================
    Route::get('course/registro', [CoursesController::class, 'create'])->name('course.registro');
    Route::post('course/admin', [CoursesController::class, 'dato'])->name('course.admin');
    Route::get('course/admin', [CoursesController::class, 'index'])->name('course.index');
    Route::get('course/{id}', [CoursesController::class, 'show'])->name('course.show');
    Route::get('course/{courses}/editar', [CoursesController::class, 'edit'])->name('course.edit');
    Route::put('course/{courses}', [CoursesController::class, 'update'])->name('course.update');
    Route::delete('course/{courses}', [CoursesController::class, 'destroy'])->name('course.destroy');

    // ===================== APRENDICES =====================
    Route::get('apprentice/registro', [ApprenticesController::class, 'create'])->name('aprendiz.registro');
    Route::post('apprentice/admin', [ApprenticesController::class, 'dato'])->name('aprendiz.admin');
    Route::get('apprentice/admin', [ApprenticesController::class, 'index'])->name('aprendiz.index');
    Route::get('apprentice/{id}', [ApprenticesController::class, 'show'])->name('aprendiz.show');
    Route::get('apprentice/{apprentices}/editar', [ApprenticesController::class, 'edit'])->name('aprendiz.edit');
    Route::put('apprentice/{apprentices}', [ApprenticesController::class, 'update'])->name('aprendiz.update');
    Route::delete('apprentice/{apprentices}', [ApprenticesController::class, 'destroy'])->name('aprendiz.destroy');
});

Route::get('noticias', function () {
    return view('Noticias.Noticias');
})->name('noticias.index');

Route::get('uniforme-sena', function () {
    return view('uniforme.informacion');
})->name('uniforme.index');

Route::get('informacion', function () {
    return view('Informacion.Informacion');
})->name('informacion.index');
