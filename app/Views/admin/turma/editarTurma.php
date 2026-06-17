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

    <div class="card">

        <div class="card-header">
            Editar turma
        </div>

        <div class="card-body">

            <?php if (!empty($erro)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars($erro) ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/turmas/update/' . $turma['id']) ?>"
                  method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="curso_id" class="form-label">Curso</label>

                    <select id="curso_id" name="curso_id" class="form-select" required>

                        <?php foreach ($cursos as $curso): ?>

                            <option
                                value="<?= htmlspecialchars($curso['id']) ?>"
                                <?= (int) $curso['id'] === (int) $turma['curso_id']
                                    ? 'selected'
                                    : '' ?>>

                                <?= htmlspecialchars($curso['titulo']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>

                    <input type="text"
                           id="codigo"
                           name="codigo"
                           class="form-control"
                           value="<?= htmlspecialchars($turma['codigo']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label for="semestre" class="form-label">Semestre</label>

                    <input type="text"
                           id="semestre"
                           name="semestre"
                           class="form-control"
                           value="<?= htmlspecialchars($turma['semestre']) ?>"
                           required>
                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="data_inicio" class="form-label">Data de início</label>

                            <input type="date"
                                   id="data_inicio"
                                   name="data_inicio"
                                   class="form-control"
                                   value="<?= htmlspecialchars($turma['data_inicio']) ?>"
                                   required>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="data_fim" class="form-label">Data de término</label>

                            <input type="date"
                                   id="data_fim"
                                   name="data_fim"
                                   class="form-control"
                                   value="<?= htmlspecialchars($turma['data_fim']) ?>"
                                   required>
                        </div>

                    </div>

                </div>

                <div class="mb-3">

                    <label for="horario" class="form-label">Horário</label>

                    <input type="text"
                           id="horario"
                           name="horario"
                           class="form-control"
                           value="<?= htmlspecialchars($turma['horario']) ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label for="status" class="form-label">Status</label>

                    <select id="status" name="status" class="form-select">

                        <?php
                        $statusOpcoes = [
                            'ABERTA' => 'Aberta',
                            'EM_ANDAMENTO' => 'Em andamento',
                            'FINALIZADA' => 'Finalizada',
                        ];
                        foreach ($statusOpcoes as $valor => $label):
                        ?>
                            <option value="<?= htmlspecialchars($valor) ?>"
                                <?= $turma['status'] === $valor ? 'selected' : '' ?>>

                                <?= htmlspecialchars($label) ?>

                            </option>
                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label for="professores" class="form-label">Professores responsáveis</label>

                    <select id="professores"
                            name="professores[]"
                            class="form-select"
                            multiple
                            size="6"
                            required>

                        <?php foreach ($professores as $professor): ?>

                            <option
                                value="<?= htmlspecialchars($professor['id']) ?>"
                                <?= in_array((int) $professor['id'], $professoresSelecionados, true)
                                    ? 'selected'
                                    : '' ?>>

                                <?= htmlspecialchars($professor['nome']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                    <small class="text-muted">
                        Segure CTRL para selecionar mais de um professor.
                    </small>

                </div>

                <button type="submit"
                        class="btn btn-success">

                    Salvar alterações
                </button>

                <a href="<?= base_url('admin/turmas') ?>"
                   class="btn btn-secondary">

                    Cancelar
                </a>

            </form>

        </div>

    </div>

</div>

</body>