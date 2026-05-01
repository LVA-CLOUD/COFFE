/* =====================================================
   script.js — Amantes de Café · Lógica da página principal
   Depende de: dados.js (deve ser carregado antes)
===================================================== */

/* ── Estado da aplicação ── */
/* Estado — usa var para não conflitar com dados.js */
var filtroAtivo  = 'todos';
var termoBusca   = '';
var listaExibida = [];

/* ─────────────────────────────────────────
   RENDERIZAR CARDS
───────────────────────────────────────── */
function renderizarCards(lista) {
  const grid = document.getElementById('cardsGrid');

  if (lista.length === 0) {
    grid.innerHTML = `
      <div class="empty-state">
        <p>😕 Nenhum café encontrado.<br>Tente outro termo ou categoria.</p>
      </div>`;
    document.getElementById('resultCount').textContent = '0 resultados';
    document.getElementById('mapCount').textContent    = '0 estabelecimentos';
    return;
  }

  document.getElementById('resultCount').textContent =
    lista.length + ' resultado' + (lista.length > 1 ? 's' : '');
  document.getElementById('mapCount').textContent =
    lista.length + ' estabelecimento' + (lista.length > 1 ? 's' : '') +
    ' encontrado' + (lista.length > 1 ? 's' : '');

  grid.innerHTML = lista.map((c, i) => `
    <article
      class="cafe-card"
      onclick="location.href='cafe.html?id=${c.id}'"
      style="animation-delay: ${i * 0.06}s"
      tabindex="0"
      role="button"
      aria-label="Ver detalhes de ${c.nome}"
      onkeydown="if(event.key==='Enter') location.href='cafe.html?id=${c.id}'"
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

/* ─────────────────────────────────────────
   FILTROS
───────────────────────────────────────── */
function filtrar(el) {
  document.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
  el.classList.add('active');
  filtroAtivo = el.dataset.filtro;
  aplicarFiltros();
}

function filtrarCategoria(tipo) {
  filtroAtivo = tipo;
  document.querySelectorAll('.filter-chip').forEach(c => {
    c.classList.toggle('active', c.dataset.filtro === tipo);
  });
  aplicarFiltros();
  document.getElementById('cafes').scrollIntoView({ behavior: 'smooth' });
}

function aplicarFiltros() {
  let lista = [...cafesDB];

  if (filtroAtivo === 'aberto') {
    lista = lista.filter(c => c.aberto);
  } else if (filtroAtivo !== 'todos') {
    lista = lista.filter(c => c.tag === filtroAtivo);
  }

  if (termoBusca) {
    lista = lista.filter(c =>
      c.nome.toLowerCase().includes(termoBusca)   ||
      c.tipo.toLowerCase().includes(termoBusca)   ||
      c.bairro.toLowerCase().includes(termoBusca) ||
      c.tags.some(t => t.toLowerCase().includes(termoBusca))
    );
  }

  listaExibida = lista;
  renderizarCards(lista);
}

/* ─────────────────────────────────────────
   BUSCA POR TEXTO
───────────────────────────────────────── */
function buscar() {
  termoBusca = document.getElementById('searchInput').value.toLowerCase().trim();
  aplicarFiltros();
}

/* ─────────────────────────────────────────
   FECHAR MODAL
───────────────────────────────────────── */
function fecharModal(id) {
  document.getElementById(id).classList.remove('active');
  document.body.style.overflow = '';
}

/* ─────────────────────────────────────────
   FORMULÁRIO DE CADASTRO RÁPIDO (modal)
───────────────────────────────────────── */
function submeterCafe() {
  const nome   = document.getElementById('fNome').value.trim();
  const tipo   = document.getElementById('fTipo').value;
  const bairro = document.getElementById('fBairro').value.trim();

  if (!nome || !tipo || !bairro) {
    alert('Por favor, preencha os campos obrigatórios (*).');
    return;
  }

  const novoCafe = {
    id:        cafesDB.length + 1,
    emoji:     '🆕',
    bgColor:   '#EDF5FB',
    nome:      nome,
    tipo:      document.getElementById('fTipo').options[document.getElementById('fTipo').selectedIndex].text,
    tag:       tipo,
    aberto:    true,
    stars:     '★★★★☆',
    rating:    '—',
    desc:      document.getElementById('fDesc').value.trim() || 'Novo estabelecimento cadastrado.',
    distancia: '—',
    preco:     document.getElementById('fPreco').value.trim() || '—',
    horario:   document.getElementById('fHorario').value.trim() || '—',
    bairro:    bairro,
    tags:      [],
    avaliacoes: 0,
    lat: -23.1900,
    lng: -45.8850,
  };

  cafesDB.push(novoCafe);
  fecharModal('modalCadastro');

  filtroAtivo = 'todos';
  termoBusca  = '';
  document.getElementById('searchInput').value = '';
  document.querySelectorAll('.filter-chip').forEach(c =>
    c.classList.toggle('active', c.dataset.filtro === 'todos')
  );
  aplicarFiltros();

  setTimeout(() => {
    alert(`✅ "${nome}" cadastrado com sucesso!`);
  }, 300);

  ['fNome','fTipo','fBairro','fHorario','fPreco','fDesc','fEndereco','fContato']
    .forEach(id => { document.getElementById(id).value = ''; });
}

/* ─────────────────────────────────────────
   GEOLOCALIZAÇÃO
───────────────────────────────────────── */
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
      const lat = pos.coords.latitude.toFixed(4);
      const lng = pos.coords.longitude.toFixed(4);
      document.getElementById('cidadeAtual').textContent = `Lat ${lat}, Lng ${lng}`;
      btn.textContent = '✅ Localização ativa';
    },
    () => {
      alert('Não foi possível obter sua localização.');
      btn.textContent = '📍 Usar minha localização';
      btn.disabled = false;
    }
  );
}

/* ─────────────────────────────────────────
   MENU MOBILE
───────────────────────────────────────── */
function toggleMenu() {
  document.getElementById('navMenu').classList.toggle('open');
}

/* ─────────────────────────────────────────
   EVENTOS
───────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', function () {

  /* Inicializa cards */
  renderizarCards(cafesDB);

  /* Busca em tempo real */
  document.getElementById('searchInput').addEventListener('input', () => {
    termoBusca = document.getElementById('searchInput').value.toLowerCase().trim();
    aplicarFiltros();
  });

  /* Busca ao pressionar Enter */
  document.getElementById('searchInput').addEventListener('keydown', e => {
    if (e.key === 'Enter') buscar();
  });

  /* Fecha modais clicando fora */
  document.getElementById('modalDetalhe').addEventListener('click', function (e) {
    if (e.target === this) fecharModal('modalDetalhe');
  });
  document.getElementById('modalCadastro').addEventListener('click', function (e) {
    if (e.target === this) fecharModal('modalCadastro');
  });

  /* Fecha modais com ESC */
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      fecharModal('modalDetalhe');
      fecharModal('modalCadastro');
    }
  });

});