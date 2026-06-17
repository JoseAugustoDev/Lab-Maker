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
                Editar curso
            </div>

            <div class="card-body">

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($erro) ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/cursos/update/' . $curso['id']) ?>" method="post">

                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token ?? '') ?>">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>

                        <input type="text" id="titulo" name="titulo" class="form-control"
                            value="<?= htmlspecialchars($curso['titulo']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="area" class="form-label">Área</label>

                        <select id="area" name="area" class="form-select">

                            <?php
                            $areas = ['Impressão 3D', 'Arduino', 'Robótica', 'CNC', 'Programação'];
                            foreach ($areas as $area):
                                ?>
                                <option value="<?= htmlspecialchars($area) ?>" <?= $curso['area'] === $area ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($area) ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nivel" class="form-label">Nível</label>

                        <select id="nivel" name="nivel" class="form-select">

                            <?php
                            $niveis = ['Básico', 'Intermediário', 'Avançado'];
                            foreach ($niveis as $nivel):
                                ?>
                                <option value="<?= htmlspecialchars($nivel) ?>" <?= $curso['nivel'] === $nivel ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($nivel) ?>
                                </option>
                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="carga_horaria" class="form-label">Carga horária</label>

                        <input type="number" id="carga_horaria" name="carga_horaria" class="form-control" min="1"
                            value="<?= htmlspecialchars($curso['carga_horaria']) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>

                        <textarea id="descricao" name="descricao" rows="5"
                            class="form-control"><?= htmlspecialchars($curso['descricao']) ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">

                        Salvar alterações
                    </button>

                    <a href="<?= base_url('admin/cursos') ?>" class="btn btn-secondary">

                        Cancelar
                    </a>

                </form>

            </div>

        </div>

    </div>

</body>