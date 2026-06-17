<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            Editar Turma
        </div>

        <div class="card-body">

            <form action="<?= site_url('admin/turmas/update/'.$turma['id']) ?>"
                  method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label>Curso</label>

                    <select name="curso_id"
                            class="form-control">

                        <?php foreach($cursos as $curso): ?>

                            <option
                                value="<?= $curso['id'] ?>"
                                <?= $curso['id'] == $turma['curso_id']
                                    ? 'selected'
                                    : '' ?>>

                                <?= esc($curso['titulo']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label>Código</label>

                    <input type="text"
                           name="codigo"
                           class="form-control"
                           value="<?= esc($turma['codigo']) ?>">
                </div>

                <div class="mb-3">
                    <label>Semestre</label>

                    <input type="text"
                           name="semestre"
                           class="form-control"
                           value="<?= esc($turma['semestre']) ?>">
                </div>

                <div class="row">

                    <div class="col-md-6">

                        <label>Data Início</label>

                        <input type="date"
                               name="data_inicio"
                               class="form-control"
                               value="<?= $turma['data_inicio'] ?>">
                    </div>

                    <div class="col-md-6">

                        <label>Data Fim</label>

                        <input type="date"
                               name="data_fim"
                               class="form-control"
                               value="<?= $turma['data_fim'] ?>">
                    </div>

                </div>

                <br>

                <div class="mb-3">

                    <label>Horário</label>

                    <input type="text"
                           name="horario"
                           class="form-control"
                           value="<?= esc($turma['horario']) ?>">

                </div>

                <div class="mb-3">

                    <label>Status</label>

                    <select name="status"
                            class="form-control">

                        <option value="ABERTA"
                            <?= $turma['status'] == 'ABERTA'
                                ? 'selected'
                                : '' ?>>

                            Aberta

                        </option>

                        <option value="EM_ANDAMENTO"
                            <?= $turma['status'] == 'EM_ANDAMENTO'
                                ? 'selected'
                                : '' ?>>

                            Em andamento

                        </option>

                        <option value="FINALIZADA"
                            <?= $turma['status'] == 'FINALIZADA'
                                ? 'selected'
                                : '' ?>>

                            Finalizada

                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label>Professores Responsáveis</label>

                    <select name="professores[]"
                            class="form-control"
                            multiple
                            size="6">

                        <?php foreach($professores as $professor): ?>

                            <option
                                value="<?= $professor['id'] ?>"
                                <?= in_array(
                                    $professor['id'],
                                    $professoresSelecionados
                                )
                                ? 'selected'
                                : '' ?>>

                                <?= esc($professor['nome']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <button type="submit"
                        class="btn btn-success">

                    Salvar Alterações
                </button>

                <a href="<?= site_url('admin/turmas') ?>"
                   class="btn btn-secondary">

                    Cancelar
                </a>

            </form>

        </div>

    </div>

</div>