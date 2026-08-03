<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Café Noir — O guia definitivo dos cafés e docerias do Vale do Paraíba">
    <title>Café Noir — Vale do Paraíba</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=IM+Fell+English:ital@0;1&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <style>
        /* ─── RESET ─────────────────────────────────────────────── */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* ─── TOKENS ─────────────────────────────────────────────── */
        :root {
            --paper: #f5f0e8;
            --paper-dark: #ede5d0;
            --paper-mid: #e8dfc8;
            --ink: #1a1208;
            --ink-mid: #2e2410;
            /* slightly darker for contrast */
            --ink-light: #5a4a30;
            /* slightly darker for contrast */
            --gold: #9a6f00;
            /* darkened from #b8860b for WCAG AA on light bg */
            --gold-dark: #7a5500;
            /* for text on --paper-dark */
            --rule: #2a1f0e;
            --serif: 'Playfair Display', Georgia, serif;
            --body: 'Libre Baskerville', Georgia, serif;
            --fell: 'IM Fell English', Georgia, serif;
            --focus-ring: #0057b7;
            /* high-contrast focus color */
        }

        /* ─── SKIP LINK ───────────────────────────────────────────── */
        .skip-link {
            position: absolute;
            top: -100%;
            left: 0;
            background: var(--focus-ring);
            color: #fff;
            padding: 0.75rem 1.25rem;
            font-family: var(--body);
            font-size: 0.85rem;
            font-weight: 700;
            text-decoration: none;
            z-index: 9999;
            border-radius: 0 0 4px 0;
        }

        .skip-link:focus {
            top: 0;
        }

        /* ─── FOCUS STYLES ────────────────────────────────────────── */
        :focus-visible {
            outline: 3px solid var(--focus-ring);
            outline-offset: 3px;
            border-radius: 2px;
        }

        /* Remove outline for mouse users but keep for keyboard */
        :focus:not(:focus-visible) {
            outline: none;
        }

        /* ─── BASE ───────────────────────────────────────────────── */
        body {
            background: #1e1508;
            display: flex;
            justify-content: center;
            padding: 2rem 1rem;
            font-family: var(--body);
        }

        .newspaper {
            background: var(--paper);
            width: 100%;
            max-width: 920px;
            border: 3px double var(--rule);
            outline: 1px solid var(--rule);
            outline-offset: 5px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.7);
        }

        /* ─── MASTHEAD ───────────────────────────────────────────── */
        .masthead {
            padding: 1rem 2rem 0;
            border-bottom: 3px double var(--rule);
        }

        .masthead-top {
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem 1rem;
            justify-content: space-between;
            font-size: 0.58rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--ink-light);
            margin-bottom: 0.4rem;
        }

        .masthead-title {
            text-align: center;
            font-family: var(--serif);
            font-size: clamp(2rem, 7vw, 3.4rem);
            font-weight: 900;
            color: var(--ink);
            line-height: 1;
            letter-spacing: 0.04em;
        }

        .masthead-sub {
            text-align: center;
            font-family: var(--fell);
            font-style: italic;
            font-size: clamp(0.72rem, 2vw, 0.82rem);
            color: var(--ink-mid);
            letter-spacing: 0.06em;
            margin: 0.2rem 0 0.5rem;
        }

        /* ─── NAV ────────────────────────────────────────────────── */
        .nav-bar {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            border-top: 1.5px solid var(--rule);
            padding: 0.35rem 0;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .nav-bar::-webkit-scrollbar {
            display: none;
        }

        .nav-bar a {
            font-size: 0.58rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--ink);
            text-decoration: none;
            padding: 0.35rem 0.9rem;
            border-right: 1px solid var(--ink-light);
            font-weight: 700;
            white-space: nowrap;
        }

        .nav-bar a:last-child {
            border-right: none;
        }

        .nav-bar a[aria-current="page"] {
            color: var(--gold);
        }

        /* ─── PAGE ───────────────────────────────────────────────── */
        .page {
            padding: 1.5rem 2rem 2rem;
        }

        /* ─── ORNAMENTS & RULES ──────────────────────────────────── */
        .orn {
            text-align: center;
            color: var(--gold);
            font-size: 0.9rem;
            letter-spacing: 0.5em;
            opacity: 0.7;
            margin: 0.8rem 0;
        }

        .rule-full {
            border: none;
            border-top: 1px solid var(--ink-light);
            margin: 1rem 0;
        }

        .rule-double {
            border: none;
            border-top: 3px double var(--rule);
            margin: 1.2rem 0;
        }

        .section-tag {
            text-align: center;
            position: relative;
            margin: 0.5rem 0 1rem;
        }

        .section-tag::before,
        .section-tag::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 28%;
            height: 1px;
            background: var(--rule);
        }

        .section-tag::before {
            left: 0;
        }

        .section-tag::after {
            right: 0;
        }

        .section-tag span {
            background: var(--paper);
            padding: 0 1rem;
            font-size: 0.6rem;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: var(--gold-dark);
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        /* ─── HEADLINE ───────────────────────────────────────────── */
        .headline-block {
            text-align: center;
            margin-bottom: 0.5rem;
        }

        .headline-block h1 {
            font-family: var(--serif);
            font-size: clamp(1.6rem, 5vw, 2.6rem);
            font-weight: 900;
            color: var(--ink);
            line-height: 1.1;
        }

        .headline-block h1 em {
            color: var(--gold-dark);
            font-style: italic;
        }

        .deck {
            font-family: var(--fell);
            font-style: italic;
            font-size: clamp(0.78rem, 2vw, 0.85rem);
            color: var(--ink-mid);
            text-align: center;
            line-height: 1.65;
            margin: 0.4rem 0 0.8rem;
        }

        .byline {
            font-size: 0.6rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--ink-light);
            text-align: center;
            margin-bottom: 1rem;
        }

        /* ─── HISTÓRIA BANNER ────────────────────────────────────── */
        .historia-banner {
            background: var(--ink);
            color: var(--paper);
            padding: 1.5rem 2rem;
            margin: 0 -2rem;
            position: relative;
            overflow: hidden;
        }

        .historia-banner::before {
            content: '1820';
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            font-family: var(--serif);
            font-size: clamp(4rem, 12vw, 8rem);
            font-weight: 900;
            color: rgba(184, 134, 11, 0.12);
            line-height: 1;
            pointer-events: none;
            aria-hidden: true;
        }

        .historia-banner-label {
            font-size: 0.6rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #d4a017;
            /* gold on dark — AA contrast */
            font-weight: 700;
            margin-bottom: 0.5rem;
            border-bottom: 1px solid rgba(184, 134, 11, 0.4);
            padding-bottom: 0.4rem;
        }

        .historia-banner h2 {
            font-family: var(--serif);
            font-size: clamp(1.2rem, 4vw, 1.8rem);
            font-weight: 900;
            color: var(--paper);
            line-height: 1.1;
            margin-bottom: 0.5rem;
        }

        .historia-banner h2 em {
            color: #d4a017;
            font-style: italic;
        }

        .historia-banner p {
            font-size: clamp(0.72rem, 2vw, 0.78rem);
            line-height: 1.7;
            color: #d4c9b0;
            max-width: 60%;
        }

        /* ─── TIMELINE ───────────────────────────────────────────── */
        .timeline {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border: 1px solid var(--rule);
            margin: 1.2rem 0;
        }

        .tl-item {
            padding: 0.8rem 1rem;
            border-right: 1px solid var(--ink-light);
            position: relative;
        }

        .tl-item:last-child {
            border-right: none;
        }

        .tl-year {
            font-family: var(--serif);
            font-size: clamp(1.1rem, 3vw, 1.4rem);
            font-weight: 900;
            color: var(--gold-dark);
            line-height: 1;
            margin-bottom: 0.3rem;
        }

        .tl-label {
            font-size: 0.6rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--ink-light);
            font-weight: 700;
            margin-bottom: 0.35rem;
        }

        .tl-desc {
            font-size: 0.7rem;
            line-height: 1.6;
            color: var(--ink-mid);
        }

        /* ─── 3 COLUNAS ──────────────────────────────────────────── */
        .cols-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            border-top: 2px solid var(--rule);
        }

        .col {
            padding: 1rem 1.2rem;
            border-right: 1px solid var(--ink-light);
        }

        .col:last-child {
            border-right: none;
        }

        .col-label {
            font-size: 0.58rem;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: var(--gold-dark);
            font-weight: 700;
            margin-bottom: 0.6rem;
            padding-bottom: 0.3rem;
            border-bottom: 1px solid var(--paper-dark);
        }

        .col p {
            font-size: 0.75rem;
            line-height: 1.7;
            color: var(--ink-mid);
            margin-bottom: 0.6rem;
        }

        .col p:last-child {
            margin-bottom: 0;
        }

        .pull-quote {
            border-left: 3px solid var(--gold);
            margin: 0.7rem 0;
            padding: 0.4rem 0.8rem;
            background: var(--paper-dark);
        }

        .pull-quote p {
            font-family: var(--fell);
            font-style: italic;
            font-size: 0.8rem;
            color: var(--ink);
            line-height: 1.5;
            margin: 0;
        }

        /* ─── STATS ──────────────────────────────────────────────── */
        .stats-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 1rem;
            border-top: 2px solid var(--rule);
            border-bottom: 2px solid var(--rule);
            padding: 1rem 0.5rem;
            margin: 1.2rem 0;
            background: var(--paper-dark);
        }

        .stat {
            text-align: center;
            flex: 1 1 120px;
        }

        .stat .num {
            font-family: var(--serif);
            font-size: clamp(1.4rem, 4vw, 2rem);
            font-weight: 900;
            color: var(--ink);
            line-height: 1;
        }

        .stat .label {
            font-size: 0.56rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--ink-light);
            font-weight: 700;
            margin-top: 0.2rem;
        }

        /* ─── CAFÉS HEADER ────────────────────────────────────────── */
        .cafes-header {
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem 1rem;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 0.8rem;
        }

        .cafes-header-title {
            font-family: var(--serif);
            font-size: clamp(1rem, 3vw, 1.2rem);
            font-weight: 700;
            color: var(--ink);
        }

        .cafes-header-sub {
            font-size: 0.6rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold-dark);
        }

        /* ─── CIDADE DIVIDER ──────────────────────────────────────── */
        .cidade-div {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin: 1rem 0 0.6rem;
        }

        .cidade-div span {
            font-size: 0.58rem;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: var(--ink);
            font-weight: 700;
            white-space: nowrap;
        }

        .cidade-div::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--ink-light);
        }

        /* ─── CAFÉ GRID ───────────────────────────────────────────── */
        .cafe-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.8rem 1.5rem;
        }

        .cafe-item {
            border-top: 1px solid var(--ink-light);
            padding-top: 0.6rem;
        }

        .cafe-nome {
            font-family: var(--serif);
            font-size: clamp(0.85rem, 2.5vw, 0.95rem);
            font-weight: 700;
            color: var(--ink);
        }

        .cafe-bairro {
            font-size: 0.58rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--gold-dark);
            font-weight: 700;
            margin: 0.1rem 0 0.3rem;
        }

        .cafe-desc {
            font-size: 0.72rem;
            line-height: 1.6;
            color: var(--ink-mid);
            margin-bottom: 0.3rem;
        }

        .cafe-nota {
            font-size: 0.62rem;
            color: var(--gold-dark);
            font-weight: 700;
        }

        /* ─── CAFÉ DESTAQUE ───────────────────────────────────────── */
        .cafe-destaque {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 1fr 1.6fr;
            gap: 0;
            border: 1px solid var(--rule);
            background: var(--paper-dark);
        }

        .cafe-destaque-left {
            padding: 1rem;
            border-right: 1px solid var(--rule);
        }

        .cafe-destaque-right {
            padding: 1rem;
        }

        .cafe-destaque .cafe-destaque-tag {
            font-size: 0.56rem;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: var(--gold-dark);
            font-weight: 700;
            margin-bottom: 0.4rem;
        }

        .cafe-destaque .cafe-nome {
            font-size: clamp(0.95rem, 2.5vw, 1.15rem);
            margin-bottom: 0.1rem;
        }

        .cafe-destaque .cafe-desc {
            font-size: 0.76rem;
        }

        /* ─── FOOTER ──────────────────────────────────────────────── */
        .np-footer {
            border-top: 3px double var(--rule);
            padding: 0.6rem 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem 1rem;
            justify-content: space-between;
        }

        .np-footer span {
            font-size: 0.58rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--ink-light);
        }

        /* ─── REDUCED MOTION ──────────────────────────────────────── */
        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* ─── RESPONSIVE: TABLET (≤ 700px) ───────────────────────── */
        @media (max-width: 700px) {
            body {
                padding: 1rem 0.5rem;
            }

            .masthead {
                padding: 0.8rem 1.2rem 0;
            }

            .page {
                padding: 1.2rem 1.2rem 1.5rem;
            }

            .historia-banner {
                margin: 0 -1.2rem;
                padding: 1.2rem 1.2rem;
            }

            .historia-banner p {
                max-width: 100%;
            }

            /* Timeline: 2 colunas */
            .timeline {
                grid-template-columns: repeat(2, 1fr);
            }

            .tl-item:nth-child(2) {
                border-right: none;
            }

            .tl-item:nth-child(3) {
                border-top: 1px solid var(--ink-light);
            }

            .tl-item:nth-child(4) {
                border-top: 1px solid var(--ink-light);
            }

            /* Colunas 3: stack */
            .cols-3 {
                grid-template-columns: 1fr;
            }

            .col {
                border-right: none;
                border-bottom: 1px solid var(--ink-light);
            }

            .col:last-child {
                border-bottom: none;
            }

            /* Café destaque: stack */
            .cafe-destaque {
                grid-template-columns: 1fr;
            }

            .cafe-destaque-left {
                border-right: none;
                border-bottom: 1px solid var(--rule);
            }

            /* Café grid: 1 coluna */
            .cafe-grid {
                grid-template-columns: 1fr;
            }

            .np-footer {
                padding: 0.6rem 1.2rem;
                flex-direction: column;
                gap: 0.2rem;
            }
        }

        /* ─── RESPONSIVE: MOBILE (≤ 480px) ───────────────────────── */
        @media (max-width: 480px) {
            .masthead {
                padding: 0.6rem 1rem 0;
            }

            .page {
                padding: 1rem 1rem 1.2rem;
            }

            .masthead-top {
                flex-direction: column;
                gap: 0.15rem;
                font-size: 0.52rem;
            }

            .nav-bar {
                justify-content: flex-start;
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .nav-bar a {
                padding: 0.4rem 0.7rem;
                font-size: 0.54rem;
            }

            .historia-banner {
                margin: 0 -1rem;
                padding: 1rem;
            }

            .historia-banner::before {
                display: none;
            }

            /* Timeline: 1 coluna no mobile muito pequeno */
            .timeline {
                grid-template-columns: 1fr;
            }

            .tl-item {
                border-right: none;
                border-bottom: 1px solid var(--ink-light);
            }

            .tl-item:last-child {
                border-bottom: none;
            }

            .tl-item:nth-child(3),
            .tl-item:nth-child(4) {
                border-top: none;
            }

            /* Stats: 2 colunas */
            .stats-bar {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 0.8rem;
            }

            .section-tag::before,
            .section-tag::after {
                width: 18%;
            }

            .np-footer {
                padding: 0.6rem 1rem;
            }
        }

        /* ─── HIGH CONTRAST MODE ──────────────────────────────────── */
        @media (forced-colors: active) {
            .newspaper {
                border: 2px solid ButtonText;
            }

            .pull-quote {
                border-left-color: ButtonText;
            }

            .historia-banner {
                forced-color-adjust: none;
                background: Canvas;
                color: CanvasText;
            }
        }
    </style>
</head>

<body>
    <!-- Navegação para usuários de leitores de tela e teclado -->
    <a class="skip-link" href="#conteudo-principal">Pular para o conteúdo principal</a>
    <article class="newspaper" role="main" aria-label="Café Noir — Edição Vale do Paraíba">
        <!-- MASTHEAD -->
        <header role="banner">
            <div class="masthead">
                <div class="masthead-top" aria-label="Informações da edição">
                    <span>Edição Nº 47 · Volume III · Fundado em 2025</span>
                    <span><time datetime="2026-06">Junho, 2026</time> · Vale do Paraíba, São Paulo</span>
                </div>
                <div class="masthead-title" role="heading" aria-level="1">Café Noir</div>
                <p class="masthead-sub">O guia definitivo dos cafés e docerias do Vale do Paraíba</p>
                <nav class="nav-bar" aria-label="Navegação principal">
                    <a href="#">Destaque</a>
                    <a href="#" aria-current="page">Cafés</a>
                    <a href="#">Novidades</a>
                    <a href="#">Diário</a>
                    <a href="#">Sobre</a>
                </nav>
            </div>
        </header>
        <div class="page" id="conteudo-principal">
            <!-- SECTION TAG -->
            <div class="section-tag" role="doc-subtitle" style="margin-top:0.6rem">
                <span> Edição Especial · Vale do Paraíba</span>
            </div>
            <!-- HEADLINE -->
            <div class="headline-block">
                <h2>A terra que <em>alimentou</em> o Brasil<br>de café — e ainda alimenta</h2>
            </div>
            <p class="deck">Do século XIX aos grãos de microlote de hoje — o Vale do Paraíba foi o berço do café
                brasileiro e São José dos Campos segue sendo o coração de uma cena que só cresce.</p>
            <p class="byline">
                <span aria-label="Autoria">Por nossa redação</span>
                <span aria-hidden="true"> &nbsp;·&nbsp; </span>
                <span>Edição especial Vale do Paraíba</span>
            </p>
            <div class="orn" aria-hidden="true">— ✦ —</div>
            <!-- HISTÓRIA -->
            <section class="historia-banner" aria-labelledby="historia-titulo">
                <p class="historia-banner-label" aria-hidden="true">✦ História em Evidência · O Vale e o Café</p>
                <h3 id="historia-titulo">Quando o Vale <em>moveu</em><br>a economia de um país</h3>
                <p>Entre 1820 e 1880, o Vale do Paraíba foi responsável por mais de 70% da produção cafeeira do Brasil.
                    Fazendas imensas, escravidão e fortunas colossais definiram a paisagem — e os Barões do Café
                    tornaram-se os homens mais poderosos do Império.</p>
            </section>
            <!-- TIMELINE -->
            <section aria-label="Linha do tempo do café no Vale do Paraíba">
                <ol class="timeline" role="list">
                    <li class="tl-item">
                        <div class="tl-year"><time datetime="1820">1820</time></div>
                        <div class="tl-label">A chegada</div>
                        <p class="tl-desc">Os primeiros grãos chegam ao Vale. Fazendas de subsistência se transformam em
                            impérios do café em menos de uma geração.</p>
                    </li>
                    <li class="tl-item">
                        <div class="tl-year"><time datetime="1850">1850</time></div>
                        <div class="tl-label">O auge</div>
                        <p class="tl-desc">O Vale responde por mais da metade das exportações do Brasil. Surgem os
                            Barões
                            do Café — títulos nobiliárquicos concedidos pelo Imperador D. Pedro II.</p>
                    </li>
                    <li class="tl-item">
                        <div class="tl-year"><time datetime="1880">1880</time></div>
                        <div class="tl-label">A virada</div>
                        <p class="tl-desc">O solo exausto e a abolição da escravidão deslocam a produção para o oeste
                            paulista. O Vale perde o posto, mas guarda a memória e as fazendas históricas.</p>
                    </li>
                    <li class="tl-item">
                        <div class="tl-year">Hoje</div>
                        <div class="tl-label">O renascimento</div>
                        <p class="tl-desc">Uma nova geração de baristas e torrefadores resgata o orgulho cafeeiro. SJC
                            lidera a cena de cafés especiais da região com mais de 30 endereços ativos.</p>
                    </li>
                </ol>
            </section>
            <!-- 3 COLUNAS CONTEXTO -->
            <div class="cols-3">
                <div class="col">
                    <h4 class="col-label">Os Barões do Café</h4>
                    <p>O título de Barão era concedido a grandes produtores pelo Imperador como reconhecimento de sua
                        influência econômica. Entre eles, o <strong>Barão das Palmeiras</strong>, Antônio Salgado da
                        Silva — capitão da Guarda de D. Pedro I e símbolo do poder cafeeiro no Vale.</p>
                    <p>Suas fazendas, muitas ainda de pé, são hoje patrimônio histórico e destino de turismo rural na
                        região de Taubaté e Lorena.</p>
                </div>
                <div class="col">
                    <h4 class="col-label">SJC e o Café Especial</h4>
                    <p>São José dos Campos reúne um perfil único: alta concentração de profissionais da Embraer, INPE e
                        ITA que valorizam experiências gastronômicas diferenciadas. Esse público impulsionou uma cena de
                        cafés especiais sofisticada e crescente.</p>
                    <blockquote class="pull-quote">
                        <p>"O café voltou ao Vale — desta vez numa xícara de microlote, não numa saca de exportação."
                        </p>
                    </blockquote>
                </div>
                <div class="col">
                    <h4 class="col-label">A Quarta Onda</h4>
                    <p>Se a primeira onda popularizou o café solúvel e a segunda criou as grandes redes, a quarta onda
                        vai além do grão — ela conecta o apreciador a toda a cadeia: da fazenda à torra, do método de
                        extração à nota sensorial na xícara.</p>
                    <p>Cafeterias como a Cafetto Company e a Barista's em SJC são pioneiras dessa filosofia no Vale do
                        Paraíba.</p>
                </div>
            </div>
            <!-- STATS -->
            <section class="stats-bar" aria-label="Dados e estatísticas">
                <div class="stat">
                    <div class="num" aria-label="70 por cento">70%</div>
                    <div class="label">Do café nacional em 1850</div>
                </div>
                <div class="stat">
                    <div class="num" aria-label="Mais de 30">30+</div>
                    <div class="label">Cafeterias em SJC</div>
                </div>
                <div class="stat">
                    <div class="num" aria-label="200 anos">200</div>
                    <div class="label">Anos de tradição</div>
                </div>
                <div class="stat">
                    <div class="num" aria-label="Quarta onda">4ª</div>
                    <div class="label">Onda do café especial</div>
                </div>
            </section>
            <hr class="rule-double" aria-hidden="true">
            <!-- CAFÉS -->
            <section aria-labelledby="enderecos-titulo">
                <div class="cafes-header">
                    <h3 id="enderecos-titulo" class="cafes-header-title">Endereços do Vale</h3>
                    <span class="cafes-header-sub" aria-label="Curadoria">Selecionados pela redação</span>
                </div>
                <!-- SÃO JOSÉ DOS CAMPOS -->
                <section aria-labelledby="sjc-titulo">
                    <div class="cidade-div">
                        <h4 id="sjc-titulo"><span>São José dos Campos</span></h4>
                    </div>
                    <ul class="cafe-grid" role="list" aria-label="Cafeterias em São José dos Campos">
                        <li class="cafe-item cafe-destaque" aria-labelledby="cafe-baristas-nome">
                            <div class="cafe-destaque-left">
                                <p class="cafe-destaque-tag" aria-hidden="true">✦ Café em Evidência</p>
                                <h5 id="cafe-baristas-nome" class="cafe-nome">Barista's Cafés Especiais</h5>
                                <p class="cafe-bairro">São José dos Campos · Centro</p>
                                <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Torrefação própria">★★★★★ &nbsp;
                                    Torrefação própria</p>
                            </div>
                            <div class="cafe-destaque-right">
                                <p class="cafe-desc">A casa faz a própria torrefação com grãos selecionados — o cardápio
                                    extenso
                                    percorre métodos que vão do espresso ao coado de imersão. A dica da redação: o
                                    cinnamon roll
                                    e o bolo de chocolate. Nas sextas-feiras, há pizza e música ao vivo, transformando a
                                    cafeteria num ponto de cultura da cidade.</p>
                                <blockquote class="pull-quote">
                                    <p>"Pedir o pourover aqui é um ato de fé que a torra nunca decepciona."</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-momentum-nome">
                            <h5 id="cafe-momentum-nome" class="cafe-nome">Momentum Lounge Café</h5>
                            <p class="cafe-bairro">Frente ao Shopping Center Vale</p>
                            <p class="cafe-desc">Com bossa e cardápio voltado ao estilo americano — panquecas, brunch
                                generoso
                                e drinks criativos com café. O proprietário Abraão é especialista em combinações
                                surpreendentes.
                                Nos fins de semana, DJs animam a noite.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Brunch e drinks">★★★★☆ &nbsp; Brunch
                                &amp; Drinks</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-consul-nome">
                            <h5 id="cafe-consul-nome" class="cafe-nome">Café Du Cônsul</h5>
                            <p class="cafe-bairro">Av. Paulista · Junto à Aliança Francesa</p>
                            <p class="cafe-desc">Um pedacinho da França no coração de SJC. O pôr do sol visto daqui é
                                famoso,
                                e o cardápio honra as origens: crepe suzette, pain perdu e um ambiente que promove
                                saraus e
                                sessões de cinema. Charme e cultura numa só subida.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Cultura e café">★★★★☆ &nbsp; Cultura
                                &amp; Café</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-fika-nome">
                            <h5 id="cafe-fika-nome" class="cafe-nome">Fika Cafés Especiais</h5>
                            <p class="cafe-bairro">São José dos Campos</p>
                            <p class="cafe-desc">Ponto de encontro já tradicional na cidade. Ambiente rústico com charme
                                e
                                menu que vai além do café — inclui opções de saladas e refeições. O cappuccino na versão
                                italiana clássica, só café e leite, conquistou uma legião fiel de frequentadores.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Ambiente rústico">★★★★☆ &nbsp;
                                Ambiente Rústico</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-cafetto-nome">
                            <h5 id="cafe-cafetto-nome" class="cafe-nome">Cafetto Company</h5>
                            <p class="cafe-bairro">Royal Park · São José dos Campos</p>
                            <p class="cafe-desc">Pioneira da quarta onda no Vale: primeira cafeteria 100% sem glúten e
                                sem
                                leite animal da região, com cozinha livre de contaminação cruzada. Torrefação própria
                                com grãos
                                de origem rastreável e métodos de extração para todos os perfis de paladar.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Inclusivo e especial">★★★★★ &nbsp;
                                Inclusivo &amp; Especial</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-origem-nome">
                            <h5 id="cafe-origem-nome" class="cafe-nome">Origem Cultural</h5>
                            <p class="cafe-bairro">Vila Ema · São José dos Campos</p>
                            <p class="cafe-desc">Mais do que uma cafeteria — um centro de fomento à arte e cultura do
                                Vale do
                                Paraíba. O espaço acolhe oficinas, cursos e palestras com a mesma dedicação com que
                                prepara o
                                café. Para quem entende que cultura e xícara combinam.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Arte e café">★★★★☆ &nbsp; Arte &amp;
                                Café</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-mata-nome">
                            <h5 id="cafe-mata-nome" class="cafe-nome">Café da Mata</h5>
                            <p class="cafe-bairro">R. Luiz Jacinto, 316 · Centro</p>
                            <p class="cafe-desc">Ambiente verde e acolhedor com espaço kids — um achado para famílias
                                que não
                                querem abrir mão de um bom café. Funciona todos os dias das 10h às 19h, com uma proposta
                                relaxante que combina natureza e boas bebidas.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Família e natureza">★★★★☆ &nbsp;
                                Família &amp; Natureza</p>
                        </li>
                    </ul>
                </section>
                <!-- TAUBATÉ -->
                <section aria-labelledby="taubate-titulo" style="margin-top:1.2rem">
                    <div class="cidade-div">
                        <h4 id="taubate-titulo"><span>Taubaté</span></h4>
                    </div>
                    <ul class="cafe-grid" role="list" aria-label="Cafeterias em Taubaté">
                        <li class="cafe-item" aria-labelledby="cafe-barao-nome">
                            <h5 id="cafe-barao-nome" class="cafe-nome">Barão Café</h5>
                            <p class="cafe-bairro">Taubaté · Centro</p>
                            <p class="cafe-desc">O nome é uma homenagem direta ao Barão das Palmeiras e à história
                                cafeeira do
                                Vale. Há cinco anos oferece receitas inspiradas em viagens da proprietária, num ambiente
                                que une
                                aconchego e sofisticação. Ideal para reuniões de negócios com história.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Patrimônio vivo">★★★★★ &nbsp;
                                Patrimônio Vivo</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-neruda-nome">
                            <h5 id="cafe-neruda-nome" class="cafe-nome">Neruda Café</h5>
                            <p class="cafe-bairro">Taubaté</p>
                            <p class="cafe-desc">Ambiente aconchegante com grãos selecionados e uma seleção generosa de
                                chás.
                                O espaço foi pensado para quem quer sentar, respirar e ficar — com wi-fi, doces
                                artesanais e um
                                atendimento que lembra o café de bairro de antigamente.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Aconchego">★★★★☆ &nbsp; Aconchego
                            </p>
                        </li>
                    </ul>
                </section>
                <!-- JACAREI -->
                <section aria-labelledby="jacarei-titulo" style="margin-top:1.2rem">
                    <div class="cidade-div">
                        <h4 id="jacarei-titulo"><span>Jacarei</span></h4>
                    </div>
                    <ul class="cafe-grid" role="list" aria-label="Cafeterias em Jacarei">
                        <li class="cafe-item" aria-labelledby="cafe-singela-nome">
                            <h5 id="cafe-singela-nome" class="cafe-nome">Singela Café</h5>
                            <p class="cafe-bairro">Jacarei · Centro</p>
                            <p class="cafe-desc">Cafeteria acolhedora com foco em café de qualidade e doces caseiros. O
                                ambiente despojado e luminoso é perfeito para trabalho, encontros ou momentos de
                                contemplação.
                                Os clientes frequentes garantem: o bolo de cenoura aqui é inesquecível.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Acolhedor e caseiro">★★★★☆ &nbsp;
                                Caseiro &amp; Acolhedor</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-meia-xicara-nome">
                            <h5 id="cafe-meia-xicara-nome" class="cafe-nome">Meia Xícara</h5>
                            <p class="cafe-bairro">Jacarei</p>
                            <p class="cafe-desc">Pequena cafeteria especializada em extrações manuais e café coado. O
                                nome
                                resume sua filosofia: qualidade em pequenas doses. Grãos selecionados de torrefadores
                                artesanais, atendimento pessoal e uma vibe que convida à lentidão.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Especialista">★★★★★ &nbsp; Café
                                Artesanal</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-pausa-cafe-nome">
                            <h5 id="cafe-pausa-cafe-nome" class="cafe-nome">Pausa Café</h5>
                            <p class="cafe-bairro">Jacarei · Zona Central</p>
                            <p class="cafe-desc">Espaço moderno com uma proposta inclusiva: menu sem glúten, bebidas
                                vegetais variadas e sobremesas adaptadas. A decoração reflete a história cafeeira do
                                Vale,
                                com fotografias antigas das fazendas locais adornando as paredes.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Inclusivo e histórico">★★★★☆ &nbsp;
                                Inclusivo &amp; Moderno</p>
                        </li>
                    </ul>
                </section>
                <!-- SÃO PAULO -->
                <section aria-labelledby="sao-paulo-titulo" style="margin-top:1.2rem">
                    <div class="cidade-div">
                        <h4 id="sao-paulo-titulo"><span>São Paulo</span></h4>
                    </div>
                    <ul class="cafe-grid" role="list" aria-label="Cafeterias em São Paulo">
                        <li class="cafe-item cafe-destaque" aria-labelledby="cafe-octavio-nome">
                            <div class="cafe-destaque-left">
                                <p class="cafe-destaque-tag" aria-hidden="true">✦ Destaque Paulista</p>
                                <h5 id="cafe-octavio-nome" class="cafe-nome">Octavio Coffee Roasters</h5>
                                <p class="cafe-bairro">Vila Mariana · São Paulo</p>
                                <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Excelência em torrefação">★★★★★
                                    &nbsp;
                                    Torrefação de Elite</p>
                            </div>
                            <div class="cafe-destaque-right">
                                <p class="cafe-desc">Torrefadora de referência nacional, Octavio escolhe apenas os
                                    melhores
                                    grãos do Brasil e do exterior. O espaço combina laboratório, cafeteria e galeria de
                                    arte —
                                    cada xícara é apresentada como uma obra. Os roasters são mestres da torra,
                                    transformando
                                    microlotes em expressões únicas de sabor. Imperdível: as degustações comparativas de
                                    sexta
                                    à noite.</p>
                                <blockquote class="pull-quote">
                                    <p>"Octavio não apenas serve café — celebra a profundidade de cada grão."</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-estado-cafe-nome">
                            <h5 id="cafe-estado-cafe-nome" class="cafe-nome">Estado do Café</h5>
                            <p class="cafe-bairro">Consolação · São Paulo</p>
                            <p class="cafe-desc">Espaço dedicado à educação cafeeira: cursos de cupping, workshops sobre
                                métodos de extração e encontros com produtores diretos. O ambiente minimalista não é por
                                acaso
                                — tudo aqui serve para destacar o protagonista: o café. Menu reduzido, impacto máximo.
                            </p>
                            <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Educativo e especializado">★★★★★
                                &nbsp;
                                Educação &amp; Especialidade</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-brula-nome">
                            <h5 id="cafe-brula-nome" class="cafe-nome">Brúla — Café & Gastronomia</h5>
                            <p class="cafe-bairro">Pinheiros · São Paulo</p>
                            <p class="cafe-desc">O encontro entre café de excelência e culinária criativa. O chef
                                trabalha
                                com café não apenas na xícara, mas nos pratos — desde marinadas sutis até sobremesas
                                ousadas.
                                Um destino para quem procura harmonia entre especialidades.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 5 estrelas. Gastronomia e café">★★★★★ &nbsp;
                                Gastronomia &amp; Café</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-grao-origem-nome">
                            <h5 id="cafe-grao-origem-nome" class="cafe-nome">Grão de Origem</h5>
                            <p class="cafe-bairro">Jardins · São Paulo</p>
                            <p class="cafe-desc">Importadora e cafeteria que trabalha diretamente com fazendas, trazendo
                                cafés rastreáveis e com história. O espaço reflete essa transparência: mapas de origem,
                                fichas
                                de cupping expostas e uma comunidade fiel de apreciadores que retorna periodicamente.
                            </p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Rastreabilidade e comunidade">★★★★☆
                                &nbsp;
                                Origem &amp; Comunidade</p>
                        </li>
                        <li class="cafe-item" aria-labelledby="cafe-kilo-nome">
                            <h5 id="cafe-kilo-nome" class="cafe-nome">Café Kilo</h5>
                            <p class="cafe-bairro">Vila Leopoldina · São Paulo</p>
                            <p class="cafe-desc">Cafeteria industrial-chic com atmosfera descontraída e barista
                                atencioso. O
                                foco é na prática: máquinas visíveis, processo transparente e um menu que vai desde o
                                espresso
                                clássico até experimentações com bebidas à base de café. Perfeita para quem quer
                                entender a
                                técnica.</p>
                            <p class="cafe-nota" aria-label="Avaliação: 4 estrelas. Técnica e descontração">★★★★☆ &nbsp;
                                Técnica &amp; Estilo</p>
                        </li>
                    </ul>
                </section>
            </section>
            <div class="orn" aria-hidden="true" style="margin-top:1.5rem">— ✦ ✦ ✦ —</div>
        </div>
        <footer role="contentinfo">
            <div class="np-footer">
                <span>© Café Noir — Vale do Paraíba</span>
                <span>Projeto Integrador · <time datetime="2026">2026</time></span>
                <span>Todos os direitos reservados</span>
            </div>
        </footer>
    </article>
</body>

</html>