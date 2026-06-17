<div class="container mt-4">

    <h2>Novo Material</h2>

    <form
        action="<?= site_url(
            'professor/materiais/store'
        ) ?>"
        method="post">

        <?= csrf_field() ?>

        <div class="mb-3">

            <label>Turma</label>

            <select
                name="turma_id"
                class="form-control">

                <?php foreach($turmas as $turma): ?>

                    <option
                        value="<?= $turma['id'] ?>">

                        <?= esc(
                            $turma['codigo']
                        ) ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>

        <div class="mb-3">

            <label>Título</label>

            <input
                type="text"
                name="titulo"
                class="form-control"
                required>

        </div>

        <div class="mb-3">

            <label>Descrição</label>

            <textarea
                name="descricao"
                class="form-control"></textarea>

        </div>

        <div class="mb-3">

            <label>Tipo</label>

            <select
                name="tipo"
                class="form-control">

                <option value="PDF">
                    PDF
                </option>

                <option value="VIDEO">
                    Vídeo
                </option>

                <option value="LINK">
                    Link
                </option>

            </select>

        </div>

        <div class="mb-3">

            <label>Arquivo ou URL</label>

            <input
                type="text"
                name="arquivo_url"
                class="form-control">

        </div>

        <button
            class="btn btn-success">

            Salvar

        </button>

    </form>

</div>