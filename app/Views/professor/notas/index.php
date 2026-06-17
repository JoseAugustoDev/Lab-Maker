<div class="container mt-4">

    <h2>
        Lançamento de Notas
    </h2>

    <hr>

    <table class="table table-striped">

        <thead>

        <tr>

            <th>Atividade</th>
            <th>Turma</th>
            <th>Pontuação Máxima</th>
            <th></th>

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
                    <?= $atividade['pontuacao_maxima'] ?>
                </td>

                <td>

                    <a
                        href="<?= site_url(
                            'professor/notas/lancar/' .
                            $atividade['id']
                        ) ?>"
                        class="btn btn-primary">

                        Lançar Notas

                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>