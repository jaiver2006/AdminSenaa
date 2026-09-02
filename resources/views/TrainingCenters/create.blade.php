@extends('layouts.formularioCentros')
@section('formulario')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header text-center text-white" style="background-color:#004d0f;">
                        <h3 class="mb-0">
                            <i class="fas fa-building me-2"></i>
                            Registro del Centro de Formación
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('trainingcenter.salidas') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Nombre del Centro
                                </label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Ej. Centro de Innovación">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    Ubicación
                                </label>
                                <input
                                    type="text"
                                    name="location"
                                    class="form-control"
                                    placeholder="Ej. Bloque B, Piso 2">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="fas fa-save me-2"></i>
                                    Registrar Centro
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