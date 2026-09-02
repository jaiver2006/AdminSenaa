@extends('layouts.app')
@section('Titulo', 'Panel de Administración')
@section('contenido')
    <div class="banner">
        <h1>Bienvenido Administrador</h1>
        <p>
            Desde este panel podrás administrar cursos, aprendices,
            instructores, centros de formación y equipos.
        </p>
    </div>
    <div class="dashboard-info">
        <div class="dashboard-info__heading">
            <h3>Resumen del sistema</h3>
            <span>Información general</span>
        </div>
        <div class="dashboard-info__row">
            <span><i class="fas fa-user-graduate"></i> Aprendices registrados</span>
            <strong>150</strong>
        </div>
        <div class="dashboard-info__row">
            <span><i class="fas fa-chalkboard-user"></i> Instructores activos</span>
            <strong>25</strong>
        </div>
        <div class="dashboard-info__row">
            <span><i class="fas fa-book"></i> Cursos disponibles</span>
            <strong>35</strong>
        </div>
        <div class="dashboard-info__row">
            <span><i class="fas fa-desktop"></i> Equipos registrados</span>
            <strong>80</strong>
        </div>
    </div>
@endsection
