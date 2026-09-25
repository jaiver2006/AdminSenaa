<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --bg-page: #edf5ef;
            --bg-soft: #f6faf7;
            --panel: #ffffff;
            --panel-soft: #f3f8f4;
            --line: #dfece2;
            --green-900: #0d2b22;
            --green-800: #123d2d;
            --green-700: #1d5a3d;
            --green-600: #2d7f4a;
            --green-500: #39a85e;
            --green-200: #dff4e6;
            --text: #1d352d;
            --muted: #62786d;
            --shadow: 0 18px 38px rgba(14, 36, 29, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            display: flex;
            background: var(--bg-page);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
        }

        /* Layout principal del panel: sidebar fijo y contenido independiente. */
        .sidebar {
            width: 290px;
            min-height: 100vh;
            background: linear-gradient(180deg, #0a2d23 0%, #123d2d 38%, #0b241d 100%);
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 20px 0 40px rgba(11, 30, 25, 0.12);
            position: sticky;
            top: 0;
            padding: 30px 18px 24px;
        }

        .brand-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            padding: 0 12px 28px;
            margin-bottom: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.09);
            overflow: hidden;
        }

        .brand-box h1 {
            color: #bfe8c4;
            font-size: 2rem;
            line-height: 1;
            letter-spacing: 0.02em;
        }

        .brand-logo {
            width: 100px !important;
            max-width: 100px !important;
            height: 100px !important;
            max-height: 100px !important;
            border-radius: 0;
            background: transparent;
            display: grid;
            place-items: center;
            overflow: hidden;
        }

        .brand-logo img {
            display: block;
            width: 100px !important;
            max-width: 100px !important;
            height: 100px !important;
            max-height: 100px !important;
            object-fit: contain;
        }

        .brand-box p {
            color: #d2e8d9;
            font-size: 1rem;
        }

        .sidebar-nav {
            margin-top: 10px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
            list-style: none;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(233, 245, 237, 0.9);
            text-decoration: none;
            padding: 12px 14px;
            border-radius: 12px;
            transition: all 0.22s ease;
            border: 1px solid transparent;
            font-weight: 600;
        }

        .nav-item:hover,
        .nav-item.active {
            background: linear-gradient(135deg, rgba(57, 168, 94, 0.18), rgba(255, 255, 255, 0.04));
            border-color: rgba(134, 211, 163, 0.18);
            color: #ffffff;
            transform: translateX(3px);
        }

        .nav-icon {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: rgba(255, 255, 255, 0.06);
            color: #dffcef;
            font-size: 0.96rem;
            flex-shrink: 0;
        }

        .main {
            width: 100%;
            min-height: 100vh;
            padding: 32px 28px 40px;
            background: linear-gradient(180deg, #f0f7f1 0%, #ebf2ec 100%);
        }

        /* Encabezado comun de cada pagina administrativa. */
        .header {
            margin-bottom: 28px;
            padding: 22px 24px;
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid var(--line);
            border-radius: 18px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(6px);
        }

        .header h2 {
            font-size: clamp(1.8rem, 2vw, 2.5rem);
            color: var(--green-900);
            font-weight: 800;
            margin-bottom: 6px;
        }

        .header p {
            color: var(--muted);
            font-size: 0.95rem;
            letter-spacing: 0.03em;
        }

        .banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            background: linear-gradient(135deg, #123d2d 0%, #1c5d3d 55%, #7da781 100%);
            color: white;
            padding: 28px 30px;
            border-radius: 22px;
            margin: 26px 0;
            box-shadow: 0 18px 34px rgba(18, 61, 45, 0.14);
        }

        .banner h1 {
            font-size: clamp(2rem, 2.2vw, 3rem);
            margin-bottom: 10px;
            font-weight: 800;
        }

        .banner p {
            color: rgba(255, 255, 255, 0.88);
            line-height: 1.7;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
        }

        .card {
            background: var(--panel);
            border-radius: 18px;
            padding: 24px;
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 42px rgba(14, 36, 29, 0.1);
        }

        .card .icon {
            width: 58px;
            height: 58px;
            border-radius: 16px;
            background: var(--green-200);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .card .icon i {
            font-size: 1.5rem;
            color: var(--green-700);
        }

        .card p {
            font-size: 2.4rem;
            font-weight: 800;
            color: var(--green-900);
            line-height: 1.2;
        }

        @media (max-width: 980px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                position: relative;
            }

            .main {
                padding-top: 20px;
            }
        }
    </style>
    @vite('resources/css/app.css')
    <title>Layout</title>
</head>

<body>
    {{-- Sidebar lateral del panel, conservado como navegacion principal. --}}
    @include('includes.navbar')
    <div class="main">
        <div class="header">
            <h2>@yield('Titulo', 'Sena')</h2>
            <p>Gestión Académica SENA</p>
        </div>
        @yield('contenido')
        @include('includes.footerFormulario')
    </div>
</body>

</html>
