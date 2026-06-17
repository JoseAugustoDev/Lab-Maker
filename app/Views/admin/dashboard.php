<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Administrador</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <div class="perfil-page">
        <header class="perfil-topo-header">
            <div class="perfil-titulo-wrapper">
                <p class="perfil-cargo">Administrador</p>
                <h1 class="titulo-pagina">Painel do Administrador</h1>
            </div>
            <div class="perfil-acao-header">
                <a href="<?= base_url('logout') ?>" class="botao-encerrar">Encerrar sessão</a>
            </div>
        </header>

        <main class="perfil-card-area">
            <div class="perfil-card">
                <div class="perfil-card-topo">
                    <div class="avatar-usuario">
                        <img src="<?= base_url('imgs/avatarPerfil.jpg') ?>" alt="Avatar do Administrador">
                    </div>
                    <div class="dados-usuario">
                        <p class="usuario-label">Nome</p>
                        <h2 class="usuario-nome"><?= session()->get('usuario_nome') ?></h2>
                        <p class="usuario-email"><?= session()->get('usuario_email') ?></p>
                        <p class="usuario-status">Administrador do sistema</p>
                    </div>
                </div>

                <div class="acoes-grid">
                    <a href="#" class="acao-card">Cadastro de Professor</a> <!--Como diferenciar? Talvez uma pela cadastro diferente? Se cadastrado por adm é porfessor? Não sei pensar sobre isso-->
                    <!-- <a href="<?= base_url('Telas/perfilAdmControleCurso.html') ?>" class="acao-card">Visualizar Cursos</a> 
                    <a href="<?= base_url('Telas/perfilProfessorTurmas.html') ?>" class="acao-card">Visualizar Turmas</a> <!--Tem telas que são comuns a varios tipos de usuario a diferença é o nivel de permissões esse é uma tela que é esse case-->
                    <a href="<?= base_url('Telas/perfilAdmRelatorio.html') ?>" class="acao-card">Relatórios</a>
                    <a href="#" class="acao-card">Avisos</a> <!--Fazer essa tela-->
                </div>
            </div>
        </main>
    </div>
</body>

</html>