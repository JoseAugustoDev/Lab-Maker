<div class="container mt-4">

    <h2>

        <?= esc($atividade['titulo']) ?>

    </h2>

    <p>

        Pontuação Máxima:
        <?= $atividade['pontuacao_maxima'] ?>

    </p>

    <hr>

    <form
        method="post"
        action="<?= site_url(
            'professor/notas/salvar/' .
            $atividade['id']
        ) ?>">

        <?= csrf_field() ?>

        <table class="table table-bordered">

            <thead>

            <tr>

                <th>Aluno</th>
                <th>Nota</th>

            </tr>

            </thead>

            <tbody>

            <?php foreach($alunos as $aluno): ?>

                <tr>

                    <td>

                        <?= esc($aluno['nome']) ?>

                    </td>

                    <td>

                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            max="<?= $atividade['pontuacao_maxima'] ?>"
                            name="notas[<?= $aluno['aluno_id'] ?>]"
                            value="<?= $aluno['nota'] ?>"
                            class="form-control">

                    </td>

                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

        <button
            class="btn btn-success">

            Salvar Notas

        </button>

        <a
            href="<?= site_url(
                'professor/notas'
            ) ?>"
            class="btn btn-secondary">

            Voltar

        </a>

    </form>

</div>