<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividades - LabMaker</title>

  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- HERO -->
  <div class="hero">
    <div class="container">
      <h1>Atividades</h1>
      <p>Gerencie as atividades das suas turmas.</p>
    </div>
  </div>

  <!-- CONTEÚDO -->
  <div class="pagina">
    <div class="container">

      <!-- TOPO: título + botão nova atividade -->
      <div class="topo-lista">
        <h3 class="topo-titulo">Lista de Atividades</h3>
        <a href="<?= site_url('professor/atividades/create') ?>" class="btn-nova">+ Nova Atividade</a>
      </div>

      <!-- TABELA -->
      <div class="tabela-box">
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
            <?php foreach ($atividades as $atividade): ?>
              <tr>
                <td><?= esc($atividade['titulo']) ?></td>
                <td><?= esc($atividade['codigo']) ?></td>
                <td><?= date('d/m/Y', strtotime($atividade['data_entrega'])) ?></td>
                <td><?= $atividade['pontuacao_maxima'] ?></td>
                <td>
                  <a href="<?= site_url('professor/atividades/edit/'.$atividade['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                  <a href="<?= site_url('professor/atividades/delete/'.$atividade['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Excluir atividade?')">Excluir</a>
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