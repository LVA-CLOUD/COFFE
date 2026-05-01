<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amantes de Café — Cafés & Docerias</title>
    <link rel="stylesheet" href="./css/stylee.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet" />

    <!-- CSS externo -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <!-- ════════════════════════════════════════
       HEADER
  ════════════════════════════════════════ -->
    <header>
        <a href="index.php" class="logo">Amantes de <span>Café</span></a>

        <nav id="navMenu">
            <a href="mapa.html">Mapa</a>
            <a href="#categorias">Categorias</a>
            <a href="#cafes">Explorar</a>
            <a href="#sobre">Sobre</a>
            <a class="btn-header" href="cadastro.html">+ Cadastrar Café</a>
        </nav>

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

        <!-- Banner Localização -->
        <div class="location-banner" id="locationBanner">
            <div class="location-dot"></div>
            <span>Exibindo resultados para <strong id="cidadeAtual">São José dos Campos, SP</strong></span>
            <button class="btn-locate" onclick="usarLocalizacao()">📍 Usar minha localização</button>
        </div>

        <!-- Mapa -->
        <div class="section-header" id="mapa">
            <div class="section-title">Mapa de cafés</div>
            <a href="mapa.html" class="section-link">Ver mapa completo →</a>
        </div>

        <div class="map-container" aria-label="Mapa com a localização dos cafés">
            <div class="map-bg"></div>

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
                <a href="mapa.html" class="btn-map">Abrir mapa completo</a>
            </div>
        </div>

        <!-- Categorias -->
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

        <!-- Cards de Cafés -->
        <div class="section-header" id="cafes">
            <div class="section-title">Perto de você</div>
            <span class="section-link" id="resultCount">6 resultados</span>
        </div>

        <div class="cards-grid" id="cardsGrid">
            <!-- Gerado via JavaScript -->
        </div>

        <!-- CTA -->
        <div class="cta-section" id="sobre">
            <h2>Tem um café <em>especial</em>?</h2>
            <p>Cadastre seu estabelecimento gratuitamente e apareça no mapa para milhares de amantes de café.</p>
            <a href="cadastro.html" class="btn-cta">Cadastrar meu café gratuitamente</a>
        </div>

    </main>


    <!-- ════════════════════════════════════════
       FOOTER
  ════════════════════════════════════════ -->
    <footer>
        <div class="footer-inner">
            <a href="index.php" class="logo">Amantes de <span>Café</span></a>
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
        <div class="modal">
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
       MODAL — CADASTRO RÁPIDO
  ════════════════════════════════════════ -->
    <div class="form-overlay" id="modalCadastro" role="dialog" aria-modal="true">
        <div class="form-modal">
            <div class="form-titulo">Cadastrar meu café</div>
            <div class="form-sub">Preencha os dados e seu estabelecimento aparecerá no mapa em breve.</div>

            <div class="form-group">
                <label for="fNome">Nome do estabelecimento *</label>
                <input type="text" id="fNome" placeholder="Ex: Café das Flores" />
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
                    <input type="text" id="fBairro" placeholder="Ex: Centro" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="fHorario">Horário</label>
                    <input type="text" id="fHorario" placeholder="Ex: 8h às 20h" />
                </div>
                <div class="form-group">
                    <label for="fPreco">Preço médio</label>
                    <input type="text" id="fPreco" placeholder="Ex: R$ 10–30" />
                </div>
            </div>

            <div class="form-group">
                <label for="fDesc">Descrição</label>
                <textarea id="fDesc" placeholder="Fale sobre o seu café..."></textarea>
            </div>

            <div class="form-group">
                <label for="fEndereco">Endereço</label>
                <input type="text" id="fEndereco" placeholder="Rua, número, bairro" />
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
       SCRIPTS EXTERNOS
       Ordem importa: dados.js antes de script.js
  ════════════════════════════════════════ -->
    <script src="./js/dados.js"></script>
    <script src="./js/script.js"></script>

</body>

</html>