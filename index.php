<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amantes de Café — Cafés & Docerias</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet" />

    <!-- ============================================================
       ESTILOS GLOBAIS (CSS)
  ============================================================ -->
    <style>
        /* ── Reset & Variáveis ── */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cream: #F5F0E8;
            --espresso: #2C1810;
            --caramel: #C8873A;
            --latte: #D4A96A;
            --foam: #FBF6ED;
            --bark: #6B3D1E;
            --muted: #9A8070;
            --card-bg: #FFFFFF;
            --border: rgba(44, 24, 16, 0.10);
            --shadow: rgba(44, 24, 16, 0.12);
            --success-bg: #2D7A4F;
            --success-txt: #A8EFC6;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--cream);
            color: var(--espresso);
            min-height: 100vh;
        }

        /* ── Utilitários ── */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* ─────────────────────────────────────────
       HEADER
    ───────────────────────────────────────── */
        header {
            background: var(--espresso);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.25);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            color: var(--latte);
            letter-spacing: 0.5px;
            text-decoration: none;
        }

        .logo span {
            color: var(--caramel);
            font-style: italic;
        }

        nav {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        nav a {
            color: rgba(255, 255, 255, 0.60);
            text-decoration: none;
            font-size: 14px;
            font-weight: 400;
            transition: color 0.2s;
        }

        nav a:hover {
            color: var(--latte);
        }

        /* Botão do header */
        .btn-header {
            background: var(--caramel);
            color: #fff;
            border: none;
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s;
        }

        .btn-header:hover {
            background: var(--bark);
        }

        /* Menu hambúrguer (mobile) */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 4px;
        }

        .menu-toggle span {
            display: block;
            width: 22px;
            height: 2px;
            background: var(--latte);
            border-radius: 2px;
            transition: all 0.3s;
        }

        /* ─────────────────────────────────────────
       HERO
    ───────────────────────────────────────── */
        .hero {
            background: var(--espresso);
            padding: 5rem 2rem 3.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Círculo de luz de fundo */
        .hero::before {
            content: '';
            position: absolute;
            top: -80px;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(200, 135, 58, 0.13) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-tag {
            display: inline-block;
            background: rgba(200, 135, 58, 0.18);
            color: var(--latte);
            border: 1px solid rgba(200, 135, 58, 0.30);
            padding: 5px 16px;
            border-radius: 20px;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            animation: fadeUp 0.6s ease both;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 3.4rem);
            color: var(--foam);
            line-height: 1.2;
            margin-bottom: 1rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeUp 0.6s 0.1s ease both;
        }

        .hero h1 em {
            color: var(--caramel);
            font-style: italic;
        }

        .hero p {
            color: rgba(255, 255, 255, 0.50);
            font-size: 15px;
            max-width: 420px;
            margin: 0 auto 2rem;
            line-height: 1.7;
            animation: fadeUp 0.6s 0.2s ease both;
        }

        /* ── Barra de Busca ── */
        .search-bar {
            background: #fff;
            border-radius: 50px;
            display: flex;
            align-items: center;
            max-width: 580px;
            margin: 0 auto 1.5rem;
            padding: 6px 6px 6px 20px;
            gap: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
            animation: fadeUp 0.6s 0.3s ease both;
        }

        .search-bar input {
            flex: 1;
            border: none;
            outline: none;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: var(--espresso);
            background: transparent;
            min-width: 0;
        }

        .search-bar input::placeholder {
            color: var(--muted);
        }

        .btn-search {
            background: var(--caramel);
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 40px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            white-space: nowrap;
            transition: background 0.2s;
            flex-shrink: 0;
        }

        .btn-search:hover {
            background: var(--bark);
        }

        /* ── Chips de Filtro ── */
        .filters {
            display: flex;
            gap: 8px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeUp 0.6s 0.4s ease both;
        }

        .filter-chip {
            background: rgba(255, 255, 255, 0.08);
            color: rgba(255, 255, 255, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.2s;
            font-family: 'DM Sans', sans-serif;
            user-select: none;
        }

        .filter-chip:hover,
        .filter-chip.active {
            background: var(--caramel);
            color: #fff;
            border-color: var(--caramel);
        }

        /* ─────────────────────────────────────────
       CONTEÚDO PRINCIPAL
    ───────────────────────────────────────── */
        .main {
            padding: 2.5rem 2rem 4rem;
            max-width: 1140px;
            margin: 0 auto;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 1.4rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--espresso);
        }

        .section-link {
            font-size: 13px;
            color: var(--caramel);
            cursor: pointer;
            text-decoration: none;
            transition: color 0.2s;
        }

        .section-link:hover {
            color: var(--bark);
        }

        /* ── Banner de Localização ── */
        .location-banner {
            background: var(--foam);
            border: 1px solid var(--border);
            border-left: 3px solid var(--caramel);
            border-radius: 10px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 2.5rem;
            font-size: 13px;
            color: var(--muted);
            flex-wrap: wrap;
        }

        .location-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--caramel);
            flex-shrink: 0;
            animation: pulse 2s infinite;
        }

        .location-banner strong {
            color: var(--espresso);
        }

        .btn-locate {
            margin-left: auto;
            background: transparent;
            border: 1px solid var(--border);
            color: var(--caramel);
            padding: 5px 14px;
            border-radius: 16px;
            font-size: 12px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            white-space: nowrap;
            transition: all 0.2s;
        }

        .btn-locate:hover {
            background: var(--caramel);
            color: #fff;
            border-color: var(--caramel);
        }

        /* ── Mapa (placeholder visual) ── */
        .map-container {
            background: var(--foam);
            border: 1px solid var(--border);
            border-radius: 16px;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        /* Grade de fundo do mapa */
        .map-bg {
            position: absolute;
            inset: 0;
            background:
                repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(200, 135, 58, 0.06) 40px),
                repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(200, 135, 58, 0.06) 40px);
        }

        /* Pinos decorativos */
        .pin {
            position: absolute;
            cursor: pointer;
        }

        .pin-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--caramel);
            border: 2px solid #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.20);
            transition: transform 0.2s;
        }

        .pin:hover .pin-dot {
            transform: scale(1.35);
        }

        .pin-label {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--espresso);
            color: #fff;
            font-size: 10px;
            padding: 3px 8px;
            border-radius: 8px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s;
        }

        .pin:hover .pin-label {
            opacity: 1;
        }

        /* Centro do mapa */
        .map-center {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .map-icon {
            width: 56px;
            height: 56px;
            background: var(--caramel);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 26px;
        }

        .map-label {
            font-family: 'Playfair Display', serif;
            font-size: 1rem;
            color: var(--espresso);
            margin-bottom: 4px;
        }

        .map-sublabel {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 16px;
        }

        .btn-map {
            background: var(--espresso);
            color: var(--latte);
            border: none;
            padding: 10px 24px;
            border-radius: 24px;
            font-size: 13px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s;
        }

        .btn-map:hover {
            background: var(--bark);
        }

        /* ── Categorias ── */
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            gap: 10px;
            margin-bottom: 3rem;
        }

        .cat-item {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 1.2rem 1rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .cat-item:hover {
            background: var(--espresso);
            border-color: var(--espresso);
            transform: translateY(-2px);
        }

        .cat-item:hover .cat-name {
            color: var(--latte);
        }

        .cat-item:hover .cat-count {
            color: rgba(255, 255, 255, 0.40);
        }

        .cat-emoji {
            font-size: 26px;
            margin-bottom: 8px;
        }

        .cat-name {
            font-size: 13px;
            font-weight: 500;
            color: var(--espresso);
            margin-bottom: 3px;
            transition: color 0.2s;
        }

        .cat-count {
            font-size: 11px;
            color: var(--muted);
            transition: color 0.2s;
        }

        /* ── Grid de Cards ── */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
            gap: 1.3rem;
            margin-bottom: 1rem;
        }

        /* Mensagem de "sem resultados" */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 3rem 1rem;
            color: var(--muted);
        }

        .empty-state p {
            font-size: 15px;
        }

        /* Card individual */
        .cafe-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            animation: fadeUp 0.4s ease both;
        }

        .cafe-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 36px var(--shadow);
        }

        .card-img {
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.2rem;
            position: relative;
        }

        .card-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(44, 24, 16, 0.75);
            color: rgba(255, 255, 255, 0.80);
            font-size: 10px;
            padding: 3px 9px;
            border-radius: 10px;
            font-weight: 500;
            backdrop-filter: blur(4px);
        }

        .card-badge.open {
            background: rgba(45, 122, 79, 0.85);
            color: var(--success-txt);
        }

        .card-body {
            padding: 1rem 1.1rem 1.1rem;
        }

        .card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3px;
        }

        .card-name {
            font-family: 'Playfair Display', serif;
            font-size: 15px;
            color: var(--espresso);
            font-weight: 700;
        }

        .card-stars {
            color: var(--caramel);
            font-size: 12px;
        }

        .card-type {
            font-size: 11px;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 8px;
        }

        .card-desc {
            font-size: 13px;
            color: #6B5B52;
            line-height: 1.55;
            margin-bottom: 10px;

            /* Limita a 2 linhas */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
            border-top: 1px solid var(--border);
            gap: 8px;
        }

        .card-dist {
            font-size: 12px;
            color: var(--muted);
        }

        .card-price {
            font-size: 12px;
            color: var(--caramel);
            font-weight: 500;
        }

        .btn-card {
            background: var(--foam);
            color: var(--espresso);
            border: 1px solid var(--border);
            padding: 5px 12px;
            border-radius: 14px;
            font-size: 12px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            flex-shrink: 0;
            transition: all 0.2s;
        }

        .btn-card:hover {
            background: var(--caramel);
            color: #fff;
            border-color: var(--caramel);
        }

        /* ─────────────────────────────────────────
       SEÇÃO "ADICIONAR CAFÉ"
    ───────────────────────────────────────── */
        .cta-section {
            background: var(--espresso);
            border-radius: 20px;
            padding: 3rem 2.5rem;
            text-align: center;
            margin-top: 1rem;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            bottom: -60px;
            right: -60px;
            width: 260px;
            height: 260px;
            background: radial-gradient(circle, rgba(200, 135, 58, 0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        .cta-section h2 {
            font-family: 'Playfair Display', serif;
            color: var(--foam);
            font-size: 1.6rem;
            margin-bottom: 0.6rem;
        }

        .cta-section h2 em {
            color: var(--caramel);
            font-style: italic;
        }

        .cta-section p {
            color: rgba(255, 255, 255, 0.50);
            font-size: 14px;
            margin-bottom: 1.5rem;
        }

        .btn-cta {
            background: var(--caramel);
            color: #fff;
            border: none;
            padding: 12px 32px;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s, transform 0.2s;
        }

        .btn-cta:hover {
            background: var(--latte);
            transform: scale(1.03);
        }

        /* ─────────────────────────────────────────
       MODAL DE DETALHES
    ───────────────────────────────────────── */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(44, 24, 16, 0.65);
            z-index: 300;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal {
            background: #fff;
            border-radius: 20px;
            max-width: 500px;
            width: 100%;
            overflow: hidden;
            animation: slideUp 0.3s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            position: relative;
        }

        .modal-img {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4.5rem;
        }

        .btn-fechar {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(0, 0, 0, 0.20);
            border: none;
            color: #fff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            line-height: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .btn-fechar:hover {
            background: rgba(0, 0, 0, 0.40);
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-titulo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--espresso);
            margin-bottom: 2px;
        }

        .modal-sub {
            font-size: 11px;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .modal-stars {
            color: var(--caramel);
            font-size: 14px;
            margin-bottom: 1rem;
        }

        .modal-desc {
            font-size: 14px;
            color: #6B5B52;
            line-height: 1.65;
            margin-bottom: 1.2rem;
        }

        .modal-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px 16px;
            margin-bottom: 1.2rem;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .info-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--muted);
        }

        .info-val {
            font-size: 13px;
            color: var(--espresso);
            font-weight: 500;
        }

        .modal-tags {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }

        .tag {
            background: var(--foam);
            border: 1px solid var(--border);
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 11px;
            color: var(--bark);
        }

        .modal-actions {
            display: flex;
            gap: 10px;
        }

        .btn-primario {
            flex: 1;
            background: var(--caramel);
            color: #fff;
            border: none;
            padding: 13px;
            border-radius: 12px;
            font-size: 14px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            transition: background 0.2s;
        }

        .btn-primario:hover {
            background: var(--bark);
        }

        .btn-secundario {
            background: var(--foam);
            color: var(--espresso);
            border: 1px solid var(--border);
            padding: 13px 18px;
            border-radius: 12px;
            font-size: 14px;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            transition: background 0.2s;
        }

        .btn-secundario:hover {
            background: var(--cream);
        }

        /* ─────────────────────────────────────────
       MODAL DE CADASTRO
    ───────────────────────────────────────── */
        .form-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(44, 24, 16, 0.65);
            z-index: 300;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .form-overlay.active {
            display: flex;
        }

        .form-modal {
            background: #fff;
            border-radius: 20px;
            max-width: 500px;
            width: 100%;
            padding: 2rem;
            animation: slideUp 0.3s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        .form-titulo {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--espresso);
            margin-bottom: 0.3rem;
        }

        .form-sub {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-bottom: 1rem;
        }

        .form-group label {
            font-size: 12px;
            font-weight: 500;
            color: var(--espresso);
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: var(--espresso);
            background: var(--foam);
            outline: none;
            transition: border-color 0.2s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--caramel);
            background: #fff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 1.5rem;
        }

        /* ─────────────────────────────────────────
       FOOTER
    ───────────────────────────────────────── */
        footer {
            background: var(--espresso);
            color: rgba(255, 255, 255, 0.35);
            padding: 2rem;
            margin-top: 4rem;
        }

        .footer-inner {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        footer .logo {
            font-size: 18px;
        }

        .footer-text {
            font-size: 12px;
        }

        .footer-text a {
            color: var(--latte);
            text-decoration: none;
        }

        /* ─────────────────────────────────────────
       ANIMAÇÕES
    ───────────────────────────────────────── */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.5);
                opacity: 0.55;
            }
        }

        /* ─────────────────────────────────────────
       RESPONSIVIDADE
    ───────────────────────────────────────── */
        @media (max-width: 720px) {
            nav {
                display: none;
            }

            nav.open {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 64px;
                left: 0;
                right: 0;
                background: var(--espresso);
                padding: 1rem 2rem 1.5rem;
                gap: 1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.08);
            }

            .menu-toggle {
                display: flex;
            }

            .hero {
                padding: 3rem 1.2rem 2.5rem;
            }

            .main {
                padding: 2rem 1.2rem 3rem;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }

            .modal-info {
                grid-template-columns: 1fr 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .cta-section {
                padding: 2rem 1.5rem;
            }

            .footer-inner {
                flex-direction: column;
                text-align: center;
            }

            .location-banner {
                flex-wrap: wrap;
            }

            .btn-locate {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- ════════════════════════════════════════
       HEADER
  ════════════════════════════════════════ -->
    <header>
        <a href="#" class="logo">Amantes de <span>Café</span></a>

        <!-- Navegação desktop -->
        <nav id="navMenu">
            <a href="mapa.html">Mapa</a>
            <a href="#categorias">Categorias</a>
            <a href="#cafes">Explorar</a>
            <a href="#sobre">Sobre</a>
            <button class="btn-header" href="cadastro.html">+ Cadastrar Café</a>
        </nav>

        <!-- Hambúrguer mobile -->
        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </button>
    </header>


    <!-- ════════════════════════════════════════
       HERO
  ════════════════════════════════════════ -->
    <section class="hero" id="home">
        <div class="hero-tag">☕ Guia de Cafés &amp; Docerias</div>
        <h1>Descubra os melhores <em>cafés</em> perto de você</h1>
        <p>Encontre cafeterias, bistrôs e docerias incríveis usando sua localização atual.</p>

        <div class="search-bar">
            <span>🔍</span>
            <input
                type="text"
                id="searchInput"
                placeholder="Buscar por nome, bairro ou especialidade..."
                aria-label="Buscar cafés" />
            <button class="btn-search" onclick="buscar()">Buscar</button>
        </div>

        <div class="filters">
            <div class="filter-chip active" data-filtro="todos" onclick="filtrar(this)">Todos</div>
            <div class="filter-chip" data-filtro="cafe" onclick="filtrar(this)">☕ Cafeterias</div>
            <div class="filter-chip" data-filtro="doceria" onclick="filtrar(this)">🍰 Docerias</div>
            <div class="filter-chip" data-filtro="bistro" onclick="filtrar(this)">🥐 Bistrôs</div>
            <div class="filter-chip" data-filtro="gelato" onclick="filtrar(this)">🍨 Gelaterias</div>
            <div class="filter-chip" data-filtro="aberto" onclick="filtrar(this)">🟢 Aberto agora</div>
        </div>
    </section>


    <!-- ════════════════════════════════════════
       CONTEÚDO PRINCIPAL
  ════════════════════════════════════════ -->
    <main class="main">

        <!-- ── Banner Localização ── -->
        <div class="location-banner" id="locationBanner">
            <div class="location-dot"></div>
            <span>Exibindo resultados para <strong id="cidadeAtual">São José dos Campos, SP</strong></span>
            <button class="btn-locate" onclick="usarLocalizacao()">📍 Usar minha localização</button>
        </div>


        <!-- ── Mapa ── -->
        <div class="section-header" id="mapa">
            <div class="section-title">Mapa de cafés</div>
            <a href="#" class="section-link">Ver mapa completo →</a>
        </div>

        <div class="map-container" aria-label="Mapa com a localização dos cafés">
            <div class="map-bg"></div>

            <!-- Pinos decorativos (seriam dinâmicos com API real) -->
            <div class="pin" style="top:28%; left:22%">
                <div class="pin-dot"></div>
                <div class="pin-label">Café do Jardim</div>
            </div>
            <div class="pin" style="top:52%; left:44%">
                <div class="pin-dot"></div>
                <div class="pin-label">Bistrô Aroma</div>
            </div>
            <div class="pin" style="top:38%; left:63%">
                <div class="pin-dot" style="background:#2D7A4F"></div>
                <div class="pin-label">Doceria Belle</div>
            </div>
            <div class="pin" style="top:62%; left:72%">
                <div class="pin-dot"></div>
                <div class="pin-label">Gelato Vivace</div>
            </div>
            <div class="pin" style="top:22%; left:57%">
                <div class="pin-dot"></div>
                <div class="pin-label">Café Cultura</div>
            </div>
            <div class="pin" style="top:70%; left:30%">
                <div class="pin-dot" style="background:#C8873A"></div>
                <div class="pin-label">Raízes Café</div>
            </div>

            <div class="map-center">
                <div class="map-icon">🗺️</div>
                <div class="map-label">Mapa Interativo</div>
                <div class="map-sublabel" id="mapCount">6 estabelecimentos encontrados</div>
                <button class="btn-map">Abrir mapa completo</button>
            </div>
        </div>


        <!-- ── Categorias ── -->
        <div class="section-header" id="categorias">
            <div class="section-title">Categorias</div>
        </div>

        <div class="categories">
            <div class="cat-item" onclick="filtrarCategoria('cafe')">
                <div class="cat-emoji">☕</div>
                <div class="cat-name">Cafeterias</div>
                <div class="cat-count">38 locais</div>
            </div>
            <div class="cat-item" onclick="filtrarCategoria('doceria')">
                <div class="cat-emoji">🍰</div>
                <div class="cat-name">Docerias</div>
                <div class="cat-count">24 locais</div>
            </div>
            <div class="cat-item" onclick="filtrarCategoria('bistro')">
                <div class="cat-emoji">🥐</div>
                <div class="cat-name">Bistrôs</div>
                <div class="cat-count">15 locais</div>
            </div>
            <div class="cat-item" onclick="filtrarCategoria('gelato')">
                <div class="cat-emoji">🍨</div>
                <div class="cat-name">Gelaterias</div>
                <div class="cat-count">11 locais</div>
            </div>
            <div class="cat-item" onclick="filtrarCategoria('padaria')">
                <div class="cat-emoji">🥖</div>
                <div class="cat-name">Padarias</div>
                <div class="cat-count">19 locais</div>
            </div>
        </div>


        <!-- ── Cards de Cafés ── -->
        <div class="section-header" id="cafes">
            <div class="section-title">Perto de você</div>
            <a href="#" class="section-link" id="resultCount">6 resultados</a>
        </div>

        <div class="cards-grid" id="cardsGrid">
            <!-- Gerado via JavaScript -->
        </div>


        <!-- ── CTA ── -->
        <div class="cta-section" id="sobre">
            <h2>Tem um café <em>especial</em>?</h2>
            <p>Cadastre seu estabelecimento gratuitamente e apareça no mapa para milhares de amantes de café.</p>
            <button class="btn-cta" href="cadastro.html">Cadastrar meu café gratuitamente</button>
        </div>

    </main>


    <!-- ════════════════════════════════════════
       FOOTER
  ════════════════════════════════════════ -->
    <footer>
        <div class="footer-inner">
            <a href="#" class="logo">Café<span>spot</span></a>
            <div class="footer-text">
                Projeto Integrador &middot; São José dos Campos, SP &middot;
                <a href="#">Contato</a>
            </div>
        </div>
    </footer>


    <!-- ════════════════════════════════════════
       MODAL — DETALHES DO CAFÉ
  ════════════════════════════════════════ -->
    <div class="modal-overlay" id="modalDetalhe" role="dialog" aria-modal="true" aria-labelledby="modalTitulo">
        <div class="modal" id="modalConteudo">
            <div class="modal-header">
                <div class="modal-img" id="modalImg"></div>
                <button class="btn-fechar" onclick="fecharModal('modalDetalhe')" aria-label="Fechar">×</button>
            </div>
            <div class="modal-body">
                <div class="modal-titulo" id="modalTitulo"></div>
                <div class="modal-sub" id="modalSub"></div>
                <div class="modal-stars" id="modalStars"></div>
                <div class="modal-desc" id="modalDesc"></div>
                <div class="modal-info" id="modalInfo"></div>
                <div class="modal-tags" id="modalTags"></div>
                <div class="modal-actions">
                    <button class="btn-primario" id="btnRota">📍 Como chegar</button>
                    <button class="btn-secundario" id="btnFav">⭐ Favoritar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ════════════════════════════════════════
       MODAL — CADASTRAR CAFÉ
  ════════════════════════════════════════ -->
    <div class="form-overlay" id="modalCadastro" role="dialog" aria-modal="true" aria-labelledby="formTitulo">
        <div class="form-modal">
            <div class="form-titulo" id="formTitulo">Cadastrar meu café</div>
            <div class="form-sub">Preencha os dados e seu estabelecimento aparecerá no mapa em breve.</div>

            <div class="form-group">
                <label for="fNome">Nome do estabelecimento *</label>
                <input type="text" id="fNome" placeholder="Ex: Café das Flores" required />
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="fTipo">Categoria *</label>
                    <select id="fTipo">
                        <option value="">Selecione</option>
                        <option value="cafe">Cafeteria</option>
                        <option value="doceria">Doceria</option>
                        <option value="bistro">Bistrô</option>
                        <option value="gelato">Gelateria</option>
                        <option value="padaria">Padaria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fBairro">Bairro *</label>
                    <input type="text" id="fBairro" placeholder="Ex: Centro" required />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="fHorario">Horário de funcionamento</label>
                    <input type="text" id="fHorario" placeholder="Ex: 8h às 20h" />
                </div>
                <div class="form-group">
                    <label for="fPreco">Faixa de preço</label>
                    <input type="text" id="fPreco" placeholder="Ex: R$ 10–30" />
                </div>
            </div>

            <div class="form-group">
                <label for="fDesc">Descrição</label>
                <textarea id="fDesc" placeholder="Fale sobre o seu café, especialidades, ambiente..."></textarea>
            </div>

            <div class="form-group">
                <label for="fEndereco">Endereço completo</label>
                <input type="text" id="fEndereco" placeholder="Rua, número, bairro, cidade" />
            </div>

            <div class="form-group">
                <label for="fContato">WhatsApp / Instagram</label>
                <input type="text" id="fContato" placeholder="(12) 99999-9999 ou @seucafe" />
            </div>

            <div class="form-actions">
                <button class="btn-primario" onclick="submeterCafe()">Enviar cadastro</button>
                <button class="btn-secundario" onclick="fecharModal('modalCadastro')">Cancelar</button>
            </div>
        </div>
    </div>


    <!-- ════════════════════════════════════════
       JAVASCRIPT
  ════════════════════════════════════════ -->
    <script>
        /* ───────────────────────────────────────
       BANCO DE DADOS LOCAL (mock)
       Em um projeto real, esses dados viriam
       de uma API / banco de dados.
    ─────────────────────────────────────── */
        const cafesDB = [{
                id: 1,
                emoji: '☕',
                bgColor: '#F5EBE0',
                nome: 'Café do Jardim',
                tipo: 'Cafeteria',
                tag: 'cafe',
                aberto: true,
                stars: '★★★★★',
                rating: '4.9',
                desc: 'O melhor espresso da cidade, servido em ambiente acolhedor com vista para o jardim interno. Grãos selecionados de origem única.',
                distancia: '0,3 km',
                preco: 'R$ 8–18',
                horario: '7h às 20h',
                bairro: 'Jardim Aquarius',
                tags: ['Espresso Especial', 'Vegan Options', 'Wi-Fi', 'Coworking'],
                avaliacoes: 312,
                lat: -23.1791,
                lng: -45.8872,
            },
            {
                id: 2,
                emoji: '🥐',
                bgColor: '#EDE8F5',
                nome: 'Bistrô Aroma',
                tipo: 'Bistrô',
                tag: 'bistro',
                aberto: true,
                stars: '★★★★☆',
                rating: '4.6',
                desc: 'Bistrô francês com croissants artesanais, quiches deliciosas e cafés especiais importados direto da França.',
                distancia: '0,7 km',
                preco: 'R$ 15–45',
                horario: '8h às 21h',
                bairro: 'Centro',
                tags: ['Croissant Artesanal', 'Almoço', 'Reservas', 'Pet Friendly'],
                avaliacoes: 187,
                lat: -23.1846,
                lng: -45.8791,
            },
            {
                id: 3,
                emoji: '🍰',
                bgColor: '#E8F5EC',
                nome: 'Doceria Belle',
                tipo: 'Doceria',
                tag: 'doceria',
                aberto: false,
                stars: '★★★★★',
                rating: '4.8',
                desc: 'Doces artesanais franceses e brasileiros, macarons exclusivos e bolos personalizados para encomenda.',
                distancia: '1,1 km',
                preco: 'R$ 6–55',
                horario: 'Fecha às 18h',
                bairro: 'Vila Adyana',
                tags: ['Macarons', 'Bolos Personalizados', 'Sem Glúten', 'Encomendas'],
                avaliacoes: 425,
                lat: -23.1923,
                lng: -45.8850,
            },
            {
                id: 4,
                emoji: '🍨',
                bgColor: '#FFF5E8',
                nome: 'Gelato Vivace',
                tipo: 'Gelateria',
                tag: 'gelato',
                aberto: true,
                stars: '★★★★☆',
                rating: '4.5',
                desc: 'Gelatos artesanais italianos com frutas frescas da região do Vale do Paraíba. Opções veganas disponíveis.',
                distancia: '1,4 km',
                preco: 'R$ 12–28',
                horario: '11h às 22h',
                bairro: 'Jardim São Dimas',
                tags: ['Gelato Artesanal', 'Frutas Locais', 'Vegano', 'Take Away'],
                avaliacoes: 203,
                lat: -23.1758,
                lng: -45.8940,
            },
            {
                id: 5,
                emoji: '📚',
                bgColor: '#F5E8E8',
                nome: 'Café Cultura',
                tipo: 'Cafeteria & Livraria',
                tag: 'cafe',
                aberto: true,
                stars: '★★★★★',
                rating: '4.7',
                desc: 'Café integrado a uma livraria independente. Eventos culturais semanais, lançamentos e saraus toda última quinta.',
                distancia: '1,8 km',
                preco: 'R$ 9–22',
                horario: '9h às 21h',
                bairro: 'Centro',
                tags: ['Livraria', 'Eventos', 'Café Especial', 'Wi-Fi'],
                avaliacoes: 531,
                lat: -23.1800,
                lng: -45.8820,
            },
            {
                id: 6,
                emoji: '🌿',
                bgColor: '#E8F2EC',
                nome: 'Raízes Café',
                tipo: 'Cafeteria Orgânica',
                tag: 'cafe',
                aberto: false,
                stars: '★★★★☆',
                rating: '4.4',
                desc: 'Cafeteria 100% orgânica com grãos de fazendas parceiras certificadas. Granolas, pães integrais e sucos naturais.',
                distancia: '2,2 km',
                preco: 'R$ 10–30',
                horario: 'Fecha às 17h',
                bairro: 'Jardim Esplanada',
                tags: ['Orgânico', 'Saudável', 'Café Especial', 'Sem Lactose'],
                avaliacoes: 148,
                lat: -23.1880,
                lng: -45.8780,
            },
        ];

        /* Estado atual da aplicação */
        let filtroAtivo = 'todos';
        let termoBusca = '';
        let listaExibida = [...cafesDB];

        /* ───────────────────────────────────────
           RENDERIZAR CARDS
        ─────────────────────────────────────── */
        function renderizarCards(lista) {
            const grid = document.getElementById('cardsGrid');

            if (lista.length === 0) {
                grid.innerHTML = `
          <div class="empty-state">
            <p>😕 Nenhum café encontrado com esse filtro.<br>Tente outro termo ou categoria.</p>
          </div>`;
                document.getElementById('resultCount').textContent = '0 resultados';
                document.getElementById('mapCount').textContent = '0 estabelecimentos';
                return;
            }

            document.getElementById('resultCount').textContent = lista.length + ' resultado' + (lista.length > 1 ? 's' : '');
            document.getElementById('mapCount').textContent = lista.length + ' estabelecimento' + (lista.length > 1 ? 's' : '') + ' encontrado' + (lista.length > 1 ? 's' : '');

            grid.innerHTML = lista.map((c, i) => `
        <article
          class="cafe-card"
          onclick="location.href='cafe.html?id='+c.id"
          style="animation-delay: ${i * 0.06}s"
          tabindex="0"
          role="button"
          aria-label="Ver detalhes de ${c.nome}"
          onkeydown="if(event.key==='Enter') abrirModal(${c.id})"
        >
          <div class="card-img" style="background:${c.bgColor}">
            <span>${c.emoji}</span>
            <div class="card-badge ${c.aberto ? 'open' : ''}">
              ${c.aberto ? '🟢 Aberto' : '🔴 Fechado'}
            </div>
          </div>
          <div class="card-body">
            <div class="card-meta">
              <div class="card-name">${c.nome}</div>
              <div class="card-stars">${c.stars}</div>
            </div>
            <div class="card-type">${c.tipo}</div>
            <div class="card-desc">${c.desc}</div>
            <div class="card-footer">
              <div>
                <div class="card-dist">📍 ${c.distancia} · ${c.bairro}</div>
                <div class="card-price">${c.preco}</div>
              </div>
              <button class="btn-card" tabindex="-1">Ver mais</button>
            </div>
          </div>
        </article>
      `).join('');
        }

        /* ───────────────────────────────────────
           FILTRAR POR CHIP
        ─────────────────────────────────────── */
        function filtrar(el) {
            document.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
            el.classList.add('active');
            filtroAtivo = el.dataset.filtro;
            aplicarFiltros();
        }

        /* ───────────────────────────────────────
           FILTRAR POR CATEGORIA (cards de categoria)
        ─────────────────────────────────────── */
        function filtrarCategoria(tipo) {
            filtroAtivo = tipo;

            /* Atualiza visual dos chips */
            document.querySelectorAll('.filter-chip').forEach(c => {
                c.classList.toggle('active', c.dataset.filtro === tipo);
            });

            aplicarFiltros();

            /* Rola suavemente até os cards */
            document.getElementById('cafes').scrollIntoView({
                behavior: 'smooth'
            });
        }

        /* ───────────────────────────────────────
           BUSCA POR TEXTO
        ─────────────────────────────────────── */
        function buscar() {
            termoBusca = document.getElementById('searchInput').value.toLowerCase().trim();
            aplicarFiltros();
        }

        /* Busca em tempo real */
        document.getElementById('searchInput').addEventListener('input', () => {
            termoBusca = document.getElementById('searchInput').value.toLowerCase().trim();
            aplicarFiltros();
        });

        /* Busca ao pressionar Enter */
        document.getElementById('searchInput').addEventListener('keydown', e => {
            if (e.key === 'Enter') buscar();
        });

        /* ───────────────────────────────────────
           APLICAR TODOS OS FILTROS
        ─────────────────────────────────────── */
        function aplicarFiltros() {
            let lista = [...cafesDB];

            /* Filtro por tipo */
            if (filtroAtivo === 'aberto') {
                lista = lista.filter(c => c.aberto);
            } else if (filtroAtivo !== 'todos') {
                lista = lista.filter(c => c.tag === filtroAtivo);
            }

            /* Filtro por texto */
            if (termoBusca) {
                lista = lista.filter(c =>
                    c.nome.toLowerCase().includes(termoBusca) ||
                    c.tipo.toLowerCase().includes(termoBusca) ||
                    c.bairro.toLowerCase().includes(termoBusca) ||
                    c.tags.some(t => t.toLowerCase().includes(termoBusca))
                );
            }

            listaExibida = lista;
            renderizarCards(lista);
        }

        /* ───────────────────────────────────────
           ABRIR MODAL DE DETALHES
        ─────────────────────────────────────── */
        function abrirModal(id) {
            const c = cafesDB.find(x => x.id === id);
            if (!c) return;

            document.getElementById('modalImg').style.background = c.bgColor;
            document.getElementById('modalImg').innerHTML = `<span style="font-size:4.5rem">${c.emoji}</span>`;
            document.getElementById('modalTitulo').textContent = c.nome;
            document.getElementById('modalSub').textContent = c.tipo;
            document.getElementById('modalStars').innerHTML =
                `${c.stars} <span style="color:var(--muted);font-size:12px">${c.rating} (${c.avaliacoes} avaliações)</span>`;
            document.getElementById('modalDesc').textContent = c.desc;

            document.getElementById('modalInfo').innerHTML = `
        <div class="info-item">
          <div class="info-label">Horário</div>
          <div class="info-val">${c.horario}</div>
        </div>
        <div class="info-item">
          <div class="info-label">Distância</div>
          <div class="info-val">${c.distancia}</div>
        </div>
        <div class="info-item">
          <div class="info-label">Bairro</div>
          <div class="info-val">${c.bairro}</div>
        </div>
        <div class="info-item">
          <div class="info-label">Preço médio</div>
          <div class="info-val">${c.preco}</div>
        </div>
      `;

            document.getElementById('modalTags').innerHTML =
                c.tags.map(t => `<span class="tag">${t}</span>`).join('');

            /* Botão "Como chegar" abre Google Maps com as coordenadas */
            document.getElementById('btnRota').onclick = () => {
                window.open(
                    `https://www.google.com/maps/dir/?api=1&destination=${c.lat},${c.lng}`,
                    '_blank'
                );
            };

            document.getElementById('modalDetalhe').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        /* ───────────────────────────────────────
           FECHAR MODAL (genérico)
        ─────────────────────────────────────── */
        function fecharModal(id) {
            document.getElementById(id).classList.remove('active');
            document.body.style.overflow = '';
        }

        /* Fecha ao clicar fora */
        document.getElementById('modalDetalhe').addEventListener('click', function(e) {
            if (e.target === this) fecharModal('modalDetalhe');
        });
        document.getElementById('modalCadastro').addEventListener('click', function(e) {
            if (e.target === this) fecharModal('modalCadastro');
        });

        /* Fecha com ESC */
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                fecharModal('modalDetalhe');
                fecharModal('modalCadastro');
            }
        });

        /* ───────────────────────────────────────
           FORMULÁRIO DE CADASTRO
        ─────────────────────────────────────── */
        function abrirFormCadastro() {
            document.getElementById('modalCadastro').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function submeterCafe() {
            const nome = document.getElementById('fNome').value.trim();
            const tipo = document.getElementById('fTipo').value;
            const bairro = document.getElementById('fBairro').value.trim();

            if (!nome || !tipo || !bairro) {
                alert('Por favor, preencha os campos obrigatórios (*).');
                return;
            }

            /* Adiciona ao banco local como simulação */
            const novoCafe = {
                id: cafesDB.length + 1,
                emoji: '🆕',
                bgColor: '#EDF5FB',
                nome: nome,
                tipo: document.getElementById('fTipo').options[document.getElementById('fTipo').selectedIndex].text,
                tag: tipo,
                aberto: true,
                stars: '★★★★☆',
                rating: '—',
                desc: document.getElementById('fDesc').value.trim() || 'Novo estabelecimento cadastrado.',
                distancia: '—',
                preco: document.getElementById('fPreco').value.trim() || '—',
                horario: document.getElementById('fHorario').value.trim() || '—',
                bairro: bairro,
                tags: [],
                avaliacoes: 0,
                lat: -23.1900,
                lng: -45.8850,
            };

            cafesDB.push(novoCafe);
            fecharModal('modalCadastro');
            filtroAtivo = 'todos';
            termoBusca = '';
            document.getElementById('searchInput').value = '';
            document.querySelectorAll('.filter-chip').forEach(c =>
                c.classList.toggle('active', c.dataset.filtro === 'todos')
            );
            aplicarFiltros();

            /* Exibe confirmação */
            setTimeout(() => {
                alert(`✅ "${nome}" foi cadastrado com sucesso!\nEm um projeto real, isso seria salvo no banco de dados.`);
            }, 300);

            /* Limpa formulário */
            ['fNome', 'fTipo', 'fBairro', 'fHorario', 'fPreco', 'fDesc', 'fEndereco', 'fContato']
            .forEach(id => {
                document.getElementById(id).value = '';
            });
        }

        /* ───────────────────────────────────────
           GEOLOCALIZAÇÃO
        ─────────────────────────────────────── */
        function usarLocalizacao() {
            if (!navigator.geolocation) {
                alert('Seu navegador não suporta geolocalização.');
                return;
            }

            const btn = document.querySelector('.btn-locate');
            btn.textContent = '⏳ Obtendo localização...';
            btn.disabled = true;

            navigator.geolocation.getCurrentPosition(
                pos => {
                    /* Em um projeto real, enviaria lat/lng para a API e buscaria cafés próximos */
                    const lat = pos.coords.latitude.toFixed(4);
                    const lng = pos.coords.longitude.toFixed(4);
                    document.getElementById('cidadeAtual').textContent = `Lat ${lat}, Lng ${lng}`;
                    btn.textContent = '✅ Localização ativa';
                    btn.disabled = true;
                    console.log('Localização obtida:', lat, lng);
                },
                err => {
                    alert('Não foi possível obter sua localização. Verifique as permissões do navegador.');
                    btn.textContent = '📍 Usar minha localização';
                    btn.disabled = false;
                }
            );
        }

        /* ───────────────────────────────────────
           MENU MOBILE
        ─────────────────────────────────────── */
        function toggleMenu() {
            document.getElementById('navMenu').classList.toggle('open');
        }

        /* ───────────────────────────────────────
           INICIALIZAÇÃO
        ─────────────────────────────────────── */
        renderizarCards(cafesDB);
    </script>

</body>

</html>