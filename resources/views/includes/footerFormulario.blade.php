<style>
    .admin-footer {
        position: relative;
        margin-top: 48px;
        overflow: hidden;
        color: #eaf8ee;
        background: linear-gradient(135deg, #08281e, #123d2d 62%, #007a3d);
        border-top: 5px solid #39a900;
    }

    .admin-footer::before {
        content: '';
        position: absolute;
        width: 260px;
        height: 260px;
        right: -100px;
        top: -160px;
        border: 1px solid rgba(255, 255, 255, .13);
        border-radius: 50%;
    }

    .admin-footer__content {
        position: relative;
        display: grid;
        grid-template-columns: 1.35fr 1fr 1fr;
        gap: 34px;
        padding: 42px max(24px, 5vw) 36px;
    }

    .admin-footer__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #a9e9b4;
        font-size: .76rem;
        font-weight: 800;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .footer-logo {
        display: block;
        width: 78px !important;
        height: 78px !important;
        max-width: 78px !important;
        max-height: 78px !important;
        margin-bottom: 12px;
        object-fit: contain;
    }

    .admin-footer h2 {
        margin: 12px 0 10px;
        color: #fff;
        font-size: clamp(1.5rem, 3vw, 2.2rem);
        font-weight: 800;
    }

    .admin-footer p {
        max-width: 430px;
        margin: 0;
        color: rgba(234, 248, 238, .78);
        line-height: 1.7;
    }

    .admin-footer h3 {
        margin: 4px 0 15px;
        color: #fff;
        font-size: 1rem;
    }

    .footer-links {
        display: grid;
        gap: 10px;
    }

    .footer-links a,
    .footer-contact {
        display: flex;
        align-items: center;
        gap: 10px;
        color: rgba(234, 248, 238, .78);
        font-size: .9rem;
        text-decoration: none;
        transition: color .2s ease, transform .2s ease;
    }

    .footer-links a:hover {
        color: #fff;
        transform: translateX(4px);
    }

    .footer-links i,
    .footer-contact i {
        width: 18px;
        color: #8fe49b;
        text-align: center;
    }

    .footer-status {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 18px;
        padding: 8px 12px;
        border: 1px solid rgba(143, 228, 155, .25);
        border-radius: 999px;
        color: #c9f5d0;
        background: rgba(57, 169, 0, .14);
        font-size: .78rem;
        font-weight: 700;
    }

    .footer-status__dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #64e879;
        box-shadow: 0 0 0 4px rgba(100, 232, 121, .12);
    }

    .admin-footer__bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 16px max(24px, 5vw);
        border-top: 1px solid rgba(255, 255, 255, .1);
        color: rgba(234, 248, 238, .65);
        font-size: .8rem;
    }

    .footer-top-button {
        display: inline-grid;
        width: 38px;
        height: 38px;
        place-items: center;
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 10px;
        color: #fff;
        background: rgba(255, 255, 255, .08);
        cursor: pointer;
        transition: background .2s ease, transform .2s ease;
    }

    .footer-top-button:hover {
        background: #39a900;
        transform: translateY(-2px);
    }

    @media (max-width: 800px) {
        .admin-footer__content {
            grid-template-columns: 1fr 1fr;
        }

        .admin-footer__brand {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 560px) {
        .admin-footer__content {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .admin-footer__brand {
            grid-column: auto;
        }

        .admin-footer__bottom {
            align-items: flex-start;
            flex-direction: column;
        }
    }
</style>

<footer class="admin-footer">
    <div class="admin-footer__content">
        <div class="admin-footer__brand">
            <img class="footer-logo" src="{{ asset('Img/sena-logo.png') }}" alt="Logo SENA" width="78" height="78">
            <span class="admin-footer__eyebrow"><i class="fas fa-leaf"></i> Comunidad SENA</span>
            <h2>Formación que transforma.</h2>
            <p>
                Un espacio para organizar la información académica, acompañar los procesos de formación
                y mantener cada recurso bajo control.
            </p>
            <span class="footer-status"><span class="footer-status__dot"></span> Sistema operativo</span>
        </div>

        <div>
            <h3>Accesos rápidos</h3>
            <nav class="footer-links" aria-label="Accesos rápidos">
                <a href="{{ route('dashboard') }}"><i class="fas fa-house"></i> Panel principal</a>
                <a href="{{ route('noticias.index') }}"><i class="fas fa-newspaper"></i> Noticias</a>
                <a href="{{ route('informacion.index') }}"><i class="fas fa-circle-info"></i> Conócenos</a>
                <a href="{{ route('uniforme.index') }}"><i class="fas fa-shirt"></i> Uniforme SENA</a>
            </nav>
        </div>

        <div>
            <h3>Centro de atención</h3>
            <div class="footer-links">
                <span class="footer-contact"><i class="fas fa-headset"></i> Soporte administrativo</span>
                <span class="footer-contact"><i class="fas fa-clock"></i> Lunes a viernes · 8:00 a 17:00</span>
                <span class="footer-contact"><i class="fas fa-location-dot"></i> Centros de formación SENA</span>
            </div>
        </div>
    </div>

    <div class="admin-footer__bottom">
        <span>© {{ date('Y') }} SENA · Gestión Académica</span>
        <button class="footer-top-button" type="button" title="Volver arriba" aria-label="Volver arriba"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
</footer>
