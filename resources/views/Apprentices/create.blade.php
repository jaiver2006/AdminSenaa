@extends('layouts.appFormulario')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-center text-white" style="background-color:#004d0f;">
                        <h3 class="mb-0">
                            <i class="fas fa-user-graduate me-2"></i>
                            Registro de Aprendiz
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('aprendiz.admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Nombre
                                </label>
                                <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Correo electrónico
                                </label>
                                <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Número de celular
                                </label>
                                <input type="tel" name="cell_number" class="form-control"
                                    value="{{ old('cell_number') }}" placeholder="3001234567" required>
                                @error('cell_number')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Curso
                                </label>

                                <select name="course_id" class="form-select">
                                    <option value="">Seleccione un curso</option>

                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">
                                            {{ $course->numero_de_curso }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    Computador
                                </label>

                                <select name="computer_id" class="form-select">
                                    <option value="">Seleccione un computador</option>

                                    @foreach ($computers as $computer)
                                        <option value="{{ $computer->id }}">
                                            {{ $computer->number }} - {{ $computer->brand }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="fas fa-save me-2"></i>
                                    Registrar Aprendiz
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
