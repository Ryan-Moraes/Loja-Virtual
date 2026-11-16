<?php
require 'produtos.php';

function carregaProd($categoria) {
    global $produtos;

    for ($repeticao = 0; $repeticao < 2; $repeticao++) {
        foreach ($produtos as $produto) {
            if ($produto['cat'] == $categoria) {
                $precoFormatado = 'R$ ' . number_format((float) $produto['preco'], 2, ',', '.');
                echo '
                    <article class="produto-card">
                        <div class="produto-imagem">
                            <img src="' . $produto['imagem'] . '" alt="Imagem do produto">
                        </div>
                        <h3>' . $produto['nome'] . '</h3>
                        <p class="preco">' . $precoFormatado . '</p>
                        <button type="button">Comprar</button>
                    </article>
                ';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>PetabyteShop</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="Index.php"><img id="logo" src="imagens/logo.png" alt="Logo da Loja"></a></li>
                <li>
                    <ul id="conteudo">
                        <li><a href="#CPU" onclick="verMais('cpu')">CPU</a></li>
                        <li><a href="#RAM" onclick="verMais('ram')">RAM</a></li>
                        <li><a href="#GPU" onclick="verMais('gpu')">GPU</a></li>
                        <li><a href="#HDSSD" onclick="verMais('hdssd')">HD/SSD</a></li>
                        <li><a href="#Monitor" onclick="verMais('monitor')">Monitores</a></li>
                        <li><a href="#Gabinete" onclick="verMais('gabinete')">Gabinetes</a></li>
                        <li><a href="#MouseTeclado" onclick="verMais('mouseteclado')">Mouses/Teclados</a></li>
                    </ul>
                </li>
                <li><a href="Login.html">Login</a></li>
            </ul>
        </nav>
        <main>

            <section class="slider-container">
                <div class="slider">
                    <div class="slide"><img src="imagens/Slide-01.png" alt="Slide 1"></div>
                    <div class="slide"><img src="imagens/Slide-02.png" alt="Slide 2"></div>
                    <div class="slide"><img src="imagens/Slide-03.png" alt="Slide 3"></div>
                </div>
                <button class="ante" onclick="mudarSlide(-1)"></button>
                <button class="prox" onclick="mudarSlide(1)"></button>
            </section>

            <section id="CPU" class="cat-produtos">
                <h2>Processadores (CPU)</h2>
                <div class="grid-produtos" id="lista-cpu">
                    <?php carregaProd('CPU'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('cpu')">Ver mais</button>
            </section>

            <section id="RAM" class="cat-produtos">
                <h2>Memórias RAM</h2>
                <div class="grid-produtos" id="lista-ram">
                    <?php carregaProd('RAM'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('ram')">Ver mais</button>
            </section>

            <section id="GPU" class="cat-produtos">
                <h2>Placas de Vídeo (GPU)</h2>
                <div class="grid-produtos" id="lista-gpu">
                    <?php carregaProd('GPU'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('gpu')">Ver mais</button>
            </section>

            <section id="HDSSD" class="cat-produtos">
                <h2>HD / SSD</h2>
                <div class="grid-produtos" id="lista-hdssd">
                    <?php carregaProd('HD/SSD'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('hdssd')">Ver mais</button>
            </section>

            <section id="Monitor" class="cat-produtos">
                <h2>Monitores</h2>
                <div class="grid-produtos" id="lista-monitor">
                    <?php carregaProd('Monitor'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('monitor')">Ver mais</button>
            </section>

            <section id="Gabinete" class="cat-produtos">
                <h2>Gabinetes</h2>
                <div class="grid-produtos" id="lista-gabinete">
                    <?php carregaProd('Gabinete'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('gabinete')">Ver mais</button>
            </section>

            <section id="MouseTeclado" class="cat-produtos">
                <h2>Mouses e Teclados</h2>
                <div class="grid-produtos" id="lista-mouseteclado">
                    <?php carregaProd('Mouses e Teclados'); ?>
                </div>
                <button class="ver-mais" type="button" onclick="verMais('mouseteclado')">Ver mais</button>
            </section>
        </main>

        <footer>
            <ul>
                <li><a href="inexistente.html">Sobre nos</a></li>
                <li>Contato:
                    <ul>
                        <li>Email: PetabyteContato@Nao.existe</li>
                        <li>Telefone: +00 (00) 00000-0000</li>
                        <li>Local: Rua Não existe 00, inexistente NE</li>
                    </ul>
                </li>
            </ul>
        </footer>
        <script src="script.js"></script>
    </body>
</html>