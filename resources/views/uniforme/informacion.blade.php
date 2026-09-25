<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Uniforme SENA</title>
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

        .about-intro {
            background: linear-gradient(135deg, #12352a, #007a3d);
            color: #fff;
            padding: 32px;
            border-radius: 14px;
            margin-bottom: 24px;
            border-left: 5px solid #39a900;
        }

        .about-intro h1 {
            font-size: clamp(1.7rem, 3vw, 2.4rem);
            margin-bottom: 10px;
        }

        .about-intro p {
            max-width: 780px;
            color: #d9f1df;
            line-height: 1.7;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 24px;
        }

        .about-card,
        .about-contact {
            background: #fff;
            border: 1px solid #e0ebe4;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 8px 22px rgba(18, 53, 42, .06);
        }

        .about-card i {
            display: grid;
            place-items: center;
            width: 44px;
            height: 44px;
            margin-bottom: 14px;
            border-radius: 10px;
            background: #e8f3ed;
            color: #007a3d;
            font-size: 20px;
        }

        .about-card h3,
        .about-contact h3 {
            color: #12352a;
            font-size: 1.15rem;
            margin-bottom: 8px;
        }

        .about-card p,
        .about-contact p {
            color: #688074;
            line-height: 1.6;
            margin: 0;
        }

        .about-contact {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            border-left: 4px solid #39a900;
        }

        .about-contact a {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 8px;
            background: #007a3d;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            white-space: nowrap;
        }

        .about-contact a:hover {
            background: #39a900;
        }

        .uniforme-photos {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin: 24px 0;
        }

        .uniforme-photo {
            overflow: hidden;
            border-radius: 12px;
            background: #fff;
            border: 1px solid #e0ebe4;
            box-shadow: 0 8px 22px rgba(18, 53, 42, .06);
        }

        .uniforme-photo__image {
            display: block;
            width: 100%;
            height: 360px;
            object-fit: contain;
            background: #f2f6f3;
        }

        .uniforme-photo__caption {
            padding: 15px 18px;
            color: #18342a;
            font-weight: 700;
        }

        @media (max-width:800px) {

            .about-grid,
            .uniforme-photos {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width:520px) {
            .about-intro {
                padding: 24px 20px;
            }

            .about-contact {
                align-items: flex-start;
                flex-direction: column;
            }

            .uniforme-photo__image {
                height: 300px;
            }
        }

        body {
            background: #edf6f0;
        }

        .main {
            background: #edf6f0;
        }

        .header h2 {
            color: #12352a;
        }

        .header p {
            color: #617a6d;
        }

        .about-intro {
            background: linear-gradient(135deg, #12352a, #007a3d 68%, #39a900);
            border-left-color: #39a900;
            box-shadow: 0 18px 36px rgba(18, 53, 42, .14);
        }

        .card {
            border-color: #d7e8dc;
            box-shadow: 0 14px 30px rgba(18, 53, 42, .08);
        }

        .card:hover {
            border-color: #39a900;
        }

        .card .icon {
            background: #e7f4eb;
            color: #007a3d;
        }

        .about-contact {
            border-color: #d7e8dc;
            background: #f4faf6;
        }
    </style>
    <title>Layout</title>
</head>

<body>
    @include('includes.navbar')
    <div class="main">
        <div class="header">
            <h2>Uniforme SENA</h2>
            <p>Identidad, presentación y orgullo de pertenecer</p>
        </div>
        <section class="about-intro">
            <h1>Vistamos con orgullo nuestra formación</h1>
            <p>
                El uniforme representa la identidad y el compromiso de nuestra comunidad educativa.
                Conoce las prendas disponibles y las recomendaciones para llevarlo con orgullo en cada ambiente de
                formación.
            </p>
        </section>

        <section class="uniforme-photos" aria-label="Fotografías del uniforme">
            <div class="uniforme-photo">
                <img class="uniforme-photo__image" src="{{ asset('Img/camisa.png') }}" alt="Camisa del uniforme SENA">
                <div class="uniforme-photo__caption">Camisa del uniforme SENA</div>
            </div>
            <div class="uniforme-photo">
                <img class="uniforme-photo__image" src="{{ asset('Img/pantalon.png') }}"
                    alt="Pantalón del uniforme SENA">
                <div class="uniforme-photo__caption">Pantalón del uniforme SENA</div>
            </div>
        </section>

        <section class="about-grid" aria-label="Características del uniforme">
            <article class="about-card">
                <i class="fas fa-id-badge" aria-hidden="true"></i>
                <h3>Identidad institucional</h3>
                <p>Representa el orgullo de pertenecer al SENA y fortalece el sentido de comunidad.</p>
            </article>
            <article class="about-card">
                <i class="fas fa-person-running" aria-hidden="true"></i>
                <h3>Comodidad diaria</h3>
                <p>Una propuesta práctica para las jornadas de formación y las actividades institucionales.</p>
            </article>
            <article class="about-card">
                <i class="fas fa-circle-check" aria-hidden="true"></i>
                <h3>Uso responsable</h3>
                <p>Consulta con tu centro las tallas, disponibilidad y recomendaciones de presentación personal.</p>
            </article>
        </section>

        <section class="about-contact">
            <div>
                <h3>Encuentra tu uniforme SENA</h3>
                <p>Pregunta en tu centro de formación por el proceso de entrega o adquisición.</p>
            </div>
            <a href="{{ url('/') }}">Ir al menú principal <i class="fas fa-arrow-right ms-2"
                    aria-hidden="true"></i></a>
        </section>
    </div>
</body>

</html>
