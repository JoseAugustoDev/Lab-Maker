<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minhas Turmas - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1>Minhas Turmas</h1>
      <p>Veja e gerencie as turmas vinculadas a você.</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">

      <div class="topo-lista">
        <h3 class="topo-titulo">Lista de Turmas</h3>
      </div>

      <?php if (empty($turmas)): ?>

        <div class="alert alert-info">Nenhuma turma vinculada.</div>

      <?php else: ?>

        <div class="tabela-box">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Código</th>
                <th>Curso</th>
                <th>Semestre</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($turmas as $turma): ?>
                <tr>
                  <td><?= esc($turma['codigo']) ?></td>
                  <td><?= esc($turma['curso']) ?></td>
                  <td><?= esc($turma['semestre']) ?></td>
                  <td><?= esc($turma['status']) ?></td>
                  <td>
                    <a href="<?= site_url('professor/turmas/'.$turma['id']) ?>" class="btn-nova">Gerenciar</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      <?php endif; ?>

      <a href="<?= site_url('professor/dashboard') ?>" class="link-voltar">Voltar para o Dashboard</a>

    </div>
  </div>

</body>
</html>