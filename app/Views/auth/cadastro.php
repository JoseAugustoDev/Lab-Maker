<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LabMaker</title>
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
                    <h1>Cadastro - LabMaker</h1>
                    <p>Preencha os campos abaixo para criar sua conta</p>
                </div>

                <div class="hero-image">
                    <img src="<?= base_url('imgs/img1.jpg') ?>" alt="Cadastro">
                </div>

            </div>
        </section>
        <section class="login-form-container">
            <div class="login-box">
                <form action="<?= base_url('cadastro') ?>" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <!--olhar isso -->
                    <!--  <div class="form-group">
                        <label for="tipo">Tipo de Usuário:</label>
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value="">Selecione</option>
                            <option value="aluno">Aluno</option>
                            <option value="professor">Professor</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <a href="recuperar_senha.html">Esqueci minha senha</a>
                    </div>
                    <div class="form-group">
                        <a href="login.html">Já tem uma conta? Faça login</a>
                    </div>

                    <button type="submit" class="btn">Cadastrar</button>
                </form>
            </div>
        </section>
    </div>
</body>
