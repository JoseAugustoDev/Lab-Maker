<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Listar Cursos</title>
</head>

<body class="background-lab">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Cursos</h2>

        <a href="<?= base_url('admin/cursos/create') ?>"
           class="btn btn-primary">

            Novo curso
        </a>

    </div>

    <?php if (!empty($mensagem)): ?>
        <div class="alert alert-success" role="alert">
            <?= htmlspecialchars($mensagem) ?>
        </div>
    <?php endif; ?>

    <?php if (empty($cursos)): ?>

        <div class="alert alert-light border" role="alert">
            Nenhum curso cadastrado ainda. Clique em "Novo curso" para começar.
        </div>

    <?php else: ?>

        <table class="table table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Área</th>
                    <th>Nível</th>
                    <th>Carga horária</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($cursos as $curso): ?>

                <tr>

                    <td><?= htmlspecialchars($curso['id']) ?></td>

                    <td><?= htmlspecialchars($curso['titulo']) ?></td>

                    <td><?= htmlspecialchars($curso['area']) ?></td>

                    <td><?= htmlspecialchars($curso['nivel']) ?></td>

                    <td><?= htmlspecialchars($curso['carga_horaria']) ?>h</td>

                    <td>

                        <a href="<?= base_url('admin/cursos/edit/' . $curso['id']) ?>"
                           class="btn btn-warning btn-sm">

                            Editar
                        </a>

                        <a href="<?= base_url('admin/cursos/delete/' . $curso['id']) ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Deseja excluir este curso?')">

                            Excluir
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

    <?php endif; ?>

    <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary">
        Voltar
    </a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>