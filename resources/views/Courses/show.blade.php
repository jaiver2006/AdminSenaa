@extends('layouts.app')

@section('contenido')
    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    Curso #{{ $course->numero_de_curso }}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID</label>
                        <div class="form-control bg-light">
                            {{ $course->id }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Número de Curso</label>
                        <div class="form-control">
                            {{ $course->numero_de_curso }}
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Fecha programada (Día)</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($course->day)->format('d/m/Y') }}
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID de Área </label>
                        <div class="form-control">
                            {{ $course->area_id ?? 'Sin área' }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID Centro de Formación </label>
                        <div class="form-control">
                            {{ $course->training_centers_id ?? 'Sin centro' }}
                        </div>
                    </div>

                </div>

                <hr class="my-4">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Fecha de creación</label>
                        <div class="form-control text-muted bg-light">
                            {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Última actualización</label>
                        <div class="form-control text-muted bg-light">
                            {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i') }}
                        </div>
                    </div>

                </div>

                <div class="mt-4 text-end">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
                </div>

            </div>

        </div>

    </div>
@endsection
