<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias-Sena</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #6d7b4c;
            color: #0f2a15;
        }

        .contenedor {
            max-width: 980px;
            margin: 40px auto;
            padding: 20px;
        }

        .anuncio {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(15, 42, 21, 0.12);
            border: 1px solid rgba(57, 169, 0, 0.15);
        }

        .banner {
            background: linear-gradient(135deg, #004d1c 0%, #1a5f2e 35%, #39A900 100%);
            color: #ffffff;
            padding: 34px 28px;
            position: relative;
        }

        .banner::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #39A900, #d9f99d);
        }

        .banner .label {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 999px;
            padding: 8px 14px;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .banner h1 {
            margin: 0;
            font-size: clamp(1.8rem, 3vw, 2.6rem);
            line-height: 1.2;
            color: #fff;
        }

        .contenido {
            padding: 32px 28px 40px;
        }

        .meta {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 22px;
            color: #648b7f;
            font-size: 0.95rem;
        }

        .meta .dot {
            width: 8px;
            height: 8px;
            background: #39A900;
            border-radius: 50%;
        }

        .etiqueta {
            display: inline-block;
            background: #eaf9ea;
            color: #0f6b2b;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            padding: 7px 12px;
            border-radius: 999px;
            margin-bottom: 12px;
        }

        .texto {
            font-size: 1.08rem;
            line-height: 1.9;
            color: #1f2d2b;
        }

        .texto p {
            margin-bottom: 18px;
        }

        .resumen {
            margin-top: 26px;
            padding: 18px 20px;
            background: linear-gradient(135deg, #97af9a, #f3fbf3);
            border-left: 5px solid #39A900;
            border-radius: 14px;
            color: #0f2a15;
            font-weight: 600;
            text-decoration: none;
        }

        .hola {
            margin-top: 26px;
            padding: 18px 20px;
            background: linear-gradient(135deg, #edf7ee, #519851);
            border-radius: 14px;
            color: #0f2a15;
            font-weight: 600;
            text-align: center;

            a {
                color: #0f2a15;
                text-decoration: none;
                font-weight: bold;
            }
        }

        @media (max-width: 768px) {
            .contenedor {
                padding: 12px;
                margin: 20px auto;
            }

            .contenido,
            .banner {
                padding-left: 18px;
                padding-right: 18px;
            }
        }
    </style>
</head>

<body>
    @include('includes.headerFormulario')
    <div class="contenedor">
        <article class="anuncio">
            <div class="banner">
                <span class="label">ofertas</span>
                <div style="margin-top: 28px; display: flex; justify-content: center;">
                    <iframe width="100%" height="420"
                        src="https://www.youtube.com/embed/cxDCYgo-sIo?si=vwVT0oBxdISd5EpF" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <hr>

                <div class="banner">
                    <span class="label">¿Como inscribirse a una formacion sena?</span>
                    <div style="margin-top: 28px; display: flex; justify-content: center;">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/LCmiGnDo6Sw?si=zo8y2LcZKJh_EmEY"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div>
                    </div>
                    <div class="resumen">
                        <p>¡Bienvenido al panel de noticias del SENA! Aquí encontrarás información actualizada sobre
                            eventos, programas y oportunidades de formación. Mantente al día con nuestras últimas
                            noticias y descubre cómo el SENA está transformando la educación y el desarrollo
                            profesional en Colombia.</p>

                        <div class="hola">
                            <a href="https://zajuna.sena.edu.co/">Inscribete ya!</a>
                        </div>
                        <div class="hola">
                            <a href="{{ url('/') }}">Ir al menú principal <i class="fas fa-arrow-right ms-2"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
        </article>

    </div>
</body>

</html>
@include('includes.footerFormulario')
