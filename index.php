<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felipe Oliveira / Portfólio</title>
    <link rel="stylesheet" href="css/portfolio.css">
</head>

<body>
    <!-- MENU -->

    <header>
        <div class="logo">
            <h2>Felipe <span>Oliveira</span></h2>
        </div>
        <nav>
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#projetos">Projetos</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->

    <main>

        <!-- SESSÃO DE INÍCIO -->

        <section id="inicio" class="inicio">
            <div class="inicio-conteudo">
                <p class="apresentacao">Olá, eu sou</p>
                <h1>Felipe Oliveira</h1>
                <h2>Desenvolvedor de software.</h2>
                <p class="descricao">
                    Estou iniciando na programação.
                </p>
                <div class="botoes">
                    <a href="#projetos" class="botao">Ver projetos</a>
                    <a href="#contato" class="botao botao-secundario">Entrar em contato</a>
                </div>
            </div>
        </section>

        <!-- SOBRE -->

        <section id="sobre" class="sobre">

            <div class="titulo-secao">
                <p>Conheça um pouco</p>
                <h2>Sobre mim!</h2>
            </div>

            <div class="sobre-conteudo">

                <div class="sobre-texto">
                    <h2>
                        Estudo Desenvolvimento de Sistemas no SENAI.
                    </h2>
                    <p>
                        Sou estudante de desenvolvimento de software e estou construindo minha base em programação, com foco inicialmente em desenvolvimento web.

                        Atualmente estou estudando HTML e CSS, buscando entender não apenas como criar interfaces, mas também como estruturar aplicações de forma organizada e funcional. Tenho interesse tanto em front-end quanto em back-end e pretendo ampliar meu conhecimento em diferentes tecnologias ao longo da minha formação.

                        Meu objetivo é transformar o que aprendo em projetos reais, desenvolver cada vez mais minha capacidade de resolver problemas e, futuramente, atuar profissionalmente como desenvolvedor de software.
                    </p>
                </div>

                <div class="habilidades">
                    <div class="habilidade">
                        <h2>C</h2>
                        <h4> • Intermediário</h4>
                        <p>Tenho uma base em C, com conhecimentos de lógica de programação, variáveis, estruturas condicionais e de repetição.</p>
                    </div>
                    <div class="habilidade">
                        <h2>HTML</h2>
                        <h4> • Iniciante</h4>
                        <p>Aprendendo a estruturar páginas web com HTML e conhecendo os principais elementos e recursos da linguagem.</p>
                    </div>

                    <div class="habilidade">
                        <h2>CSS</h2>
                        <h4> • Iniciante</h4>
                        <p>Aprendendo a estilizar páginas, criar layouts e desenvolver interfaces mais organizadas e responsivas.</p>
                    </div>

                    <div class="habilidade">
                        <h2>PHP</h2>
                        <h4> • Iniciante</h4>
                        <p>Estudando PHP e seus fundamentos, com foco em desenvolvimento back-end e integração com aplicações web.</p>
                    </div>

                </div>

            </div>

        </section>

        <section id="projetos" class="projetos-secao">

            <div class="titulo-secao">
                <p>Alguns trabalhos</p>
                <h2>Meus projetos</h2>
            </div>

            <div class="projetos">

                <!-- PROJETO 1 -->

                <div class="card">

                    <div class="numero-projeto">
                        01
                    </div>

                    <h3>Sistema de verificação de idade - POST</h3>
                    <p>
                        Recebe idade e informa se é maior ou menor de idade em POST
                    </p>

                    <div class="tecnologias">
                        <span>PHP</span>
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>
                    <a href="atividades/idade-post.php">Ver projetos</a>
                </div>

                <!-- PROJETO 2-->

                <div class="card">

                    <div class="numero-projeto">
                        02
                    </div>

                    <h3>Sistema de verificação de idade - GET</h3>
                    <p>
                        Recebe idade e informa se é maior ou menor de idade em GET
                    </p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="atividades/dados-json.php">Ver projetos</a>
                </div>

                <!-- PROJETO 3 -->

                <div class="card">

                    <div class="numero-projeto">
                        03
                    </div>

                    <h3>CADASTRO DE NOTAS</h3>
                    <p>
                        Recebe notas e calcula a média do aluno e diz se o aluno está aprovado ou reprovado
                    </p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <!--span>CSS</span-->
                        <span>PHP</span>
                    </div>
                    <a href="atividades/funcaos2.php">Ver projetos</a>
                </div>

                <!-- PROJETO 4 -->

                <div class="card">

                    <div class="numero-projeto">
                        04
                    </div>

                    <h3>CADASTRO DE NOTAS</h3>
                    <p>
                        Recebe notas e calcula a média do aluno e diz se o aluno está aprovado ou reprovado
                    </p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <!--span>CSS</span-->
                        <span>PHP</span>
                    </div>
                    <a href="atividades/funcaos2.php">Ver projetos</a>
                </div>

            </div>

        </section>

        <section id="contato" class="contato">
            <div class="titulo-secao">
                <p>Vamos conversar?</p>
                <h2>Contato</h2>
            </div>
            <div class="contato-links">
                    <a href="https://wa.me/5541992011436">WhatsApp</a>
                    <a href="mailto:felipe.silva190910@gmail.com">Email</a>
                    <a href="https://github.com/oliveirafelix">GitHub</a>
                    <a href="">LinkedIn</a>
            </div>
        </section>
        <footer class="footer">
        <p>
            Desenvolvido por <a href="https://felipe755.devlook.xyz">Felipe Oliveira</a>
        </p>
        <p>
            HTML + CSS
        </p>
        </footer>
    </main>
</body>
</html>