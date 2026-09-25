@extends('layouts.app')
@section('Titulo', 'Panel de Administración')
@section('contenido')
    <style>
        /* Estilos propios del dashboard: bienvenida, accesos rapidos y resumen. */
        .dashboard-shell {
            display: grid;
            gap: 24px;
        }

        .welcome-banner {
            background: linear-gradient(135deg, #0c382d, #1d5a3d 60%, #6e9d7b);
            color: white;
            border-radius: 20px;
            padding: 28px 30px;
            box-shadow: 0 18px 35px rgba(15, 42, 26, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .welcome-banner__top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .welcome-banner h1 {
            margin: 0;
            font-size: clamp(2rem, 2vw, 3rem);
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        .welcome-banner p {
            margin-top: 12px;
            max-width: 760px;
            color: rgba(255, 255, 255, 0.88);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .welcome-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 18px;
        }

        .welcome-badges span {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 999px;
            padding: 8px 12px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(200px, 1fr));
            gap: 18px;
        }

        .quick-card-link {
            color: inherit;
            text-decoration: none;
        }

        .quick-card {
            background: #fff;
            border: 1px solid #dfe9e1;
            border-radius: 18px;
            padding: 22px 20px;
            box-shadow: 0 10px 24px rgba(18, 47, 37, 0.04);
            min-height: 190px;
            transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .quick-card-link:hover .quick-card {
            transform: translateY(-5px);
            border-color: #39a900;
            box-shadow: 0 16px 30px rgba(18, 47, 37, 0.12);
        }

        .quick-card__icon {
            width: 52px;
            height: 52px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: #eaf6ef;
            color: #1a5a3a;
            font-size: 1.25rem;
            margin-bottom: 18px;
        }

        .quick-card h3 {
            margin: 0 0 8px;
            font-size: 1.05rem;
            color: #173126;
        }

        .quick-card p {
            margin: 0;
            color: #60766c;
            font-size: 0.92rem;
            line-height: 1.5;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 22px;
        }

        .panel {
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid #dfe9e1;
            border-radius: 18px;
            padding: 22px 20px;
            box-shadow: 0 10px 26px rgba(18, 47, 37, 0.04);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 1px solid #e2e9e3;
        }

        .panel-header h3 {
            margin: 0;
            font-size: 1.25rem;
            color: #173126;
        }

        .badge {
            padding: 7px 12px;
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 700;
            background: #edf7ef;
            color: #1d5b3d;
        }

        .stats-list {
            display: grid;
            gap: 12px;
        }

        .stats-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 16px;
            background: #f7faf8;
            border: 1px solid #edf2ee;
            border-radius: 12px;
        }

        .stats-item__label {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1f352d;
            font-weight: 700;
        }

        .stats-item__label i {
            color: #2d7f4a;
            font-size: 1.1rem;
        }

        .stats-item strong {
            font-size: 1.85rem;
            color: #0f2a1e;
        }

        .activity-list {
            display: grid;
            gap: 14px;
        }

        .activity-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 12px 10px;
            border-radius: 12px;
            background: #f8faf8;
            border: 1px solid #edf2ee;
        }

        .activity-item .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #39a900;
            margin-top: 4px;
            flex-shrink: 0;
        }

        .activity-item p {
            margin: 0;
            color: #1d3129;
            line-height: 1.55;
        }

        .activity-item span {
            display: block;
            margin-top: 4px;
            color: #60766c;
            font-size: 0.8rem;
        }

        @media (max-width: 980px) {
            .quick-grid {
                grid-template-columns: repeat(2, minmax(200px, 1fr));
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .quick-grid {
                grid-template-columns: 1fr;
            }

            .welcome-banner {
                padding: 22px 20px;
            }
        }
    </style>

    <div class="dashboard-shell">
        <div class="welcome-banner">
            <div class="welcome-banner__top">
                <div>
                    <h1>Bienvenido Administrador</h1>
                    <p>
                        Desde este panel podrás administrar cursos, aprendices, instructores,
                        centros de formación y equipos de manera centralizada.
                    </p>
                </div>
            </div>
            <div class="welcome-badges">
                <span>Gestión académica</span>
                <span>Monitoreo activo</span>
                <span>Actualización en tiempo real</span>
            </div>
        </div>

        {{-- Cada tarjeta funciona como acceso directo al listado de su modulo. --}}
        <div class="quick-grid">
            <a class="quick-card-link" href="{{ route('area.index') }}">
                <div class="quick-card">
                    <div class="quick-card__icon"><i class="fas fa-layer-group"></i></div>
                    <h3>Áreas</h3>
                    <p>Consulta y administra las áreas registradas.</p>
                </div>
            </a>

            <a class="quick-card-link" href="{{ route('trainingcenter.index') }}">
                <div class="quick-card">
                    <div class="quick-card__icon"><i class="fas fa-building"></i></div>
                    <h3>Centros</h3>
                    <p>Revisa los centros de formación disponibles.</p>
                </div>
            </a>

            <a class="quick-card-link" href="{{ route('aprendiz.index') }}">
                <div class="quick-card">
                    <div class="quick-card__icon"><i class="fas fa-user-graduate"></i></div>
                    <h3>Aprendices</h3>
                    <p>Consulta los estudiantes activos y sus registros.</p>
                </div>
            </a>

            <a class="quick-card-link" href="{{ route('teacher.index') }}">
                <div class="quick-card">
                    <div class="quick-card__icon"><i class="fas fa-chalkboard-user"></i></div>
                    <h3>Instructores</h3>
                    <p>Consulta el personal docente y sus asignaturas.</p>
                </div>
            </a>

            <a class="quick-card-link" href="{{ route('course.index') }}">
                <div class="quick-card">
                    <div class="quick-card__icon"><i class="fas fa-book"></i></div>
                    <h3>Cursos</h3>
                    <p>Consulta los programas y cursos disponibles.</p>
                </div>
            </a>

            <a class="quick-card-link" href="{{ route('computer.index') }}">
                <div class="quick-card">
                    <div class="quick-card__icon"><i class="fas fa-desktop"></i></div>
                    <h3>Equipos</h3>
                    <p>Consulta el inventario de recursos tecnológicos.</p>
                </div>
            </a>
        </div>

        {{-- Los valores del resumen llegan desde los modelos mediante la ruta dashboard. --}}
        <div class="dashboard-grid">
            <div class="panel">
                <div class="panel-header">
                    <h3>Resumen del sistema</h3>
                    <span class="badge">Información general</span>
                </div>

                <div class="stats-list">
                    <div class="stats-item">
                        <div class="stats-item__label">
                            <i class="fas fa-user-graduate"></i>
                            <span>Aprendices registrados</span>
                        </div>
                        {{-- Estas variables son los count() reales enviados por la ruta. --}}
                        <strong>{{ $apprenticesCount }}</strong>
                    </div>

                    <div class="stats-item">
                        <div class="stats-item__label">
                            <i class="fas fa-chalkboard-user"></i>
                            <span>Instructores activos</span>
                        </div>
                        <strong>{{ $teachersCount }}</strong>
                    </div>

                    <div class="stats-item">
                        <div class="stats-item__label">
                            <i class="fas fa-book"></i>
                            <span>Cursos disponibles</span>
                        </div>
                        <strong>{{ $coursesCount }}</strong>
                    </div>

                    <div class="stats-item">
                        <div class="stats-item__label">
                            <i class="fas fa-desktop"></i>
                            <span>Equipos registrados</span>
                        </div>
                        <strong>{{ $computersCount }}</strong>
                    </div>
                </div>
            </div>

            <div class="panel">
                <div class="panel-header">
                    <h3>Actividad reciente</h3>
                    <span class="badge">Hoy</span>
                </div>

                {{-- La actividad se genera con los ultimos registros reales de la base de datos. --}}
                <div class="activity-list">
                    @forelse ($recentActivities as $activity)
                        <div class="activity-item">
                            <span class="dot"></span>
                            <div>
                                <p>{{ $activity['message'] }}</p>
                                {{-- El ternario evita llamar diffForHumans() cuando created_at es null. --}}
                                <span>{{ $activity['date'] ? $activity['date']->diffForHumans() : 'Fecha no disponible' }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="activity-item">
                            <span class="dot"></span>
                            <div>
                                <p>Aún no hay actividad registrada.</p>
                                <span>Cuando crees un registro aparecerá aquí.</span>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
