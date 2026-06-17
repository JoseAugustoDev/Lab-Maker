<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            Editar Curso
        </div>

        <div class="card-body">

            <form action="<?= site_url('admin/cursos/update/'.$curso['id']) ?>"
                  method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">Título</label>

                    <input type="text"
                           name="titulo"
                           class="form-control"
                           value="<?= esc($curso['titulo']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Área</label>

                    <select name="area"
                            class="form-control">

                        <option value="Impressão 3D"
                            <?= $curso['area'] == 'Impressão 3D' ? 'selected' : '' ?>>
                            Impressão 3D
                        </option>

                        <option value="Arduino"
                            <?= $curso['area'] == 'Arduino' ? 'selected' : '' ?>>
                            Arduino
                        </option>

                        <option value="Robótica"
                            <?= $curso['area'] == 'Robótica' ? 'selected' : '' ?>>
                            Robótica
                        </option>

                        <option value="CNC"
                            <?= $curso['area'] == 'CNC' ? 'selected' : '' ?>>
                            CNC
                        </option>

                        <option value="Programação"
                            <?= $curso['area'] == 'Programação' ? 'selected' : '' ?>>
                            Programação
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nível</label>

                    <select name="nivel"
                            class="form-control">

                        <option value="Básico"
                            <?= $curso['nivel'] == 'Básico' ? 'selected' : '' ?>>
                            Básico
                        </option>

                        <option value="Intermediário"
                            <?= $curso['nivel'] == 'Intermediário' ? 'selected' : '' ?>>
                            Intermediário
                        </option>

                        <option value="Avançado"
                            <?= $curso['nivel'] == 'Avançado' ? 'selected' : '' ?>>
                            Avançado
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Carga Horária</label>

                    <input type="number"
                           name="carga_horaria"
                           class="form-control"
                           value="<?= esc($curso['carga_horaria']) ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>

                    <textarea name="descricao"
                              rows="5"
                              class="form-control"><?= esc($curso['descricao']) ?></textarea>
                </div>

                <button type="submit"
                        class="btn btn-success">

                    Salvar Alterações
                </button>

                <a href="<?= site_url('admin/cursos') ?>"
                   class="btn btn-secondary">

                    Cancelar
                </a>

            </form>

        </div>

    </div>

</div>