<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Iniciar sesión</title>
    <style>
        :root {
            /* Paleta de acceso: verde institucional, lima SENA y acento dorado. */
            --green-deep: #08281e;
            --green-dark: #0f4934;
            --green-main: #007a3d;
            --green-lime: #39a900;
            --green-soft: #e8f5ec;
            --gold: #f2c94c;
            --card-bg: #ffffff;
            --border-soft: #d5e8da;
            --text-dark: #102f23;
            --text-muted: #597467;
            --danger-bg: #f9d9d9;
            --danger-text: #8f1d1d;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            /* Fondo con profundidad para diferenciar el acceso del panel interno. */
            min-height: 100vh;
            display: block;
            padding: 32px 18px;
            background:
                radial-gradient(circle at 12% 18%, rgba(57, 169, 0, 0.25), transparent 23%),
                radial-gradient(circle at 88% 84%, rgba(242, 201, 76, 0.16), transparent 22%),
                linear-gradient(135deg, #08281e 0%, #0d4935 55%, #12352a 100%);
            color: var(--text-dark);
            position: relative;
            overflow: hidden;
        }

        body::before,
        body::after {
            content: '';
            position: fixed;
            width: 280px;
            height: 280px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            pointer-events: none;
        }

        body::before {
            top: -150px;
            right: 8%;
        }

        body::after {
            bottom: -180px;
            left: 7%;
        }

        .login-container {
            /* Tarjeta de login elevada y centrada para una entrada mas clara. */
            width: min(92vw, 520px);
            margin: 0 auto;
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.65);
            border-radius: 26px;
            padding: 42px 50px 34px;
            box-shadow: 0 30px 70px rgba(3, 25, 17, 0.3);
            position: relative;
            z-index: 1;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 7px;
            border-radius: 26px 26px 0 0;
            background: linear-gradient(90deg, var(--green-main), var(--green-lime), var(--gold));
        }

        .brand {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand h1 {
            font-size: clamp(2.7rem, 4vw, 4rem);
            font-weight: 900;
            letter-spacing: 0.04em;
            line-height: 1.1;
            color: var(--green-dark);
        }

        .brand p {
            margin-top: 8px;
            font-size: 1.05rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .title {
            margin: 26px 0 24px;
            font-size: clamp(2.1rem, 3vw, 2.8rem);
            line-height: 1.2;
            font-weight: 800;
            color: var(--green-deep);
            text-align: left;
        }

        .alert {
            background: var(--danger-bg);
            border: 1px solid #f4b7b7;
            color: var(--danger-text);
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 12px;
            padding: 18px 16px;
            margin-bottom: 26px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            display: block;
            font-size: 1.05rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            border: 1px solid var(--border-soft);
            background: #f8fcf9;
            border-radius: 12px;
            padding: 16px 15px;
            font-size: 1.1rem;
            color: var(--text-dark);
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: var(--green-lime);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(57, 169, 0, 0.14);
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 4px 0 14px;
            font-size: 1rem;
            color: var(--text-muted);
        }

        .remember input {
            width: 18px;
            height: 18px;
            accent-color: var(--green-lime);
        }

        button {
            width: 100%;
            border: none;
            border-radius: 12px;
            background: linear-gradient(100deg, var(--green-deep), var(--green-main));
            color: white;
            padding: 17px 20px;
            font-size: 1.15rem;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(0, 122, 61, 0.22);
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        button:hover {
            transform: translateY(-2px);
            background: linear-gradient(100deg, var(--green-main), var(--green-lime));
            box-shadow: 0 14px 25px rgba(0, 122, 61, 0.28);
        }

        .meta {
            text-align: center;
            color: var(--text-muted);
            margin-top: 24px;
            font-size: 1.08rem;
            font-weight: 500;
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 36px 22px 26px;
            }

            .title {
                font-size: 2rem;
            }

            .brand h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="brand">
            <h1>SENA</h1>
            <p>Panel Administrativo</p>
        </div>

        <h2 class="title">Iniciar sesión</h2>

        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            <label class="remember">
                <input type="checkbox" name="remember">
                Mantener sesión iniciada
            </label>

            <button type="submit">Entrar</button>
        </form>

        <div class="meta">Acceso exclusivo para administradores</div>
    </div>

    @include('includes.footerFormulario')
</body>

</html>
