<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            Cadastro de Turma
        </div>

        <div class="card-body">

            <form action="<?= site_url('admin/turmas/store') ?>" method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">Curso</label>

                    <select name="curso_id"
                            class="form-control"
                            required>

                        <option value="">
                            Selecione um curso
                        </option>

                        <?php foreach ($cursos as $curso): ?>

                            <option value="<?= $curso['id'] ?>">
                                <?= esc($curso['titulo']) ?>
                            </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Código da Turma
                    </label>

                    <input type="text"
                           name="codigo"
                           class="form-control"
                           placeholder="ARD-2026-01"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Semestre
                    </label>

                    <input type="text"
                           name="semestre"
                           class="form-control"
                           placeholder="2026/1"
                           required>
                </div>

                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">
                                Data de Início
                            </label>

                            <input type="date"
                                   name="data_inicio"
                                   class="form-control"
                                   required>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label">
                                Data de Término
                            </label>

                            <input type="date"
                                   name="data_fim"
                                   class="form-control"
                                   required>
                        </div>

                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Horário
                    </label>

                    <input type="text"
                           name="horario"
                           class="form-control"
                           placeholder="Segunda e Quarta 19:00 às 21:00"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                            class="form-control">

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
                    <label class="form-label">
                        Professores Responsáveis
                    </label>

                    <select name="professores[]"
                            class="form-control"
                            multiple
                            size="6">

                        <?php foreach ($professores as $professor): ?>

                            <option value="<?= $professor['id'] ?>">
                                <?= esc($professor['nome']) ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                    <small class="text-muted">
                        Segure CTRL para selecionar mais de um professor.
                    </small>
                </div>

                <div class="mt-4">

                    <button type="submit"
                            class="btn btn-success">

                        Salvar Turma
                    </button>

                    <a href="<?= site_url('admin/turmas') ?>"
                       class="btn btn-secondary">

                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>