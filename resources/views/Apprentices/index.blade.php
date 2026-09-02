<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Aprendices</title>
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
            max-width: 1250px;
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

        @media(max-width:900px) {
            .container {
                width: 95%;
                padding: 20px
            }

            table {
                min-width: 1100px
            }

            .container {
                overflow: hidden
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Listado de Aprendices</h1>
        <table>
            <thead>
                <tr>
                    <th class="numero">#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Curso</th>
                    <th>Computador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($apprentices as $apprentice)
                    <tr>
                        <td class="numero">{{ $loop->iteration }}</td>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>{{ $apprentice->course?->numero_de_curso ?? 'Sin curso' }}</td>
                        <td>{{ $apprentice->computer?->brand ?? 'Sin computador' }}</td>
                        <td class="acciones">
                            <a href="{{ route('aprendiz.show', $apprentice->id) }}" class="mostrar">Mostrar</a>
                            <a href="{{ route('aprendiz.edit', $apprentice->id) }}" class="editar">Editar</a>
                            <form action="{{ route('aprendiz.destroy', $apprentice->id) }}" method="POST">@csrf
                                @method('DELETE')<button type="submit">Eliminar</button></form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align:center;padding:20px">No hay aprendices registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="total">Total de aprendices: {{ count($apprentices) }}</div>
    </div>
</body>

</html>
