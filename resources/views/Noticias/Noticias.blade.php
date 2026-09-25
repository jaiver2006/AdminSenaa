@extends('layouts.app')

@section('Titulo', 'Noticias')

@section('contenido')
    <style>
        * {
            box-sizing: border-box;
        }

        .contenedor {
            max-width: 980px;
            margin: 20px auto 40px;
            padding: 20px;
        }

        .anuncio {
            background: #ffffff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 16px 40px rgba(15, 42, 21, 0.12);
            border: 1px solid rgba(57, 169, 0, 0.12);
        }

        .news-banner {
            background: linear-gradient(135deg, #004d1c 0%, #1a5f2e 35%, #39A900 100%);
            color: #ffffff;
            padding: 34px 28px 28px;
            position: relative;
        }

        .news-banner::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #39A900, #d9f99d);
        }

        .label {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 999px;
            padding: 8px 14px;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .news-embed {
            margin-top: 22px;
            display: flex;
            justify-content: center;
        }

        .news-embed iframe {
            width: 100%;
            max-width: 100%;
            min-height: 420px;
            border: 0;
            border-radius: 16px;
        }

        .contenido-noticia {
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

        .resumen {
            margin-top: 26px;
            padding: 22px 24px;
            background: linear-gradient(135deg, #edf7ee, #d8efe1);
            border-left: 5px solid #39A900;
            border-radius: 16px;
            color: #0f2a15;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(23, 54, 31, 0.06);
        }

        .resumen p {
            margin: 0;
            line-height: 1.8;
        }

        .acciones {
            display: grid;
            grid-template-columns: repeat(2, minmax(220px, 1fr));
            gap: 16px;
            margin-top: 24px;
        }

        .hola {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 62px;
            padding: 18px 20px;
            border-radius: 14px;
            text-align: center;
            background: linear-gradient(135deg, #0f2a1e, #123d2d);
            box-shadow: 0 12px 22px rgba(16, 42, 30, 0.18);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hola:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 28px rgba(16, 42, 30, 0.22);
        }

        .hola a {
            color: white;
            text-decoration: none;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        @media (max-width: 768px) {
            .contenedor {
                padding: 12px;
                margin: 20px auto;
            }

            .contenido-noticia,
            .news-banner {
                padding-left: 18px;
                padding-right: 18px;
            }

            .news-embed iframe {
                min-height: 260px;
            }

            .acciones {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="contenedor">
        <article class="anuncio">
            <div class="news-banner">
                <span class="label">Ofertas</span>

                <div class="news-embed">
                    <iframe src="https://www.youtube.com/embed/cxDCYgo-sIo?si=vwVT0oBxdISd5EpF" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class="contenido-noticia">
                <div class="meta">
                    <span>Actualidad SENA</span>
                    <span class="dot"></span>
                    <span>Formación</span>
                    <span class="dot"></span>
                    <span>Oportunidades</span>
                </div>

                <span class="etiqueta">¿Cómo inscribirse?</span>

                <div class="news-embed" style="margin-top: 12px;">
                    <iframe src="https://www.youtube.com/embed/LCmiGnDo6Sw?si=zo8y2LcZKJh_EmEY" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>

                <div class="resumen" style="margin-top: 24px;">
                    <p>¡Bienvenido al panel de noticias del SENA! Aquí encontrarás información actualizada sobre eventos,
                        programas y oportunidades de formación. Mantente al día con nuestras últimas noticias y descubre
                        cómo el SENA está transformando la educación y el desarrollo profesional en Colombia.</p>
                </div>

                <div class="acciones">
                    <div class="hola">
                        <a href="https://zajuna.sena.edu.co/">Inscríbete ya</a>
                    </div>

                    <div class="hola">
                        <a href="{{ url('/') }}">
                            Ir al menú principal <i class="fas fa-arrow-right ms-2" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection
