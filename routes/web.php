<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('noticias', function () {
    return view('Noticias.Noticias');
})->name('noticias.index');

Route::get('uniforme-sena', function () {
    return view('uniforme.informacion');
})->name('uniforme.index');

Route::get('informacion', function () {
    return view('Informacion.Informacion');
})->name('informacion.index');
