<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabMaker - Formação Maker</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!--Jose, Leticia e Raissa-->

<body>
    <div class="container-sm">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
            integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
            crossorigin="anonymous"></script>

        <section class="hero">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Transforme suas aulas com a Cultura Maker</h1>
                    <p>Capacite-se no uso de Impressoras 3D, CNC Laser, Arduino e Modelagem 3D</p>
                    <a href="<?= base_url('cadastro') ?>" class="btn">Quero me inscrever</a>
                </div>

                <div class="hero-image">
                    <img src="<?= base_url('imgs/img1.jpg') ?>" alt="Cultura Maker">
                </div>
            </div>
        </section>

        <!-- BENEFÍCIOS -->
        <section class="beneficios">
            <div class="container-fluid">
                <h2>O que você vai conquistar</h2>
                <div class="grid">
                    <div class="item">✔ Aplicar tecnologia na sala de aula</div>
                    <div class="item">✔ Desenvolver projetos práticos com alunos</div>
                    <div class="item">✔ Dominar ferramentas maker modernas</div>
                    <div class="item">✔ Aumentar o engajamento dos estudantes</div>
                </div>
            </div>
        </section>

        <!-- descrição -->
        <section class="descricao">
            <div class="container">
                <h2>Aprenda na prática</h2>
                <p>
                    No LabMaker, você aprende fazendo. Desenvolva projetos reais utilizando
                    impressão 3D, corte a laser, robótica com Arduino e modelagem digital,
                    com foco direto na aplicação educacional.
                </p>
            </div>
        </section>

        <!-- Cards -->
        <section class="cards">
            <div class="container">
                <div class="cards-grid">

                    <div class="card">
                        <img src="/imgs/fatiador_modeloimpressora1.jpg" alt="Modelagem 3D">
                        <div class="card-content">
                            <h3>Modelagem 3D</h3>
                            <p>Crie projetos digitais prontos para impressão e prototipagem.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="/imgs/cnc_mdf_imagem2.jpg" alt="CNC Laser">
                        <div class="card-content">
                            <h3>CNC a Laser</h3>
                            <p>Aprenda corte e gravação com precisão profissional.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="/imgs/3D Printing land image.jpg" alt="Impressão 3D">
                        <div class="card-content">
                            <h3>Impressão 3D</h3>
                            <p>Transforme ideias em objetos físicos reais.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="/imgs/robotica_imagem1.jpeg" alt="Robótica Arduino">
                        <div class="card-content">
                            <h3>Robótica com Arduino</h3>
                            <p>Desenvolva projetos interativos e automatizados.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Depoimentos etc -->
        <section class="prova">
            <div class="container">
                <h2>Quem já participou</h2>

                <div class="depoimentos">
                    <div class="depoimento">
                        <p>"Transformei minhas aulas completamente!"</p>
                        <span>- Professora Ana</span>
                    </div>

                    <div class="depoimento">
                        <p>"Os alunos ficaram muito mais engajados."</p>
                        <span>- Professor Carlos</span>
                    </div>

                    <div class="depoimento">
                        <p>"Curso prático e direto ao ponto."</p>
                        <span>- Professora Juliana</span>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <p>© 2026 LabMaker</p>
        </footer>

    </div>
</body>

</html>