<?php include("cabecalho.php"); ?>
<main>
        <section>
            <h2><b>Explore o Fascinante Mundo das Lendas Urbanas</b></h2>
            <p>
                Nosso site é dedicado a explorar os mistérios das lendas urbanas e a riqueza da literatura. 
                Além de curiosidades e histórias intrigantes, apresentamos livros de mistério,suspense, funko pops, canecas personalizadas e mais. 
               
            </p>
        </section>

        <!-- Painéis -->
        <div class="container paineis">
            <section class="painel novidades">
               <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produto8.php">
                            <figure>
                                <img src="img/livo1-preto.jfif" alt="Capa do Livro Martyn o Detetive">
                                <figcaption>"Livro Martyn o Detetive" - R$ 39,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                       <a href="produto7.php">
                            <figure>
                                <img src="img/livro2-amarelo.jfif" alt="Capa do Livro Sherloock Holmes-O Cão dos Baskerville">
                                <figcaption>Livro Sherloock Holmes - O Cão dos Baskerville - R$ 49,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produtolenda.php">
                            <figure class="jason1">
                                <img src="img/funco1a.png" alt="Funco Pop do Jason ">
                                <figcaption>Funco Pop do Jason - R$ 99,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto2.php">
                            <figure class="funco2">
                                <img src="img/funco2-preto.png" alt="Funco Pop do Pânico">
                                <figcaption>Funco Pop do Pânico - R$ 89,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>

            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <li>
                        <a href="produto6.php">
                            <figure>
                                <img src="img/livro3-azul.jfif" alt="Capa do Livro Agatha Christie-O Mistério Sittaford">
                                <figcaption>Livro Agatha Christie - O Mistério Sittaford - R$ 49,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto5.php">
                            <figure>
                                <img src="img/livro4-verde.jpg" alt="Capa do Livro Agatha Christie-O Misterioso Caso de Styles">
                                <figcaption>Livro Agatha Christie-O Misterioso Caso de Styles - R$ 44,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto3.php">
                            <figure class="canecapanico">
                                <img src="img/canecapanico-preto.png" alt="Caneca do Panico">
                                <figcaption>Caneca do Panico - R$ 59,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto4.php">
                            <figure class="caneca2">
                                <img src="img/caneca2-preto.webp" alt="Caneca do Jason">
                                <figcaption>Caneca do Jason - R$ 59,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
        </div>
        <!-- Fim Painéis -->
    </main>
<body> <!-- Inicio do corpo da página -->

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body> <!-- Fim do corpo da página -->
<?php include("rodape.php"); ?>
<script	src="js/jquery.js"></script>
<script	src="js/home.js"></script>
</body>
</html>
