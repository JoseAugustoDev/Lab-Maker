<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materiais - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1>Materiais</h1>
      <p>Gerencie os materiais das suas turmas.</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">

      <div class="topo-lista">
        <h3 class="topo-titulo">Lista de Materiais</h3>
        <a href="<?= site_url('professor/materiais/create') ?>" class="btn-nova">+ Novo Material</a>
      </div>

      <div class="tabela-box">
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
            <?php foreach ($materiais as $material): ?>
              <tr>
                <td><?= esc($material['titulo']) ?></td>
                <td><?= esc($material['codigo']) ?></td>
                <td><?= esc($material['tipo']) ?></td>
                <td>
                  <a href="<?= site_url('professor/materiais/edit/'.$material['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                  <a href="<?= site_url('professor/materiais/delete/'.$material['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Excluir material?')">Excluir</a>
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