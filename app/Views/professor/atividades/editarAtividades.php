<div class="container mt-4">

    <h2>Editar Atividade</h2>

    <form action="<?= site_url('professor/atividades/update/'.$atividade['id']) ?>" method="post">

        <?= csrf_field() ?>

        <div class="mb-3">

            <label>Turma</label>

            <select
                name="turma_id"
                class="form-control"
                required>

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
                value="<?= esc($atividade['titulo']) ?>"

        </div>

        <div class="mb-3">

            <label>Descrição</label>

            <textarea
                name="descricao"
                class="form-control"
                rows="5"><?= esc($atividade['descricao']) ?></textarea>

        </div>

        <div class="mb-3">

            <label>Data de Entrega</label>

            <input
                type="datetime-local"
                name="data_entrega"
                class="form-control"
                value="<?= esc($atividade['data_entrega']) ?>"

        </div>

        <div class="mb-3">

            <label>Pontuação Máxima</label>

            <input
                type="number"
                step="0.01"
                name="pontuacao_maxima"
                class="form-control"
                value="<?= esc($atividade['pontuacao_maxima']) ?>"

        </div>

        <button
            type="submit"
            class="btn btn-success">

            Salvar

        </button>

        <a
            href="<?= site_url(
                'professor/atividades'
            ) ?>"
            class="btn btn-secondary">

            Cancelar

        </a>

    </form>

</div>