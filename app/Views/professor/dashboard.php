<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        Dashboard Professor
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-4">

    <header class="mb-4">

        <h2>
            Bem-vindo,
            <?= esc(session()->get('usuario_nome')) ?>
        </h2>

        <p class="text-muted">
            Painel do Professor
        </p>

        <a href="<?= site_url('logout') ?>">Sair</a>

    </header>

    <div class="row">

        <div class="col-md-4">

            <div class="card text-center">

                <div class="card-body">

                    <h1>
                        <?= $quantidadeTurmas ?>
                    </h1>

                    <h5>
                        Turmas
                    </h5>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center">

                <div class="card-body">

                    <h1>
                        <?= $quantidadeAtividades ?>
                    </h1>

                    <h5>
                        Atividades
                    </h5>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card text-center">

                <div class="card-body">

                    <h1>
                        <?= $quantidadeMateriais ?>
                    </h1>

                    <h5>
                        Materiais
                    </h5>

                </div>

            </div>

        </div>

    </div>

    <hr class="my-4">

    <div class="row">

        <div class="col-md-3">

            <a href="<?= site_url('professor/turmas') ?>"
               class="btn btn-primary w-100">

                Minhas Turmas

            </a>

        </div>

        <div class="col-md-3">

            <a href="<?= site_url('professor/materiais') ?>"
               class="btn btn-success w-100">

                Materiais

            </a>

        </div>

        <div class="col-md-3">

            <a href="<?= site_url('professor/atividades') ?>"
               class="btn btn-warning w-100">

                Atividades

            </a>

        </div>

        <div class="col-md-3">

            <a href="<?= site_url('professor/notas') ?>"
               class="btn btn-info w-100">

                Notas

            </a>

        </div>

    </div>

</div>

</body>
</html>