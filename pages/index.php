<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amantes de café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
   <nav>

   </nav>
   <header class="hero">

     <div class="fundo-hero"></div>
     <div class="fundo-luz-hero"></div>
     <div class="vinheta-hero"></div>
     <svg class="manchas-hero" style="position:absolute; inset:0; width:100%; height:100%; pointer-events:none;" viewBox="0 0 800 520" preserveAspectRatio="xMidYMid slice">
        <!-- as manchas -->
         <!-- São feitas com SVG por meio de ellipses, o c é o centro e o r são os raios -->
          <!-- mancha 1 -->
         <ellipse cx="90" cy="80" rx="38" ry="38" fill="none"  stroke="rgba(201,149,26,0.12)"></ellipse>
          <ellipse cx="90" cy="80" rx="30" ry="30" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>
           <ellipse cx="90" cy="80" rx="22" ry="22" fill="none"  stroke="rgba(201,149,26,0.12)"></ellipse>
<!-- mancha 2 -->
           <ellipse cx="600" cy="75" rx="20" ry="20" fill="none"stroke="rgba(245,237,216,0.07)"></ellipse>
          <ellipse cx="600" cy="75" rx="14" ry="14" fill="none" stroke="rgba(245,237,216,0.07)"></ellipse>
          
<!-- mancha 3 -->
           <ellipse cx="200" cy="430" rx="28" ry="28" fill="none" stroke="rgba(245,237,216,0.07)"></ellipse>
          <ellipse cx="200" cy="430" rx="20" ry="20" fill="none" stroke="rgba(245,237,216,0.07)"></ellipse>
          
<!-- mancha 4 -->
           <ellipse cx="680" cy="340" rx="52" ry="52" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>
          <ellipse cx="680" cy="340" rx="42" ry="42" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>
           <ellipse cx="680" cy="340" rx="30" ry="30" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>

           <!-- mancha 5 -->
              <ellipse cx="380" cy="490" rx="44" ry="44" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>
          <ellipse cx="380" cy="490" rx="35" ry="35" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>
           <ellipse cx="380" cy="490" rx="26" ry="26" fill="none" stroke="rgba(201,149,26,0.12)"></ellipse>

     </svg>
   </header>

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
        <section class="container">

            <div class="row jornal">


                <div class="col-md-4">
                    <article class="article-body">
                        <small class="categoria">categoria</small>
                        <h2 class="titulo-artigo">titulo</h2>
                        <p class="subtitulo-artigo">subtitulo</p>
                        <p class="texto-artigo">texto</p>
                    </article>
                </div>
                <div class="col-md-4 destaque">
                    <!-- Puxa os três mais bem avaliados do mês -->
                    <h3 class="titulo-destaque-cafes">Cafés do mês</h3>
                    <div class="card">

                        <small>café do mes</small>
                        <h4 class="nome-cafe">Nome do café</h4>
                        <p class="descricao-cafe">Descrição do café</p>

                    </div>

                    <div class="card">

                        <small>café do mes</small>
                        <h4 class="nome-cafe">Nome do café</h4>
                        <p class="descricao-cafe">Descrição do café</p>

                    </div>

                    <div class="card">

                        <small>Café do mes</small>
                        <h4 class="nome-cafe">Nome do café</h4>
                        <p class="descricao-cafe">Descrição do café</p>

                    </div>

                </div>
                <div class="col-md-4">
                    <article class="article-body">
                        <small class="categoria">categoria</small>
                        <h3 class="titulo-artigo">titulo</h3>
                        <p class="subtitulo-artigo">subtitulo</p>
                        <p class="texto-artigo">texto</p>
                    </article>
                </div>
            </div>
        </section>
    </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  
</body>

</html>