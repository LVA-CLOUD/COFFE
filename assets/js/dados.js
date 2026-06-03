/* =====================================================
   dados.js — Amantes de Café
   Cafés & Docerias reais de São José dos Campos - SP
===================================================== */

const CAFES = [
    {
        id: 1,
        emoji: '☕', bgColor: '#F5EBE0',
        nome: 'Fika Cafés Especiais',
        tipo: 'Cafeteria', tag: 'cafe',
        aberto: true,
        stars: 5, rating: 4.8, avaliacoes: 4286,
        desc: 'Referência em cafés especiais em SJC. Grãos selecionados, múltiplos métodos de extração, waffles, bolos caseiros e café da manhã completo.',
        descLonga: 'O Fika é parada obrigatória para os amantes de café especial em SJC. Trabalha com grãos selecionados de fazendas como Ninho da Águia, Isso É Café e Wolff Café, com métodos de extração variados: french press, hario v60, aeropress, globinho e chemex. Além dos cafés clássicos como latte, cold brew, mocha e irish coffee, o cardápio inclui waffles, bolos caseiros, croissants, focaccias e café da manhã completo. Com wi-fi liberado e dezenas de tomadas, é o lugar perfeito para trabalhar ou passar a tarde.',
        distancia: '1,2 km', preco: 'R$ 12–35',
        horario: 'Seg a Sex: 9h–21h',
        bairro: 'Jardim Apolo',
        endereco: 'Av. Nove de Julho, 70 — Jardim Apolo I',
        telefone: '(12) 99800-0000',
        instagram: '@fikacafes',
        tags: ['Café Especial', 'Wi-Fi', 'Coworking', 'Café da Manhã', 'Waffles', 'Cold Brew'],
        lat: -23.2214, lng: -45.9011,
        fotos: ['☕', '🧇', '🌿'],
        reviews: [
            { autor: 'Marina S.', nota: 5, texto: 'Melhor café especial de SJC! O v60 é simplesmente incrível. Ambiente aconchegante, Wi-Fi ótimo.', data: '20/04/2025' },
            { autor: 'Lucas T.', nota: 5, texto: 'Trabalho aqui toda semana. As tomadas e o Wi-Fi são perfeitos. O cold brew é viciante!', data: '15/04/2025' },
            { autor: 'Carla M.', nota: 4, texto: 'Ótimo café e waffle delicioso. Pode ficar bem cheio nos fins de semana.', data: '08/04/2025' },
        ],
    },
    {
        id: 2,
        emoji: '🫘', bgColor: '#EDE8F5',
        nome: "Barista's SJC",
        tipo: 'Cafeteria & Torrefação', tag: 'cafe',
        aberto: true,
        stars: 5, rating: 4.9, avaliacoes: 890,
        desc: 'Torrefação artesanal com cafés especiais de fazendas selecionadas. Ambiente industrial aconchegante com jazz ao vivo nas sextas.',
        descLonga: "O Barista's SJC é mais que uma cafeteria — é um ritual de paixão pelo café. Com torrefação própria, selecionam grão a grão das melhores fazendas brasileiras. O cardápio inclui clássicos espanhóis como Espresso Bombón e Carajillo, além de cappuccinos artesanais e cinnamon rolls irresistíveis. Às sextas-feiras, jazz ao vivo cria a trilha sonora perfeita. Domingos têm brunch especial até as 14h.",
        distancia: '2,1 km', preco: 'R$ 15–45',
        horario: 'Ter–Qui: 14h–20h | Sex: 14h–23h | Sáb: 14h–20h | Dom: 9h–20h',
        bairro: 'Centro',
        endereco: 'Centro — São José dos Campos',
        telefone: '(12) 99900-0000',
        instagram: '@baristassjc',
        tags: ['Torrefação Própria', 'Jazz ao Vivo', 'Brunch', 'Café Especial', 'Cinnamon Roll'],
        lat: -23.1794, lng: -45.8854,
        fotos: ['🫘', '🎷', '🥐'],
        reviews: [
            { autor: 'Rafael O.', nota: 5, texto: 'O Espresso Bombón é de outro mundo! Jazz ao vivo na sexta é experiência única em SJC.', data: '18/04/2025' },
            { autor: 'Juliana F.', nota: 5, texto: 'Ambiente incrível, café incrível. O brunch de domingo é imperdível!', data: '13/04/2025' },
        ],
    },
    {
        id: 3,
        emoji: '🌿', bgColor: '#E8F5EC',
        nome: 'Cafetto Company',
        tipo: 'Cafeteria Especial', tag: 'cafe',
        aberto: true,
        stars: 5, rating: 4.7, avaliacoes: 620,
        desc: 'Primeira cafeteria 100% sem glúten e sem leite animal do Vale do Paraíba. Entre as 20 melhores torrefações do Brasil em 2024.',
        descLonga: 'A Cafetto Company é pioneira no Vale do Paraíba: primeira cafeteria e confeitaria 100% sem glúten e sem leite animal da região, com cozinha livre de contaminação cruzada — ideal para celíacos, intolerantes e veganos. Classificada entre as 20 melhores torrefações do Brasil em 2024, representa a quarta onda do café especial. Além do espaço físico no Royal Park, oferece loja virtual com cafés e acessórios, e serviços corporativos para escritórios e eventos.',
        distancia: '3,4 km', preco: 'R$ 14–40',
        horario: 'Consultar Instagram',
        bairro: 'Royal Park — Jardim Aquarius',
        endereco: 'R. Carlos Maria Auricchio, 45 — Royal Park',
        telefone: '(12) 99700-0000',
        instagram: '@cafettocompany',
        tags: ['Sem Glúten', 'Vegano', 'Sem Lactose', 'Torrefação', 'Top 20 Brasil', 'Café Especial'],
        lat: -23.2108, lng: -45.9247,
        fotos: ['🌿', '☕', '🏆'],
        reviews: [
            { autor: 'Patricia L.', nota: 5, texto: 'Finalmente um lugar seguro para celíacos! O café especial é excepcional e os doces são deliciosos.', data: '22/04/2025' },
            { autor: 'André V.', nota: 5, texto: 'Top 20 do Brasil e dá pra ver por quê. Grãos incríveis e atendimento impecável.', data: '10/04/2025' },
        ],
    },
    {
        id: 4,
        emoji: '🍰', bgColor: '#FFF0F5',
        nome: 'Confeitaria Perdita',
        tipo: 'Confeitaria & Café', tag: 'doceria',
        aberto: true,
        stars: 5, rating: 4.8, avaliacoes: 530,
        desc: 'Confeitaria pet friendly comandada por mulheres. Bolos únicos, cookies especiais, brioches e croissants. Os dálmatas Bolota e Biscoito te recebem!',
        descLonga: 'A Perdita é um lugar especial: toda a equipe é formada por mulheres apaixonadas por café e confeitaria. O espaço é completamente pet friendly — você será recebido pelos dálmatas Bolota e Biscoito, os mascotes da casa. No cardápio: cookies especiais, bolos caseiros e de festa, brioches fofinhos, doces artesanais, croissants e cafés variados. Até comidinhas para pets estão disponíveis. Os bolos de festa são únicos e personalizados para qualquer ocasião.',
        distancia: '2,8 km', preco: 'R$ 10–55',
        horario: 'Qua–Sáb: 14h–22h | Dom: 10h–19h',
        bairro: 'Vila Ema',
        endereco: 'R. Justino Cobra, 269 — Vila Ema',
        telefone: '(12) 99600-0000',
        instagram: '@confeitariaperdita',
        tags: ['Pet Friendly', 'Bolos Personalizados', 'Cookies', 'Croissant', 'Brioche', 'Feminino'],
        lat: -23.1950, lng: -45.8780,
        fotos: ['🍰', '🐾', '☕'],
        reviews: [
            { autor: 'Camila R.', nota: 5, texto: 'Fiz meu bolo de aniversário aqui. Perfeito! Os dálmatas são fofíssimos. Voltarei sempre!', data: '21/04/2025' },
            { autor: 'Thiago B.', nota: 5, texto: 'Os cookies são viciantes. Meu pet adorou o espaço. Equipe super simpática!', data: '14/04/2025' },
        ],
    },
    {
        id: 5,
        emoji: '🎨', bgColor: '#F5E8E8',
        nome: 'Jardim do Café',
        tipo: 'Cafeteria', tag: 'cafe',
        aberto: true,
        stars: 4, rating: 4.6, avaliacoes: 380,
        desc: 'Café intimista na Vila Tatetuba com latte art incrível, bolinho caipira com receita de família e atendimento personalizado.',
        descLonga: 'O Jardim do Café é uma joia escondida na Vila Tatetuba. Baristas apaixonados apresentam um cardápio completo com atenção especial ao latte art. O carro-chefe é o bolinho caipira com receita de família — uma homenagem à cultura vale-paraibana. O cardápio inclui bolo cremoso de fubá, banoffee, torradas, tortas e cookies. Para beber: espresso, cappuccino, matte de limão, espresso tônica, chocolate quente e frappuccino. Atendimento intimista e personalizado.',
        distancia: '1,8 km', preco: 'R$ 8–28',
        horario: 'Seg–Sáb: 14h–20h',
        bairro: 'Vila Tatetuba',
        endereco: 'R. Patativa, 101 — Vila Tatetuba',
        telefone: '(12) 99500-0000',
        instagram: '@jardimdocafe_sjc',
        tags: ['Latte Art', 'Bolinho Caipira', 'Espresso Tônica', 'Intimista', 'Cold Brew'],
        lat: -23.1860, lng: -45.8920,
        fotos: ['☕', '🎨', '🌸'],
        reviews: [
            { autor: 'Fernanda K.', nota: 5, texto: 'O latte art deles é de dar inveja! Bolinho caipira então... não tem igual em SJC.', data: '19/04/2025' },
            { autor: 'Bruno S.', nota: 4, texto: 'Ambiente muito aconchegante. Espresso tônica é surpreendente. Recomendo!', data: '11/04/2025' },
        ],
    },
    {
        id: 6,
        emoji: '🍃', bgColor: '#E8F5EC',
        nome: 'Café da Mata',
        tipo: 'Cafeteria', tag: 'cafe',
        aberto: true,
        stars: 4, rating: 4.5, avaliacoes: 710,
        desc: 'Café para família no Centro com área kids, estacionamento grátis e pet friendly. Cappuccino de Nutella, afogato e a famosa coxinha de costela!',
        descLonga: 'O Café da Mata é o lugar perfeito para levar a família inteira. Localizado na Rua Luiz Jacinto, no Centro, tem área kids, estacionamento gratuito e é pet friendly. O cardápio é variado: bolos trufados, cappuccino de Nutella, afogato, bolinho de chuva, chai latte, quiches e frappés. Os clássicos brasileiros também estão presentes — coxinha, pão de queijo — mas o destaque é a coxinha de costela, especialidade da casa que vale muito a pena experimentar.',
        distancia: '0,9 km', preco: 'R$ 8–30',
        horario: 'Ter–Dom: 10h–21h',
        bairro: 'Centro',
        endereco: 'R. Luiz Jacinto, 316 — Centro',
        telefone: '(12) 99400-0000',
        instagram: '@cafedamatasjc',
        tags: ['Família', 'Pet Friendly', 'Area Kids', 'Estacionamento', 'Coxinha de Costela', 'Afogato'],
        lat: -23.1820, lng: -45.8830,
        fotos: ['🍃', '👨‍👩‍👧', '☕'],
        reviews: [
            { autor: 'Mariana P.', nota: 5, texto: 'Perfeito para família! Área kids ótima, café gostoso e a coxinha de costela é sensacional.', data: '17/04/2025' },
            { autor: 'Diego A.', nota: 4, texto: 'Cappuccino de Nutella é delicioso. Estacionamento gratuito é um diferencial enorme.', data: '09/04/2025' },
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
    } catch { }
}

/* Alias para compatibilidade com script.js */
const cafesDB = CAFES;