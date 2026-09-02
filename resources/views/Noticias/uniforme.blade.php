<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniforme SENA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        .uniforme-page {
            min-height: 100vh;
            background: #f4f7f5;
            color: #18342a;
        }

        .uniforme-wrap {
            max-width: 1120px;
            margin: 0 auto;
            padding: 42px 24px 64px;
        }

        .uniforme-hero {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 34px;
            align-items: center;
            padding: 46px;
            overflow: hidden;
            border-radius: 18px;
            background: linear-gradient(135deg, #12352a 0%, #007a3d 72%, #39a900 100%);
            color: #fff;
            box-shadow: 0 18px 40px rgba(18, 53, 42, .16);
        }

        .uniforme-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
            color: #c9f0cf;
            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .uniforme-hero h1 {
            max-width: 620px;
            margin: 0 0 16px;
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(2rem, 4vw, 3.8rem);
            line-height: 1.05;
        }

        .uniforme-hero p {
            max-width: 590px;
            margin: 0;
            color: #e0f5e4;
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .uniforme-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .uniforme-button {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 12px 17px;
            border-radius: 8px;
            background: #fff;
            color: #007a3d;
            font-weight: 700;
            text-decoration: none;
        }

        .uniforme-button.secondary {
            border: 1px solid rgba(255, 255, 255, .4);
            background: transparent;
            color: #fff;
        }

        .uniforme-visual {
            display: grid;
            place-items: center;
            min-height: 280px;
        }

        .uniforme-badge {
            display: grid;
            place-items: center;
            width: 230px;
            height: 230px;
            border: 1px solid rgba(255, 255, 255, .35);
            border-radius: 50%;
            background: rgba(255, 255, 255, .1);
            box-shadow: 0 0 0 18px rgba(255, 255, 255, .05);
        }

        .uniforme-badge img {
            width: 124px;
            filter: brightness(0) invert(1);
        }

        .uniforme-badge i {
            position: absolute;
            margin: 160px 0 0 150px;
            display: grid;
            place-items: center;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #d9f99d;
            color: #12352a;
            font-size: 22px;
        }

        .uniforme-section-title {
            margin: 42px 0 18px;
        }

        .uniforme-section-title h2 {
            margin: 0 0 6px;
            color: #12352a;
            font-family: 'Space Grotesk', sans-serif;
        }

        .uniforme-section-title p {
            margin: 0;
            color: #688074;
        }

        .uniforme-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .uniforme-card {
            padding: 24px;
            border: 1px solid #e0ebe4;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 8px 22px rgba(18, 53, 42, .06);
        }

        .uniforme-card .card-icon {
            display: grid;
            place-items: center;
            width: 48px;
            height: 48px;
            margin-bottom: 16px;
            border-radius: 11px;
            background: #e8f3ed;
            color: #007a3d;
            font-size: 21px;
        }

        .uniforme-card h3 {
            margin: 0 0 8px;
            color: #18342a;
            font-size: 1.1rem;
        }

        .uniforme-card p {
            margin: 0;
            color: #688074;
            line-height: 1.6;
        }

        .uniforme-note {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 26px;
            padding: 18px 20px;
            border-left: 4px solid #39a900;
            border-radius: 10px;
            background: #e8f3ed;
            color: #315c43;
        }

        .uniforme-note i {
            color: #007a3d;
            font-size: 20px;
        }

        @media (max-width: 800px) {
            .uniforme-hero {
                grid-template-columns: 1fr;
                padding: 32px 24px;
            }

            .uniforme-visual {
                min-height: 220px;
            }

            .uniforme-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 520px) {
            .uniforme-wrap {
                padding: 24px 16px 42px;
            }

            .uniforme-hero h1 {
                font-size: 2.25rem;
            }

            .uniforme-badge {
                width: 190px;
                height: 190px;
            }

            .uniforme-badge img {
                width: 100px;
            }

            .uniforme-badge i {
                margin: 132px 0 0 125px;
            }
        }
    </style>
</head>

<body>
    @include('includes.headerFormulario')

    <main class="uniforme-page">
        <div class="uniforme-wrap">
            <section class="uniforme-hero">
                <div>
                    <span class="uniforme-kicker"><i class="fas fa-star"></i> Identidad SENA</span>
                    <h1>Vistamos con orgullo nuestra formación</h1>
                    <p>
                        El uniforme representa pertenencia, respeto y compromiso con el aprendizaje.
                        Conoce la propuesta institucional para acompañarte en cada ambiente de formación.
                    </p>
                    <div class="uniforme-actions">
                        <a class="uniforme-button" href="{{ route('informacion.index') }}">
                            Conocer más <i class="fas fa-arrow-right"></i>
                        </a>
                        <a class="uniforme-button secondary" href="{{ url('/') }}">
                            Volver al inicio
                        </a>
                    </div>
                </div>
                <div class="uniforme-visual" aria-label="Identidad visual SENA">
                    <div class="uniforme-badge">
                        <img src="{{ asset('Img/sena-logo.png') }}" alt="Logo del SENA">
                        <i class="fas fa-shirt" aria-hidden="true"></i>
                    </div>
                </div>
            </section>

            <div class="uniforme-section-title">
                <h2>Una prenda con propósito</h2>
                <p>Diseñada para acompañar la vida académica con comodidad e identidad.</p>
            </div>

            <section class="uniforme-grid">
                <article class="uniforme-card">
                    <div class="card-icon"><i class="fas fa-shield-heart"></i></div>
                    <h3>Identidad institucional</h3>
                    <p>Representa el orgullo de pertenecer al SENA y fortalece el sentido de comunidad.</p>
                </article>
                <article class="uniforme-card">
                    <div class="card-icon"><i class="fas fa-person-running"></i></div>
                    <h3>Comodidad diaria</h3>
                    <p>Una propuesta práctica para las jornadas de formación, actividades y ambientes técnicos.</p>
                </article>
                <article class="uniforme-card">
                    <div class="card-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Presentación responsable</h3>
                    <p>Promueve una imagen ordenada, respetuosa y coherente con los valores de la institución.</p>
                </article>
            </section>

            <div class="uniforme-note">
                <i class="fas fa-circle-info"></i>
                <span>Consulta con tu centro de formación la disponibilidad, las tallas y las indicaciones de
                    uso.</span>
            </div>
        </div>
    </main>

    @include('includes.footerFormulario')
</body>

</html>
