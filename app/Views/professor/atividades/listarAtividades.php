<div class="container mt-4">

    <div class="d-flex justify-content-between">

        <h2>Atividades</h2>

        <a href="<?= site_url('professor/atividades/create') ?>"
           class="btn btn-primary">

            Nova Atividade

        </a>

    </div>

    <hr>

    <table class="table table-striped">

        <thead>

        <tr>

            <th>Título</th>
            <th>Turma</th>
            <th>Entrega</th>
            <th>Pontuação</th>
            <th>Ações</th>

        </tr>

        </thead>

        <tbody>

        <?php foreach($atividades as $atividade): ?>

            <tr>

                <td>
                    <?= esc($atividade['titulo']) ?>
                </td>

                <td>
                    <?= esc($atividade['codigo']) ?>
                </td>

                <td>
                    <?= date(
                        'd/m/Y',
                        strtotime(
                            $atividade['data_entrega']
                        )
                    ) ?>
                </td>

                <td>
                    <?= $atividade['pontuacao_maxima'] ?>
                </td>

                <td>

                    <a
                        href="<?= site_url(
                            'professor/atividades/edit/'.$atividade['id']
                        ) ?>"
                        class="btn btn-warning btn-sm">

                        Editar

                    </a>

                    <a
                        href="<?= site_url(
                            'professor/atividades/delete/'.$atividade['id']
                        ) ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Excluir atividade?')">

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