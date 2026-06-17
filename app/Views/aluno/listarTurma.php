<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Minhas Turmas</title>
</head>

<body>

    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h2>Minhas turmas</h2>

        </div>

        <?php if (!empty($mensagem)): ?>
            <div class="alert alert-success" role="alert">
                <?= htmlspecialchars($mensagem) ?>
            </div>
        <?php endif; ?>

        <?php if (empty($turmas)): ?>

            <div class="alert alert-light border" role="alert">
                Você ainda não está matriculado em nenhuma turma.
            </div>

        <?php else: ?>

            <?php
            $statusTurmaLabels = [
                'ABERTA' => ['Aberta', 'bg-success'],
                'EM_ANDAMENTO' => ['Em andamento', 'bg-warning text-dark'],
                'FINALIZADA' => ['Finalizada', 'bg-secondary'],
            ];

            $statusMatriculaLabels = [
                'ativa' => ['Ativa', 'bg-success'],
                'trancada' => ['Trancada', 'bg-warning text-dark'],
                'concluida' => ['Concluída', 'bg-secondary'],
                'cancelada' => ['Cancelada', 'bg-danger'],
            ];
            ?>

            <div class="row">

                <?php foreach ($turmas as $turma): ?>

                    <?php
                    [$statusTurmaLabel, $statusTurmaClasse] = $statusTurmaLabels[$turma['status']]
                        ?? [$turma['status'], 'bg-secondary'];

                    [$statusMatriculaLabel, $statusMatriculaClasse] = $statusMatriculaLabels[$turma['status_matricula']]
                        ?? [$turma['status_matricula'], 'bg-secondary'];

                    $progresso = (float) $turma['progresso'];
                    ?>

                    <div class="col-md-6 mb-3">

                        <div class="card h-100">

                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-0"><?= htmlspecialchars($turma['curso']) ?></h5>
                                    <span class="badge <?= $statusTurmaClasse ?>">
                                        <?= htmlspecialchars($statusTurmaLabel) ?>
                                    </span>
                                </div>

                                <p class="card-text text-muted mb-1">
                                    Turma <?= htmlspecialchars($turma['codigo']) ?>
                                    &middot; <?= htmlspecialchars($turma['semestre']) ?>
                                </p>

                                <p class="card-text text-muted mb-3">
                                    <?= htmlspecialchars($turma['horario']) ?>
                                </p>

                                <div class="mb-2">
                                    <small class="text-muted">Progresso</small>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar" role="progressbar"
                                             style="width: <?= $progresso ?>%"
                                             aria-valuenow="<?= $progresso ?>"
                                             aria-valuemin="0"
                                             aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small class="text-muted"><?= number_format($progresso, 1) ?>%</small>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-3">

                                    <span class="badge <?= $statusMatriculaClasse ?>">
                                        Matrícula: <?= htmlspecialchars($statusMatriculaLabel) ?>
                                    </span>

                                    <a href="<?= base_url('aluno/turmas/show/' . $turma['id']) ?>"
                                       class="btn btn-primary btn-sm">

                                        Ver turma
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <a href="<?= base_url('aluno/perfil') ?>" class="btn btn-secondary mt-2">Voltar</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>