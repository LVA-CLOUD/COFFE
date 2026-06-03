/* ── Determina qual café mostrar (parâmetro ?id=N ou padrão 1) ── */
  const params = new URLSearchParams(location.search);
  const cafe   = getCafeById(params.get('id') || 1);

  if (!cafe) {
    document.body.innerHTML = '<div style="padding:4rem;text-align:center;font-family:sans-serif">Café não encontrado. <a href="index.php">Voltar</a></div>';
    throw new Error('Café não encontrado');
  }

  /* ── Preenche Hero ── */
  document.title = `Amantes de Café — ${cafe.nome}`;
  document.getElementById('cafeHero').style.background =
    `linear-gradient(135deg, ${cafe.bgColor} 0%, #2C1810 100%)`;
  document.getElementById('heroEmoji').textContent  = cafe.emoji;
  document.getElementById('heroBadge').textContent  = cafe.aberto ? '🟢 Aberto agora' : '🔴 Fechado';
  document.getElementById('heroBadge').className    = 'hero-badge ' + (cafe.aberto ? 'open' : 'closed');
  document.getElementById('heroNome').textContent   = cafe.nome;
  document.getElementById('heroTipo').textContent   = cafe.tipo;
  document.getElementById('heroStars').textContent  = renderStars(cafe.stars);
  document.getElementById('heroRating').textContent = `${cafe.rating} (${cafe.avaliacoes} avaliações)`;
  document.getElementById('heroDist').textContent   = `📍 ${cafe.distancia} · ${cafe.bairro}`;

  /* ── Botão rota ── */
  document.getElementById('btnRota').href =
    `https://www.google.com/maps/dir/?api=1&destination=${cafe.lat},${cafe.lng}`;

  /* ── Sobre ── */
  document.getElementById('descLonga').textContent = cafe.descLonga;

  /* ── Galeria ── */
  document.getElementById('galeria').innerHTML = cafe.fotos.map(f =>
    `<div class="gallery-item">${f}</div>`
  ).join('');

  /* ── Tags ── */
  document.getElementById('tagsWrap').innerHTML = cafe.tags.map(t =>
    `<span class="tag">${t}</span>`
  ).join('');

  /* ── Informações sidebar ── */
  document.getElementById('infoRows').innerHTML = `
    <div class="info-row">
      <div class="info-icon">🕐</div>
      <div><div class="info-key">Horário</div><div class="info-val">${cafe.horario}</div></div>
    </div>
    <div class="info-row">
      <div class="info-icon">📍</div>
      <div><div class="info-key">Endereço</div><div class="info-val">${cafe.endereco}</div></div>
    </div>
    <div class="info-row">
      <div class="info-icon">💰</div>
      <div><div class="info-key">Preço médio</div><div class="info-val">${cafe.preco}</div></div>
    </div>
    <div class="info-row">
      <div class="info-icon">📞</div>
      <div><div class="info-key">Telefone</div>
        <div class="info-val"><a class="info-link" href="https://wa.me/55${cafe.telefone.replace(/\D/g,'')}" target="_blank">${cafe.telefone}</a></div>
      </div>
    </div>
    <div class="info-row">
      <div class="info-icon">📸</div>
      <div><div class="info-key">Instagram</div>
        <div class="info-val"><a class="info-link" href="https://instagram.com/${cafe.instagram.replace('@','')}" target="_blank">${cafe.instagram}</a></div>
      </div>
    </div>
  `;

  /* ── Mini Mapa (Leaflet) ── */
  const map = L.map('mapaMini', { zoomControl:false, attributionControl:false })
    .setView([cafe.lat, cafe.lng], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

  const icon = L.divIcon({
    html: `<div style="background:#C8873A;width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:16px;border:3px solid white;box-shadow:0 2px 8px rgba(0,0,0,.3)">${cafe.emoji}</div>`,
    className: '', iconSize:[32,32], iconAnchor:[16,16],
  });
  L.marker([cafe.lat, cafe.lng], { icon }).addTo(map)
    .bindPopup(cafe.nome).openPopup();

  /* ── Cafés próximos ── */
  const nearby = CAFES.filter(c => c.id !== cafe.id).slice(0, 3);
  document.getElementById('nearbyList').innerHTML = nearby.map(c => `
    <div class="nearby-item" onclick="location.href='cafe.html?id=${c.id}'">
      <div class="nearby-emoji">${c.emoji}</div>
      <div>
        <div class="nearby-nome">${c.nome}</div>
        <div class="nearby-dist">${c.distancia} · ${c.bairro}</div>
      </div>
    </div>
  `).join('');

  /* ── AVALIAÇÕES ── */
  function carregarReviews() {
    const base  = cafe.reviews || [];
    const extra = getSavedReviews(cafe.id);
    const todas = [...extra, ...base];

    /* Resumo */
    const total = cafe.avaliacoes + extra.length;
    document.getElementById('ratingNum').textContent   = cafe.rating;
    document.getElementById('ratingStars').textContent = renderStars(Math.round(cafe.rating));
    document.getElementById('ratingTotal').textContent = total + ' avaliações';

    /* Barras de distribuição */
    const dist = {5:0,4:0,3:0,2:0,1:0};
    todas.forEach(r => { if(dist[r.nota] !== undefined) dist[r.nota]++; });
    const max = Math.max(...Object.values(dist), 1);
    document.getElementById('ratingBars').innerHTML = [5,4,3,2,1].map(n => `
      <div class="bar-row">
        <div class="bar-label">${n}★</div>
        <div class="bar-track"><div class="bar-fill" style="width:${(dist[n]/max)*100}%"></div></div>
        <div style="font-size:11px;color:var(--muted);width:20px">${dist[n]}</div>
      </div>
    `).join('');

    /* Lista */
    document.getElementById('listaReviews').innerHTML = todas.map(r => `
      <div class="review-card">
        <div class="review-header">
          <div class="review-autor">${r.autor}</div>
          <div class="review-data">${r.data}</div>
        </div>
        <div class="review-stars">${renderStars(r.nota)}</div>
        <div class="review-texto">${r.texto}</div>
      </div>
    `).join('');
  }

  function enviarReview() {
    const notaEl = document.querySelector('input[name="nota"]:checked');
    const nome   = document.getElementById('fNome').value.trim();
    const texto  = document.getElementById('fTexto').value.trim();

    if (!notaEl)  { alert('Selecione uma nota (1 a 5 estrelas).'); return; }
    if (!nome)    { alert('Digite seu nome.'); return; }
    if (!texto)   { alert('Escreva um comentário.'); return; }

    const hoje = new Date();
    const data = `${String(hoje.getDate()).padStart(2,'0')}/${String(hoje.getMonth()+1).padStart(2,'0')}/${hoje.getFullYear()}`;
    saveReview(cafe.id, { autor:nome, nota:parseInt(notaEl.value), texto, data });
    carregarReviews();

    /* Limpa form */
    document.querySelectorAll('input[name="nota"]').forEach(r => r.checked=false);
    document.getElementById('fNome').value  = '';
    document.getElementById('fTexto').value = '';

    alert('✅ Avaliação publicada! Obrigado pelo feedback.');
  }

  /* ── Favoritar ── */
  function favoritar() {
    const btn = document.getElementById('btnFav');
    btn.textContent = btn.textContent.includes('⭐') ? '💛 Favoritado!' : '⭐ Favoritar';
  }

  /* ── Compartilhar ── */
  function compartilhar() {
    if (navigator.share) {
      navigator.share({ title: cafe.nome, text: cafe.desc, url: location.href });
    } else {
      navigator.clipboard.writeText(location.href).then(() => alert('Link copiado!'));
    }
  }

  carregarReviews();