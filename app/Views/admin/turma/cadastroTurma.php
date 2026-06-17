<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Cadastro de Turma</title>
</head>

<body class="background-lab">

    <div class="container mt-4">

        <div class="card">

            <div class="card-header">
                Cadastro de turma
            </div>

            <div class="card-body">

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($erro) ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/turmas/store') ?>" method="post">

                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="curso_id" class="form-label">Curso</label>

                        <select id="curso_id" name="curso_id" class="form-select" required>

                            <option value="">
                                Selecione um curso
                            </option>

                            <?php foreach ($cursos as $curso): ?>

                                <option value="<?= htmlspecialchars($curso['id']) ?>">
                                    <?= htmlspecialchars($curso['titulo']) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="codigo" class="form-label">
                            Código da turma
                        </label>

                        <input type="text" id="codigo" name="codigo" class="form-control"
                               placeholder="ARD-2026-01" required>
                    </div>

                    <div class="mb-3">
                        <label for="semestre" class="form-label">
                            Semestre
                        </label>

                        <input type="text" id="semestre" name="semestre" class="form-control"
                               placeholder="2026/1" required>
                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="data_inicio" class="form-label">
                                    Data de início
                                </label>

                                <input type="date" id="data_inicio" name="data_inicio" class="form-control" required>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="data_fim" class="form-label">
                                    Data de término
                                </label>

                                <input type="date" id="data_fim" name="data_fim" class="form-control" required>
                            </div>

                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="horario" class="form-label">
                            Horário
                        </label>

                        <input type="text" id="horario" name="horario" class="form-control"
                            placeholder="Segunda e Quarta 19:00 às 21:00" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">
                            Status
                        </label>

                        <select id="status" name="status" class="form-select">

                            <option value="ABERTA">
                                Aberta
                            </option>

                            <option value="EM_ANDAMENTO">
                                Em andamento
                            </option>

                            <option value="FINALIZADA">
                                Finalizada
                            </option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="professores" class="form-label">
                            Professores responsáveis
                        </label>

                        <select id="professores" name="professores[]" class="form-select" multiple size="6" required>

                            <?php foreach ($professores as $professor): ?>

                                <option value="<?= htmlspecialchars($professor['id']) ?>">
                                    <?= htmlspecialchars($professor['nome']) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>

                        <small class="text-muted">
                            Segure CTRL para selecionar mais de um professor.
                        </small>
                    </div>

                    <div class="mt-4">

                        <button type="submit" class="btn btn-success">

                            Salvar turma
                        </button>

                        <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary">

                            Cancelar
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>