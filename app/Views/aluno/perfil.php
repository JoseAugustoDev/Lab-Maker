
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Aluno</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <div class="container perfil-page">
        <header class="perfil-topo-header">
            <div class="perfil-titulo-wrapper">
                <h1 class="titulo-pagina">Perfil do Aluno</h1>
            </div>
            <div class="perfil-acao-header">
                <a href="<?= base_url('logout') ?>" class="botao-encerrar">Encerrar sessão</a>
            </div>
        </header>

        <main class="perfil-card-area">
            <div class="perfil-card">
                <div class="perfil-card-topo">
                    <div class="avatar-usuario">
                        <img src="<?= base_url('imgs/avatarPerfil.jpg') ?>" alt="Avatar do Aluno">
                    </div>
                    <div class="dados-usuario">
                        <p class="usuario-label">Nome</p>
                        <h2 class="usuario-nome"><?= session()->get('usuario_nome') ?></h2>
                        <p class="usuario-email"><?= session()->get('usuario_email') ?></p>
                    </div>
                </div>

                <div class="acoes-grid">
                    <a href="<?= base_url('aluno/turmas') ?>" class="acao-card">Ver Turmas</a>
                    <a href="<?= base_url('aluno/notas') ?>" class="acao-card">Notas</a>
                </div>
            </div>
        </main>
    </div>
</body>

</html>