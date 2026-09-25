<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cursos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif
        }

        body {
            background: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh
        }

        .container {
            width: 80%;
            max-width: 1100px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .15)
        }

        h1 {
            text-align: center;
            color: #25eb71;
            margin-bottom: 25px
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px
        }

        thead {
            background: #25eb53;
            color: white
        }

        thead th {
            padding: 15px;
            text-align: left;
            font-size: 18px
        }

        tbody td {
            padding: 15px;
            border-bottom: 1px solid #ddd
        }

        tbody tr:nth-child(even) {
            background: #f8fafc
        }

        tbody tr:hover {
            background: #dbeafe;
            transition: .3s
        }

        .numero {
            width: 70px;
            text-align: center;
            font-weight: bold
        }

        .acciones {
            display: flex;
            gap: 10px;
            align-items: center;
            white-space: nowrap
        }

        .acciones a {
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block
        }

        .mostrar {
            background: #25eb67
        }

        .mostrar:hover {
            background: #1dd852
        }

        .editar {
            background: #f59e0b
        }

        .editar:hover {
            background: #d97706
        }

        button {
            background: #dc2626;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold
        }

        button:hover {
            background: #b91c1c
        }

        form {
            display: inline
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
            color: #555
        }

        body {
            background: #edf6f0;
        }

        .container {
            background: #ffffff;
            border: 1px solid #d7e8dc;
            box-shadow: 0 18px 36px rgba(18, 53, 42, .10);
        }

        h1 {
            color: #007a3d;
        }

        thead {
            background: linear-gradient(135deg, #12352a, #007a3d);
        }

        tbody td {
            border-bottom-color: #d7e8dc;
        }

        tbody tr:nth-child(even) {
            background: #f4faf6;
        }

        tbody tr:hover {
            background: #e7f4eb;
        }

        .mostrar {
            background: #007a3d;
        }

        .mostrar:hover {
            background: #278000;
        }

        .editar {
            background: #f2c94c;
            color: #12352a;
        }

        .editar:hover {
            background: #dcae24;
        }

        .acciones a,
        .acciones button {
            min-width: 92px;
            min-height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 10px;
            font-size: .88rem;
            font-weight: 800;
            box-shadow: 0 5px 12px rgba(18, 53, 42, .12);
            transition: transform .2s ease, box-shadow .2s ease, filter .2s ease;
        }

        .acciones a:hover,
        .acciones button:hover {
            transform: translateY(-2px);
            filter: brightness(1.04);
            box-shadow: 0 8px 16px rgba(18, 53, 42, .18);
        }

        .acciones button {
            background: linear-gradient(135deg, #c62828, #e53935);
            color: #fff;
            cursor: pointer;
        }

        .list-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 24px;
        }

        .list-heading h1 {
            margin: 0;
            text-align: left;
        }

        .create-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 17px;
            border-radius: 11px;
            background: linear-gradient(135deg, #007a3d, #39a900);
            color: #fff;
            font-size: .9rem;
            font-weight: 800;
            text-decoration: none;
            box-shadow: 0 8px 16px rgba(0, 122, 61, .2);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .create-button:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 22px rgba(0, 122, 61, .28);
        }

        @media (max-width: 640px) {
            .list-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .list-heading h1 {
                font-size: 1.6rem;
            }
        }
    </style>
    @include('includes.listado-styles')
</head>

<body>
    <div class="container">
        <div class="list-heading">
            <h1>Listado de Cursos</h1>
            <div class="list-actions">
                <a class="home-button" href="{{ route('dashboard') }}"><i class="fas fa-house"></i> Inicio</a>
                <a class="create-button" href="{{ route('course.registro') }}"><i class="fas fa-plus"></i> Crear
                    curso</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="numero">#</th>
                    <th>Número del Curso</th>
                    <th>Día</th>
                    <th>Área</th>
                    <th>Centro de Formación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $course)
                    <tr>
                        <td class="numero">{{ $loop->iteration }}</td>
                        <td>{{ $course->numero_de_curso }}</td>
                        <td>{{ $course->day }}</td>
                        <td>{{ $course->area?->name ?? 'Sin área' }}</td>
                        <td>{{ $course->training_center?->name ?? 'Sin centro' }}</td>
                        <td class="acciones">
                            <a href="{{ route('course.show', $course->id) }}" class="mostrar">Mostrar</a>
                            <a href="{{ route('course.edit', $course->id) }}" class="editar">Editar</a>
                            <form action="{{ route('course.destroy', $course->id) }}" method="POST">@csrf
                                @method('DELETE')<button type="submit">Eliminar</button></form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align:center;padding:20px">No hay cursos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="total">Total de cursos: {{ count($courses) }}</div>
    </div>
</body>

</html>
