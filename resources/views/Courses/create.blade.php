@extends('layouts.appFormulario')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-header text-center text-white" style="background-color:#004d11;">
                    <h3 class="mb-0">
                        <i class="fas fa-book me-2"></i>
                        Registro de Curso
                    </h3>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('course.admin') }}" method="POST">
                        @csrf

                        <!-- Número del curso -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Número del Curso
                            </label>

                            <input
                                type="number"
                                name="numero_de_curso"
                                class="form-control"
                                placeholder="Ingrese el número del curso"
                                required>
                        </div>


                        <!-- Fecha -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Fecha
                            </label>

                            <input
                                type="date"
                                name="day"
                                class="form-control"
                                required>
                        </div>


                        <!-- Área -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Área
                            </label>

                            <select 
                                name="area_id" 
                                class="form-select"
                                required>

                                <option value="">
                                    Seleccione un área
                                </option>

                                @foreach ($areas as $area)

                                    <option value="{{ $area->id }}">
                                        {{ $area->name }}
                                    </option>

                                @endforeach

                            </select>
                        </div>


                        <!-- Centro de formación -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                Centro de Formación
                            </label>

                            <select 
                                name="training_centers_id" 
                                class="form-select"
                                required>

                                <option value="">
                                    Seleccione un centro de formación
                                </option>

                                @foreach ($trainingCenters as $training)

                                    <option value="{{ $training->id }}">
                                        {{ $training->name }}
                                    </option>

                                @endforeach

                            </select>
                        </div>


                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save me-2"></i>
                                Registrar Curso
                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

<br>
<br>

@endsection