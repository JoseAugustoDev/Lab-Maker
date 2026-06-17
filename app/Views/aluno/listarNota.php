<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Minhas Notas</title>
</head>

<body>

    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Minhas notas</h4>
        </div>

        <?php if (empty($notas)): ?>
            <div class="alert alert-light border" role="alert">
                Ainda não há notas lançadas para você.
            </div>
        <?php else: ?>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Atividade</th>
                                    <th>Tipo</th>
                                    <th>Data</th>
                                    <th>Nota</th>
                                    <th>Máx.</th>
                                    <th>Observação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($notas as $nota): ?>
                                    <tr>
                                        <td class="fw-semibold">
                                            <?= esc($nota['atividade_titulo']) ?>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <?= esc(ucfirst($nota['atividade_tipo'] ?? '')) ?>
                                            </span>
                                        </td>
                                        <td class="text-muted small">
                                            <?php if (!empty($nota['data_entrega'])): ?>
                                                <?= date('d/m/Y', strtotime($nota['data_entrega'])) ?>
                                            <?php else: ?>
                                                —
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">
                                                <?= esc($nota['valor']) ?>
                                            </span>
                                        </td>
                                        <td><?= esc($nota['pontuacao_max']) ?></td>
                                        <td class="text-muted small">
                                            <?= esc($nota['observacao'] ?? '—') ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <a href="<?= base_url('aluno/perfil') ?>" class="btn btn-secondary mt-3">Voltar</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>