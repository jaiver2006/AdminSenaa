@extends('layouts.appFormulario')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-center text-white" style="background-color:#004d0f;">
                        <h3 class="mb-0">
                            <i class="fas fa-chalkboard-user me-2"></i>
                            Registro de Instructor
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('teacher.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Nombre
                                </label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Ingrese el nombre del instructor">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Correo Electrónico
                                </label>
                                <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Área
                                </label>
                                <select name="area_id" id="area_id" class="form-select">
                                    <option value="">Seleccione un área</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">
                                            {{ $area->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    Centro de Formación
                                </label>
                                <select name="training_centers_id" class="form-select">
                                    <option value="">Seleccione un centro de formación</option>
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
                                    Registrar Instructor
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
