/* ── Dados das tags ── */
  const TAGS_OPCOES = [
    'Wi-Fi','Coworking','Pet Friendly','Estacionamento','Acessível',
    'Ar-condicionado','Espaço ao ar livre','Live Music','Vegan Options',
    'Sem Glúten','Sem Lactose','Café Especial','Aceita Reserva','Delivery',
    'Take Away','Aceita Cartão','Pix','Encomendas',
  ];
  const DIAS_OPCOES = ['Seg','Ter','Qua','Qui','Sex','Sáb','Dom'];
  const EMOJI_MAP   = { cafe:'☕', doceria:'🍰', bistro:'🥐', gelato:'🍨', padaria:'🥖', outro:'✨' };
  const TIPO_MAP    = { cafe:'Cafeteria', doceria:'Doceria', bistro:'Bistrô', gelato:'Gelateria', padaria:'Padaria', outro:'Outro' };

  let stepAtual = 1;

  /* Gera tags */
  document.getElementById('tagsGrid').innerHTML = TAGS_OPCOES.map((t,i) => `
    <div>
      <input class="tag-opt" type="checkbox" id="tag${i}" value="${t}" onchange="atualizarPreview()"/>
      <label class="tag-label" for="tag${i}">${t}</label>
    </div>
  `).join('');

  document.getElementById('diasGrid').innerHTML = DIAS_OPCOES.map((d,i) => `
    <div>
      <input class="tag-opt" type="checkbox" id="dia${i}" value="${d}"/>
      <label class="tag-label" for="dia${i}">${d}</label>
    </div>
  `).join('');

  /* ── Navegar entre steps ── */
  function irStep(n) {
    if (n > stepAtual && !validarStep(stepAtual)) return;

    /* Atualiza classes dos steps */
    for (let i = 1; i <= 4; i++) {
      const tab = document.getElementById(`step${i}-tab`);
      tab.className = 'step' + (i === n ? ' active' : i < n ? ' done' : '');
      if (i < n) tab.querySelector('.step-num').textContent = '✓';
      else       tab.querySelector('.step-num').textContent = i;
    }

    /* Mostra seção */
    document.querySelectorAll('.form-section').forEach(s => s.classList.remove('active'));
    document.getElementById(`sec${n}`).classList.add('active');

    /* Progresso */
    document.getElementById('progressFill').style.width = (n / 4 * 100) + '%';

    /* Se step 4, monta resumo */
    if (n === 4) montarResumo();

    stepAtual = n;
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  /* ── Validação por step ── */
  function validarStep(n) {
    if (n === 1) {
      if (!document.getElementById('fNome').value.trim()) {
        alert('Por favor, informe o nome do estabelecimento.'); return false;
      }
      if (!document.querySelector('input[name="categoria"]:checked')) {
        alert('Selecione uma categoria.'); return false;
      }
      if (!document.getElementById('fDesc').value.trim()) {
        alert('Escreva uma descrição curta.'); return false;
      }
    }
    if (n === 2) {
      if (!document.getElementById('fEndereco').value.trim()) {
        alert('Informe o endereço.'); return false;
      }
      if (!document.getElementById('fBairro').value.trim()) {
        alert('Informe o bairro.'); return false;
      }
    }
    return true;
  }

  /* ── Resumo no step 4 ── */
  function montarResumo() {
    const cat  = document.querySelector('input[name="categoria"]:checked');
    const tags = [...document.querySelectorAll('#tagsGrid input:checked')].map(t => t.value);
    const dias = [...document.querySelectorAll('#diasGrid input:checked')].map(d => d.value);
    const min  = document.getElementById('fPrecoMin').value;
    const max  = document.getElementById('fPrecoMax').value;

    document.getElementById('resumo').innerHTML = `
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
        <div><strong>Nome:</strong><br>${document.getElementById('fNome').value}</div>
        <div><strong>Categoria:</strong><br>${cat ? TIPO_MAP[cat.value] : '—'}</div>
        <div><strong>Endereço:</strong><br>${document.getElementById('fEndereco').value || '—'}</div>
        <div><strong>Bairro:</strong><br>${document.getElementById('fBairro').value || '—'}</div>
        <div><strong>Horário:</strong><br>${document.getElementById('fAbre').value} às ${document.getElementById('fFecha').value}</div>
        <div><strong>Preço:</strong><br>R$ ${min||'?'}–${max||'?'}</div>
        <div><strong>WhatsApp:</strong><br>${document.getElementById('fTelefone').value || '—'}</div>
        <div><strong>Instagram:</strong><br>${document.getElementById('fInstagram').value || '—'}</div>
      </div>
      ${tags.length ? `<div style="margin-top:1rem"><strong>Comodidades:</strong><br>${tags.join(', ')}</div>` : ''}
      ${dias.length ? `<div style="margin-top:.6rem"><strong>Dias:</strong> ${dias.join(', ')}</div>` : ''}
      <div style="margin-top:.8rem"><strong>Descrição:</strong><br>${document.getElementById('fDesc').value}</div>
    `;
  }

  /* ── Pré-visualização ao vivo ── */
  function atualizarPreview() {
    const nome = document.getElementById('fNome').value || 'Nome do seu café';
    const cat  = document.querySelector('input[name="categoria"]:checked');
    const tags = [...document.querySelectorAll('#tagsGrid input:checked')].map(t => t.value).slice(0,3);

    document.getElementById('prevNome').textContent = nome;

    if (cat) {
      document.getElementById('prevImg').textContent = EMOJI_MAP[cat.value];
      document.getElementById('prevTipo').textContent = TIPO_MAP[cat.value];
    }

    document.getElementById('prevTags').innerHTML = tags
      .map(t => `<span class="preview-tag">${t}</span>`).join('');
  }

  /* ── Envio final ── */
  function enviarCadastro() {
    /* Oculta steps e form nav, mostra sucesso */
    document.querySelectorAll('.form-section').forEach(s => s.classList.remove('active'));
    document.getElementById('progressFill').style.width = '100%';
    document.querySelectorAll('.step').forEach(s => {
      s.classList.add('done');
      s.classList.remove('active');
    });
    document.getElementById('successScreen').classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  /* ── Máscaras ── */
  function mascararCEP(el) {
    let v = el.value.replace(/\D/g,'').slice(0,8);
    if (v.length > 5) v = v.slice(0,5) + '-' + v.slice(5);
    el.value = v;
  }
  function mascararTel(el) {
    let v = el.value.replace(/\D/g,'').slice(0,11);
    if (v.length > 2)  v = '(' + v.slice(0,2) + ') ' + v.slice(2);
    if (v.length > 10) v = v.slice(0,10) + '-' + v.slice(10);
    el.value = v;
  }