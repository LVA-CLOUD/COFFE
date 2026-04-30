/* =====================================================
   dados.js — Banco de dados compartilhado do Amantes de Café
   Inclua este arquivo em todas as páginas:
   <script src="dados.js"></script>
===================================================== */

const CAFES = [
  {
    id: 1,
    emoji: '☕', bgColor: '#F5EBE0',
    nome: 'Café do Jardim',
    tipo: 'Cafeteria', tag: 'cafe',
    aberto: true,
    stars: 5, rating: 4.9, avaliacoes: 312,
    desc: 'O melhor espresso da cidade, servido em ambiente acolhedor com vista para o jardim interno. Grãos selecionados de origem única, torrados na casa toda semana.',
    descLonga: 'Fundado em 2018 por dois baristas apaixonados, o Café do Jardim rapidamente se tornou referência em São José dos Campos. Utilizamos grãos de fazendas certificadas do Sul de Minas e do Cerrado, com torras feitas na própria loja todas as segundas-feiras. Nosso método pour-over é considerado pelos clientes o melhor da cidade. O ambiente foi projetado para ser um refúgio no meio da rotina: plantas por toda parte, luz natural, música ao vivo às sextas.',
    distancia: '0,3 km', preco: 'R$ 8–18',
    horario: '7h às 20h', bairro: 'Jardim Aquarius',
    endereco: 'Rua das Acácias, 142 — Jardim Aquarius',
    telefone: '(12) 99123-4567',
    instagram: '@cafedojardim',
    tags: ['Espresso Especial', 'Vegan Options', 'Wi-Fi', 'Coworking', 'Pet Friendly'],
    lat: -23.1791, lng: -45.8872,
    fotos: ['☕', '🌿', '📸'],
    reviews: [
      { autor: 'Ana Paula', nota: 5, texto: 'O melhor café que já tomei em SJC! O ambiente é lindo e o espresso é impecável.', data: '15/04/2025' },
      { autor: 'Carlos M.', nota: 5, texto: 'Vou toda semana. O coworking é ótimo para trabalhar.', data: '10/04/2025' },
      { autor: 'Fernanda R.', nota: 4, texto: 'Ótimo café, um pouco cheio nos fins de semana mas vale a pena.', data: '02/04/2025' },
    ],
  },
  {
    id: 2,
    emoji: '🥐', bgColor: '#EDE8F5',
    nome: 'Bistrô Aroma',
    tipo: 'Bistrô', tag: 'bistro',
    aberto: true,
    stars: 4, rating: 4.6, avaliacoes: 187,
    desc: 'Bistrô francês com croissants artesanais, quiches deliciosas e cafés especiais importados direto da França.',
    descLonga: 'O Bistrô Aroma traz o charme parisiense para o coração de São José dos Campos. Nossa chef Isabelle estudou confeitaria em Lyon e traz receitas autênticas adaptadas com ingredientes locais. Os croissants são feitos diariamente com manteiga francesa e levam 3 dias de preparo. Nossa seleção de cafés inclui blends exclusivos da Etiópia e da Colômbia.',
    distancia: '0,7 km', preco: 'R$ 15–45',
    horario: '8h às 21h', bairro: 'Centro',
    endereco: 'Av. Nelson D\'Ávila, 380 — Centro',
    telefone: '(12) 99234-5678',
    instagram: '@bistroaroma',
    tags: ['Croissant Artesanal', 'Almoço', 'Reservas', 'Pet Friendly', 'Carta de Vinhos'],
    lat: -23.1846, lng: -45.8791,
    fotos: ['🥐', '🫖', '🍷'],
    reviews: [
      { autor: 'Roberto S.', nota: 5, texto: 'O croissant é inacreditável! Derrete na boca. Voltarei sempre.', data: '18/04/2025' },
      { autor: 'Mariana L.', nota: 4, texto: 'Ambiente sofisticado, ótimo para encontros especiais.', data: '12/04/2025' },
    ],
  },
  {
    id: 3,
    emoji: '🍰', bgColor: '#E8F5EC',
    nome: 'Doceria Belle',
    tipo: 'Doceria', tag: 'doceria',
    aberto: false,
    stars: 5, rating: 4.8, avaliacoes: 425,
    desc: 'Doces artesanais franceses e brasileiros, macarons exclusivos e bolos personalizados para qualquer ocasião.',
    descLonga: 'A Doceria Belle nasceu do sonho de Patricia em unir a confeitaria francesa com os sabores brasileiros que ela ama. Macarons de cajá-manga, brigadeiro gourmet com flor de sal, bolos de tapioca com creme de maracujá. Cada peça é feita com amor e atenção a cada detalhe. Fazemos encomendas para casamentos, aniversários e eventos corporativos.',
    distancia: '1,1 km', preco: 'R$ 6–55',
    horario: '9h às 18h (fecha às 18h)', bairro: 'Vila Adyana',
    endereco: 'Rua Baronesa do Campo, 67 — Vila Adyana',
    telefone: '(12) 99345-6789',
    instagram: '@docellebelle',
    tags: ['Macarons', 'Bolos Personalizados', 'Sem Glúten', 'Encomendas', 'Casamentos'],
    lat: -23.1923, lng: -45.8850,
    fotos: ['🍰', '🎂', '🍬'],
    reviews: [
      { autor: 'Julia F.', nota: 5, texto: 'Fiz o bolo do meu casamento com elas. Perfeito, inesquecível!', data: '20/04/2025' },
      { autor: 'Thiago B.', nota: 5, texto: 'Macaron de maracujá é outro nível. Compro toda semana.', data: '08/04/2025' },
      { autor: 'Camila N.', nota: 4, texto: 'Ótimos doces, só acho que fecha cedo demais.', data: '01/04/2025' },
    ],
  },
  {
    id: 4,
    emoji: '🍨', bgColor: '#FFF5E8',
    nome: 'Gelato Vivace',
    tipo: 'Gelateria', tag: 'gelato',
    aberto: true,
    stars: 4, rating: 4.5, avaliacoes: 203,
    desc: 'Gelatos artesanais italianos com frutas frescas da região do Vale do Paraíba. Opções veganas disponíveis.',
    descLonga: 'Gelato Vivace usa frutas colhidas de produtores rurais a menos de 50km de SJC, garantindo frescor e sabor incomparáveis. Nosso gelato é feito com 60% menos gordura que o sorvete tradicional e sem corantes artificiais. Sabores da estação mudam mensalmente. Atualmente: goiaba com gengibre, banana-maçã com canela e maracujá com coco.',
    distancia: '1,4 km', preco: 'R$ 12–28',
    horario: '11h às 22h', bairro: 'Jardim São Dimas',
    endereco: 'Rua Voluntários da Pátria, 210 — Jd. São Dimas',
    telefone: '(12) 99456-7890',
    instagram: '@gelatovivace',
    tags: ['Gelato Artesanal', 'Frutas Locais', 'Vegano', 'Take Away', 'Sem Corantes'],
    lat: -23.1758, lng: -45.8940,
    fotos: ['🍨', '🍓', '🥭'],
    reviews: [
      { autor: 'Pedro A.', nota: 5, texto: 'O de goiaba com gengibre é divino. Melhor gelato que já comi!', data: '22/04/2025' },
      { autor: 'Sofia C.', nota: 4, texto: 'Sabores criativos e naturais. Indico para todos!', data: '14/04/2025' },
    ],
  },
  {
    id: 5,
    emoji: '📚', bgColor: '#F5E8E8',
    nome: 'Café Cultura',
    tipo: 'Cafeteria & Livraria', tag: 'cafe',
    aberto: true,
    stars: 5, rating: 4.7, avaliacoes: 531,
    desc: 'Café integrado a uma livraria independente. Eventos culturais semanais, lançamentos e saraus toda última quinta.',
    descLonga: 'O Café Cultura é mais que um café — é um ponto de encontro cultural. Nossa livraria independente tem mais de 3.000 títulos curados com carinho. Toda quinta-feira tem sarau; na última quinta do mês, lançamento de livro com o autor presente. Servimos cafés especiais, chás raros e uma seleção de vinhos naturais para os eventos noturnos. O Wi-Fi é rápido e o ambiente foi feito para quem quer ficar horas.',
    distancia: '1,8 km', preco: 'R$ 9–22',
    horario: '9h às 21h', bairro: 'Centro',
    endereco: 'Rua 7 de Setembro, 450 — Centro',
    telefone: '(12) 99567-8901',
    instagram: '@cafecultura_sjc',
    tags: ['Livraria', 'Eventos', 'Café Especial', 'Wi-Fi', 'Sarau', 'Vinho Natural'],
    lat: -23.1800, lng: -45.8820,
    fotos: ['📚', '🎭', '🍷'],
    reviews: [
      { autor: 'Lucas M.', nota: 5, texto: 'Lugar incrível! Passei 4 horas lendo e tomando café sem perceber o tempo passar.', data: '19/04/2025' },
      { autor: 'Beatriz K.', nota: 5, texto: 'O sarau de quinta é imperdível. Artistas locais incríveis!', data: '11/04/2025' },
      { autor: 'Rafael O.', nota: 4, texto: 'Ótima curadoria de livros. O café podia ter mais opções de leites vegetais.', data: '05/04/2025' },
    ],
  },
  {
    id: 6,
    emoji: '🌿', bgColor: '#E8F2EC',
    nome: 'Raízes Café',
    tipo: 'Cafeteria Orgânica', tag: 'cafe',
    aberto: false,
    stars: 4, rating: 4.4, avaliacoes: 148,
    desc: 'Cafeteria 100% orgânica com grãos de fazendas parceiras certificadas. Granolas, pães integrais e sucos naturais.',
    descLonga: 'O Raízes Café nasceu do compromisso com a sustentabilidade e com o bem-estar. Todos os ingredientes são certificados orgânicos e adquiridos de pequenos produtores do Vale do Paraíba. Nossos pães são fermentados naturalmente por 24h, sem fermento químico. O café é cultivado sem agrotóxicos na Fazenda São João, em Carmo de Minas. Zero plástico descartável — tudo é compostado ou reciclado.',
    distancia: '2,2 km', preco: 'R$ 10–30',
    horario: '7h às 17h', bairro: 'Jardim Esplanada',
    endereco: 'Av. São João, 890 — Jardim Esplanada',
    telefone: '(12) 99678-9012',
    instagram: '@raizescafe',
    tags: ['Orgânico', 'Saudável', 'Café Especial', 'Sem Lactose', 'Zero Plástico', 'Vegano'],
    lat: -23.1880, lng: -45.8780,
    fotos: ['🌿', '🥗', '🌱'],
    reviews: [
      { autor: 'Amanda V.', nota: 5, texto: 'Pão de fermentação natural incrível! Café orgânico de verdade.', data: '17/04/2025' },
      { autor: 'Diego F.', nota: 4, texto: 'Ótimas opções veganas. Fecha cedo mas vale a visita matinal.', data: '09/04/2025' },
    ],
  },
];

/* ── Utilitários ── */
function getCafeById(id) {
  return CAFES.find(c => c.id === parseInt(id));
}

function renderStars(nota) {
  return '★'.repeat(Math.round(nota)) + '☆'.repeat(5 - Math.round(nota));
}

function getSavedReviews(cafeId) {
  try {
    const key = 'reviews_' + cafeId;
    return JSON.parse(sessionStorage.getItem(key) || '[]');
  } catch { return []; }
}

function saveReview(cafeId, review) {
  try {
    const key = 'reviews_' + cafeId;
    const existing = getSavedReviews(cafeId);
    existing.unshift(review);
    sessionStorage.setItem(key, JSON.stringify(existing));
  } catch {}
}