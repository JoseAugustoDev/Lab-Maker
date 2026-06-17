<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Editar Turma</title>
</head>

<body class="background-lab">

    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h2>Turmas</h2>

            <a href="<?= base_url('admin/turmas/create') ?>" class="btn btn-primary">

                Nova turma
            </a>

        </div>

        <?php if (!empty($mensagem)): ?>
            <div class="alert alert-success" role="alert">
                <?= htmlspecialchars($mensagem) ?>
            </div>
        <?php endif; ?>

        <?php if (empty($turmas)): ?>

            <div class="alert alert-light border" role="alert">
                Nenhuma turma cadastrada ainda. Clique em "Nova turma" para começar.
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

                    <?php
                    $statusLabels = [
                        'ABERTA' => ['Aberta', 'bg-success'],
                        'EM_ANDAMENTO' => ['Em andamento', 'bg-warning text-dark'],
                        'FINALIZADA' => ['Finalizada', 'bg-secondary'],
                    ];
                    ?>

                    <?php foreach ($turmas as $turma): ?>

                        <?php
                        [$statusLabel, $statusClasse] = $statusLabels[$turma['status']]
                            ?? [$turma['status'], 'bg-secondary'];
                        ?>

                        <tr>

                            <td><?= htmlspecialchars($turma['id']) ?></td>

                            <td><?= htmlspecialchars($turma['codigo']) ?></td>

                            <td><?= htmlspecialchars($turma['curso']) ?></td>

                            <td><?= htmlspecialchars($turma['semestre']) ?></td>

                            <td>
                                <span class="badge <?= $statusClasse ?>">
                                    <?= htmlspecialchars($statusLabel) ?>
                                </span>
                            </td>

                            <td>

                                <a href="<?= base_url('admin/turmas/edit/' . $turma['id']) ?>" class="btn btn-warning btn-sm">

                                    Editar
                                </a>

                                <a href="<?= base_url('admin/turmas/delete/' . $turma['id']) ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Deseja excluir esta turma?')">

                                    Excluir
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        <?php endif; ?>

        <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary">Voltar</a>

    </div>

</body>