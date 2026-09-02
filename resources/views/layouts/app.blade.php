<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            background: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .main {
            margin-left: 50px;
            width: 100%;
            min-height: 100vh;
            padding: 35px;
            background: #f1f5f9;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h2 {
            font-size: 2rem;
            color: #0f2a15;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .header p {
            color: #648b7f;
            font-size: 1rem;
        }

        .banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            max-width: 100%;
            background: linear-gradient(135deg, #1a3e1a, #778e81);
            color: white;
            padding: 30px;
            border-radius: 18px;
            margin: 30px 0;
            border-left: 6px solid #0a512b;
            box-shadow:
                0 10px 25px rgba(0, 0, 0, .12);
        }

        .banner h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .banner p {
            color: #cbe1d2;
            line-height: 1.6;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: #fff;
            border-radius: 18px;
            padding: 25px;
            border: none;
            box-shadow:
                0 8px 20px rgba(15, 42, 26, 0.06);
            transition: .3s;
            position: relative;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow:
                0 15px 35px rgba(15, 42, 25, 0.12);
        }

        .card .icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: #eff6ff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .card .icon i {
            color: #9ed0af;
            font-size: 26px;
        }

        .card:hover .icon {
            background: #9ed0af;
        }

        .card:hover .icon i {
            color: white;
        }

        .card p {
            font-size: 2.8rem;
            font-weight: bold;
            color: #0f2a17;
        }

        .sidebar {
            width: 300px;
            background: #0f2a1e;
            border-right: 1px solid #1e3b2a;
        }

        .logo {
            padding: 30px 20px;
            text-align: center;
        }

        .logo h1 {
            color: #9ed0af;
            font-size: 2rem;
        }

        .logo p {
            color: #94b89e;
        }

        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .sidebar .menu li {
            padding: 4px 12px;
            list-style: none;
        }

        .sidebar .menu li a {
            border-radius: 12px;
            text-decoration: none;
            color: white;
            transition: .3s;
        }
    </style>
    @vite('resources/css/app.css')
    <title>Layout</title>
</head>

<body>
    @include('includes.navbar')
    <div class="main">
        <div class="header">
            <h2>@yield('Titulo', 'Sena')</h2>
            <p>Gestión Académica SENA</p>
        </div>
        @yield('contenido')
    </div>
</body>

</html>
