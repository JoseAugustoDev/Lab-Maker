<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>
        Minhas Turmas
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-4">

    <div class="d-flex justify-content-between">

        <h2>
            Minhas Turmas
        </h2>

        <a href="<?= site_url('professor/dashboard') ?>"
           class="btn btn-secondary">

            Voltar

        </a>

    </div>

    <hr>

    <?php if (empty($turmas)): ?>

        <div class="alert alert-info">

            Nenhuma turma vinculada.

        </div>

    <?php else: ?>

        <table class="table table-striped">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Código</th>

                    <th>Curso</th>

                    <th>Semestre</th>

                    <th>Status</th>

                    <th>Ações</th>

                </tr>

            </thead>

            <tbody>

            <?php foreach ($turmas as $turma): ?>

                <tr>

                    <td>
                        <?= $turma['id'] ?>
                    </td>

                    <td>
                        <?= esc($turma['codigo']) ?>
                    </td>

                    <td>
                        <?= esc($turma['curso']) ?>
                    </td>

                    <td>
                        <?= esc($turma['semestre']) ?>
                    </td>

                    <td>
                        <?= esc($turma['status']) ?>
                    </td>

                    <td>

                        <a href="<?= site_url(
                            'professor/turmas/'.$turma['id']
                        ) ?>"
                           class="btn btn-primary btn-sm">

                            Gerenciar

                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

</div>

</body>

</html>