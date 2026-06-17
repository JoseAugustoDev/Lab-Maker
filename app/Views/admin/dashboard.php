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
                    <a href="<?= base_url('admin/professores/create') ?>" class="acao-card">Cadastro de Professor</a>
                    <a href="<?= base_url('admin/professores') ?>" class="acao-card">Listar Professores</a>
                    <a href="<?= base_url('admin/cursos/create') ?>" class="acao-card">Cadastrar Cursos</a> 
                    <a href="<?= base_url('admin/cursos') ?>" class="acao-card">Visualizar Cursos</a> 
                    <a href="<?= base_url('admin/turmas/create') ?>" class="acao-card">Cadastrar Turmas</a> 
                    <a href="<?= base_url('admin/turmas') ?>" class="acao-card">Visualizar Turmas</a>
                    <a href="<?= base_url('admin/relatorios') ?>" class="acao-card">Relatórios</a>
                    <a href="#" class="acao-card">Avisos</a> <!--Fazer essa tela-->
                </div>
            </div>
        </main>
    </div>
</body>

</html>