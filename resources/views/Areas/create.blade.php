@extends('layouts.formularioArea')
@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header text-center text-white" style="background-color:#004d0f;">
                        <h3 class="mb-0">
                            <i class="fas fa-layer-group me-2"></i>
                            Registro de Área
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label fw-bold">
                                    Nombre del Área
                                </label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="Escriba el nombre del área">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="fas fa-save me-2"></i>
                                    Registrar Área
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
    <br>
    <br>
    <br>
    <br>
@endsection