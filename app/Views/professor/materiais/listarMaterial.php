<div class="container mt-4">

    <div class="d-flex justify-content-between">

        <h2>Materiais</h2>

        <a
            href="<?= site_url('professor/materiais/create') ?>"
            class="btn btn-primary">

            Novo Material

        </a>

    </div>

    <hr>

    <table class="table table-striped">

        <thead>

            <tr>

                <th>Título</th>
                <th>Turma</th>
                <th>Tipo</th>
                <th>Ações</th>

            </tr>

        </thead>

        <tbody>

        <?php foreach($materiais as $material): ?>

            <tr>

                <td>
                    <?= esc($material['titulo']) ?>
                </td>

                <td>
                    <?= esc($material['codigo']) ?>
                </td>

                <td>
                    <?= esc($material['tipo']) ?>
                </td>

                <td>

                    <a
                        href="<?= site_url(
                            'professor/materiais/edit/'.$material['id']
                        ) ?>"
                        class="btn btn-warning btn-sm">

                        Editar

                    </a>

                    <a
                        href="<?= site_url(
                            'professor/materiais/delete/'.$material['id']
                        ) ?>"
                        class="btn btn-danger btn-sm">

                        Excluir

                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <a href="<?= site_url('professor/dashboard') ?>" class="btn btn-secondary">
        Voltar
    </a>

</div>