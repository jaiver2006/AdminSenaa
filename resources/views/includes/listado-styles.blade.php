<style>
    /* Estilo compartido para todos los listados CRUD del sistema. */
    body {
        align-items: flex-start !important;
        padding: 52px 24px !important;
        background:
            radial-gradient(circle at 8% 12%, rgba(57, 169, 0, .13), transparent 26%),
            radial-gradient(circle at 92% 88%, rgba(242, 201, 76, .12), transparent 24%),
            linear-gradient(135deg, #eaf5ee 0%, #f6fbf7 52%, #e2f0e7 100%) !important;
    }

    body::before {
        content: '';
        position: fixed;
        width: 320px;
        height: 320px;
        top: -190px;
        right: 8%;
        border: 1px solid rgba(0, 122, 61, .08);
        border-radius: 50%;
        pointer-events: none;
    }

    .container {
        width: min(1180px, 100%) !important;
        max-width: none !important;
        padding: 34px 36px 28px !important;
        border-radius: 24px !important;
        border: 1px solid #d2e6d8 !important;
        box-shadow: 0 24px 55px rgba(18, 53, 42, .12) !important;
        position: relative;
        overflow: hidden !important;
        z-index: 1;
    }

    .container::before {
        content: '';
        display: block;
        height: 6px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        background: linear-gradient(90deg, #12352a, #007a3d 58%, #39a900, #f2c94c);
    }

    .list-heading {
        align-items: center !important;
        margin: 0 0 28px !important;
        padding: 2px 2px 18px;
        border-bottom: 1px solid #e1eee4;
    }

    .list-heading h1 {
        font-size: clamp(1.7rem, 3vw, 2.35rem) !important;
        color: #12352a !important;
        letter-spacing: -.02em;
    }

    .list-heading h1::after {
        content: '';
        display: block;
        width: 48px;
        height: 4px;
        margin-top: 9px;
        border-radius: 20px;
        background: #39a900;
    }

    .create-button {
        /* Acceso visual al formulario de creacion de cada modulo. */
        white-space: nowrap;
        padding: 12px 18px !important;
        border-radius: 12px !important;
        background: linear-gradient(110deg, #007a3d, #39a900) !important;
        box-shadow: 0 10px 20px rgba(0, 122, 61, .2) !important;
    }

    .list-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .home-button {
        /* Regreso directo al dashboard principal. */
        display: inline-flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
        padding: 12px 16px;
        border: 1px solid #cfe3d5;
        border-radius: 12px;
        background: #f4faf6;
        color: #145538;
        font-size: .9rem;
        font-weight: 800;
        text-decoration: none;
        transition: transform .2s ease, background .2s ease, box-shadow .2s ease;
    }

    .home-button:hover {
        color: #12352a;
        background: #e7f4eb;
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(18, 53, 42, .12);
    }

    table {
        border-collapse: separate !important;
        border-spacing: 0;
        border: 1px solid #dcebe0;
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
    }

    thead {
        background: linear-gradient(110deg, #0b2b21, #007a3d 72%, #168b4c) !important;
    }

    thead th {
        padding: 17px 16px !important;
        border: 0;
        color: #fff;
        font-size: .82rem !important;
        letter-spacing: .04em;
        text-transform: uppercase;
    }

    tbody td {
        padding: 17px 16px !important;
        border-bottom: 1px solid #e4eee7 !important;
        color: #254438;
        font-size: .94rem;
    }

    tbody tr:last-child td {
        border-bottom: 0 !important;
    }

    tbody tr:nth-child(even) {
        background: #f7fbf8 !important;
    }

    tbody tr:hover {
        background: #e9f7ed !important;
    }

    tbody td[colspan] {
        padding: 30px 16px !important;
        color: #698276;
        font-style: italic;
    }

    .numero {
        color: #557265;
    }

    .total {
        margin: 20px 0 0 !important;
        padding: 10px 14px;
        color: #1d5c3c !important;
        font-size: .88rem;
        font-weight: 800 !important;
        text-align: right;
    }

    .acciones {
        gap: 8px !important;
    }

    .acciones a,
    .acciones button {
        min-width: 88px !important;
        min-height: 38px !important;
        padding: 9px 13px !important;
        border-radius: 10px !important;
        font-size: .8rem !important;
        box-shadow: 0 6px 14px rgba(18, 53, 42, .13) !important;
    }

    @media (max-width: 700px) {
        body {
            padding: 22px 12px !important;
        }

        .container {
            padding: 28px 16px 20px !important;
        }

        .list-heading {
            align-items: flex-start !important;
        }

        .list-actions {
            width: 100%;
        }

        table {
            min-width: 760px;
        }

        .container {
            overflow-x: auto !important;
        }
    }
</style>
