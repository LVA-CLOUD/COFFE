<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amantes de café</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>
    <section class="navbar">
        <div class="menu">
            <div class="logo">Café noir</div>
            <a href="./cafe.php">Explorar</a>
            <a href="./mapa.html">Mapa</a>
            <!-- Se estiver logado aparece a parte de perfil, se não aparece para se cadastrar ou fazer login ( php )-->
            <a href="./perfil.php"></a>
        </div>
        <div class="hero">
            <div class="subtitulo">blablabla</div>
            <h1 class="titulo-principal">Café Noir</h1>
            <div class="efeito"></div>
            <h3 class="slogan"></h3>
            <!-- Só vai aparecer se o usuário não estiver logado -->
            <button>Iniciar a jornada</button>
            <a href="#principal">Scroll | </a>
        </div>
    </section>

    <section class="main" id="principal">
        <div class="topo-jornal">
            <hr class="linha-topo">

            <!-- Vai pegar a localidade da pessoa e o dia mes e ano  -->
            <small class="datagem-jornal">

            </small>
            <h2 class="titulo-jornal"></h2>

            <small class="subtitulo-topo-jornal"></small>
            <hr class="linha-baixo">

        </div>
        <section class="jornal">


            <article class="coluna">
                <small class="subtitulo-destaque">categoria</small>
                <h3>Café em destaque</h3>
                <p>Um pouco sobre</p>
            </article>
            <div class="destaque">
                <!-- Puxa os três mais bem avaliados do mês -->
                <div class="titulo-destaques">Cafés do mês </div>
                <div class="d1"></div>
                <div class="d2"></div>
                <div class="d3"></div>
            </div>
            <article class="coluna">
                <small class="subtitulo-destaque">categoria</small>
                <h3>Café em destaque</h3>
                <p>Um pouco sobre</p>
            </article>
        </section>
    </section>
</body>

</html>