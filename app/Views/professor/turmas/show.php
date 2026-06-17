<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>
        Turma
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-4">

    <h2>

        <?= esc($turma['curso']) ?>

    </h2>

    <hr>

    <p>

        <strong>Código:</strong>

        <?= esc($turma['codigo']) ?>

    </p>

    <p>

        <strong>Semestre:</strong>

        <?= esc($turma['semestre']) ?>

    </p>

    <p>

        <strong>Horário:</strong>

        <?= esc($turma['horario']) ?>

    </p>

    <p>

        <strong>Status:</strong>

        <?= esc($turma['status']) ?>

    </p>

    <hr>

    <div class="row">

        <div class="col-md-3">

            <a href="<?= site_url(
                'professor/materiais'
            ) ?>"
               class="btn btn-success w-100">

                Materiais

            </a>

        </div>

        <div class="col-md-3">

            <a href="<?= site_url(
                'professor/atividades'
            ) ?>"
               class="btn btn-warning w-100">

                Atividades

            </a>

        </div>

        <div class="col-md-3">

            <a href="<?= site_url(
                'professor/notas'
            ) ?>"
               class="btn btn-info w-100">

                Notas

            </a>

        </div>

        <div class="col-md-3">

            <a href="<?= site_url(
                'professor/turmas'
            ) ?>"
               class="btn btn-secondary w-100">

                Voltar

            </a>

        </div>

    </div>

</div>

</body>

</html>