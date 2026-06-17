<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lançamento de Notas - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1>Lançamento de Notas</h1>
      <p>Selecione uma atividade para lançar as notas.</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">

      <div class="topo-lista">
        <h3 class="topo-titulo">Atividades</h3>
      </div>

      <div class="tabela-box">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Atividade</th>
              <th>Turma</th>
              <th>Pontuação Máxima</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($atividades as $atividade): ?>
              <tr>
                <td><?= esc($atividade['titulo']) ?></td>
                <td><?= esc($atividade['codigo']) ?></td>
                <td><?= $atividade['pontuacao_maxima'] ?></td>
                <td>
                  <a href="<?= site_url('professor/notas/lancar/'.$atividade['id']) ?>" class="btn-nova">Lançar Notas</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <a href="<?= site_url('professor/dashboard') ?>" class="link-voltar">Voltar para o Dashboard</a>

    </div>
  </div>

</body>
</html>