<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Listar Professores</title>
</head>

<body class="background-lab">

    <div class="container mt-4">

        <div class="card">

            <div class="card-header">
                Lista de professores
            </div>

            <div class="card-body">

                <?php if (!empty($mensagem)): ?>
                    <div class="alert alert-success" role="alert">
                        <?= htmlspecialchars($mensagem) ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($professores)): ?>
                    <p class="text-muted mb-0">Nenhum professor cadastrado ainda.</p>
                <?php else: ?>

                    <table class="table table-striped mt-3">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php foreach ($professores as $professor): ?>

                                <tr>

                                    <td><?= htmlspecialchars($professor['id']) ?></td>

                                    <td><?= htmlspecialchars($professor['nome']) ?></td>

                                    <td><?= htmlspecialchars($professor['email']) ?></td>

                                    <td><?= htmlspecialchars($professor['telefone'] ?? '-') ?></td>

                                    <td>

                                        <a href="<?= base_url('admin/professores/edit/' . $professor['id']) ?>"
                                            class="btn btn-warning btn-sm">

                                            Editar
                                        </a>

                                        <a href="<?= base_url('admin/professores/delete/' . $professor['id']) ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Deseja excluir este professor?')">

                                            Excluir
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                <?php endif; ?>

                <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary btn-sm mt-2">Voltar</a>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>