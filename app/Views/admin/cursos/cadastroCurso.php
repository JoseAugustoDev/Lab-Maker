<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            Cadastro de Curso
        </div>

        <div class="card-body">

            <form action="<?= site_url('admin/cursos/store') ?>" method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label>Título</label>
                    <input type="text"
                           name="titulo"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label>Área</label>
                    <select name="area"
                            class="form-control">

                        <option>Impressão 3D</option>
                        <option>Arduino</option>
                        <option>Robótica</option>
                        <option>CNC</option>
                        <option>Programação</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label>Nível</label>
                    <select name="nivel"
                            class="form-control">

                        <option>Básico</option>
                        <option>Intermediário</option>
                        <option>Avançado</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label>Carga Horária</label>

                    <input type="number"
                           name="carga_horaria"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Descrição</label>

                    <textarea name="descricao"
                              rows="4"
                              class="form-control"></textarea>
                </div>

                <button type="submit"
                        class="btn btn-success">

                    Salvar Curso
                </button>

            </form>

        </div>

    </div>

    <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-secondary">
        Voltar
    </a>

</div>