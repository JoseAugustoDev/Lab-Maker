<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lançar Notas - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1><?= esc($atividade['titulo']) ?></h1>
      <p>Pontuação máxima: <?= $atividade['pontuacao_maxima'] ?> pontos</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">

      <div class="tabela-box">
        <form method="post" action="<?= site_url('professor/notas/salvar/'.$atividade['id']) ?>">

          <?= csrf_field() ?>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Aluno</th>
                <th>Nota</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($alunos as $aluno): ?>
                <tr>
                  <td><?= esc($aluno['nome']) ?></td>
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

          <button type="submit" class="btn-salvar">Salvar Notas</button>

        </form>
      </div>

      <a href="<?= site_url('professor/notas') ?>" class="link-voltar">Voltar para Notas</a>

    </div>
  </div>

</body>
</html>