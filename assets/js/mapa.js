/* ── Inicializa Mapa ── */
const map = L.map('mapa', {
    center: [-23.1791, -45.8872],
    zoom: 14,
    zoomControl: true,
});

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap',
    maxZoom: 19,
}).addTo(map);

/* ── Estado ── */
let filtroAtivo = 'todos';
let termoBusca = '';
let marcadores = {};      /* id → marker Leaflet */
let itemSelecionado = null;

/* ── Cria ícone personalizado ── */
function criarIcone(cafe, selecionado = false) {
    const size = selecionado ? 44 : 36;
    const border = selecionado ? '3px solid var(--espresso)' : '2px solid white';
    const shadow = selecionado ? '0 4px 14px rgba(44,24,16,.5)' : '0 2px 8px rgba(0,0,0,.25)';
    return L.divIcon({
        html: `<div style="
        background:${cafe.aberto ? '#C8873A' : '#9A8070'};
        width:${size}px;height:${size}px;
        border-radius:50%;
        display:flex;align-items:center;justify-content:center;
        font-size:${selecionado ? '20px' : '16px'};
        border:${border};
        box-shadow:${shadow};
        transition:all .2s;
      ">${cafe.emoji}</div>`,
        className: '',
        iconSize: [size, size],
        iconAnchor: [size / 2, size / 2],
    });
}

/* ── Popup HTML ── */
function popupHTML(c) {
    return `
      <div class="map-popup-card">
        <div class="popup-emoji">${c.emoji}</div>
        <div class="popup-nome">${c.nome}</div>
        <div class="popup-tipo">${c.tipo}</div>
        <div class="popup-stars">${renderStars(c.stars)} ${c.rating}</div>
        <div class="popup-info">📍 ${c.bairro} · ${c.distancia}<br>🕐 ${c.horario}</div>
        <a class="popup-btn" href="cafe.html?id=${c.id}">Ver detalhes →</a>
      </div>
    `;
}

/* ── Adiciona marcadores ── */
function addMarcadores(lista) {
    /* Remove anteriores */
    Object.values(marcadores).forEach(m => map.removeLayer(m));
    marcadores = {};

    lista.forEach(c => {
        const m = L.marker([c.lat, c.lng], { icon: criarIcone(c) })
            .addTo(map)
            .bindPopup(popupHTML(c), { maxWidth: 260 });

        m.on('click', () => selecionarCafe(c.id));
        marcadores[c.id] = m;
    });
}

/* ── Renderiza lista lateral ── */
function renderizarLista(lista) {
    document.getElementById('panelList').innerHTML = lista.map(c => `
      <div class="list-item ${itemSelecionado === c.id ? 'selected' : ''}" id="item-${c.id}" onclick="selecionarCafe(${c.id})">
        <div class="item-emoji" style="background:${c.bgColor}">${c.emoji}</div>
        <div class="item-body">
          <div class="item-nome">${c.nome}</div>
          <div class="item-tipo">${c.tipo} · ${c.bairro}</div>
          <div class="item-meta">
            <span class="item-stars">${renderStars(c.stars)}</span>
            <span class="item-dist">${c.rating} · ${c.distancia}</span>
            <span class="${c.aberto ? 'badge-open' : 'badge-closed'}">${c.aberto ? 'Aberto' : 'Fechado'}</span>
          </div>
        </div>
      </div>
    `).join('');

    const n = lista.length;
    document.getElementById('panelCount').textContent = n + ' local' + (n !== 1 ? 'is' : '');
    document.getElementById('mapBadge').textContent = n + ' café' + (n !== 1 ? 's' : '') + ' no mapa';
    document.getElementById('btnShowPanel').textContent = `☕ Ver lista (${n})`;
}

/* ── Selecionar café ── */
function selecionarCafe(id) {
    itemSelecionado = id;
    const c = CAFES.find(x => x.id === id);
    if (!c) return;

    /* Centraliza mapa */
    map.flyTo([c.lat, c.lng], 16, { duration: 0.8 });

    /* Abre popup */
    if (marcadores[id]) {
        marcadores[id].openPopup();
        /* Ícone maior */
        Object.keys(marcadores).forEach(mid => {
            marcadores[mid].setIcon(criarIcone(CAFES.find(x => x.id === parseInt(mid)), parseInt(mid) === id));
        });
    }

    /* Destaca item na lista */
    document.querySelectorAll('.list-item').forEach(el => el.classList.remove('selected'));
    const el = document.getElementById('item-' + id);
    if (el) { el.classList.add('selected'); el.scrollIntoView({ behavior: 'smooth', block: 'nearest' }); }
}

/* ── Filtrar ── */
function aplicarFiltros() {
    let lista = [...CAFES];
    if (filtroAtivo === 'aberto') lista = lista.filter(c => c.aberto);
    else if (filtroAtivo !== 'todos') lista = lista.filter(c => c.tag === filtroAtivo);
    if (termoBusca) {
        const q = termoBusca.toLowerCase();
        lista = lista.filter(c =>
            c.nome.toLowerCase().includes(q) ||
            c.bairro.toLowerCase().includes(q) ||
            c.tipo.toLowerCase().includes(q)
        );
    }
    addMarcadores(lista);
    renderizarLista(lista);
}

function setFiltro(el) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    filtroAtivo = el.dataset.f;
    aplicarFiltros();
}

function filtrarMapa() {
    termoBusca = document.getElementById('mapSearch').value;
    aplicarFiltros();
}

/* ── Localização do usuário ── */
let userMarker = null;
function localizarUsuario() {
    if (!navigator.geolocation) { alert('Geolocalização não suportada.'); return; }
    navigator.geolocation.getCurrentPosition(pos => {
        const { latitude: lat, longitude: lng } = pos.coords;
        map.flyTo([lat, lng], 15, { duration: 1 });
        if (userMarker) map.removeLayer(userMarker);
        userMarker = L.marker([lat, lng], {
            icon: L.divIcon({
                html: `<div style="background:#2D7A4F;width:14px;height:14px;border-radius:50%;border:2px solid white;box-shadow:0 0 0 4px rgba(45,122,79,.25)"></div>`,
                className: '', iconSize: [14, 14], iconAnchor: [7, 7],
            })
        }).addTo(map).bindPopup('Você está aqui').openPopup();
    }, () => alert('Não foi possível obter sua localização.'));
}

/* ── Painel ── */
function togglePanel() {
    document.getElementById('sidePanel').classList.toggle('hidden');
}

/* ── Inicializa ── */
aplicarFiltros();

/* Ajusta tamanho do mapa ao redimensionar */
window.addEventListener('resize', () => map.invalidateSize());