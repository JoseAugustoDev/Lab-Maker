<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1>Bem-vindo, <?= esc(session()->get('usuario_nome')) ?></h1>
      <p>Painel do Professor</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">

      <!-- CARDS DE RESUMO -->
      <div class="tabela-box">
        <table class="table text-center" style="margin: 0;">
          <thead>
            <tr>
              <th>Turmas</th>
              <th>Atividades</th>
              <th>Materiais</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="card-numero"><?= $quantidadeTurmas ?></td>
              <td class="card-numero"><?= $quantidadeAtividades ?></td>
              <td class="card-numero"><?= $quantidadeMateriais ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- MENU DE NAVEGAÇÃO -->
      <div class="tabela-box">
        <table class="table" style="margin: 0;">
          <tbody>
            <tr>
              <td><a href="<?= site_url('professor/turmas') ?>" class="btn-menu">Minhas Turmas</a></td>
              <td><a href="<?= site_url('professor/materiais') ?>" class="btn-menu">Materiais</a></td>
              <td><a href="<?= site_url('professor/atividades') ?>" class="btn-menu">Atividades</a></td>
              <td><a href="<?= site_url('professor/notas') ?>" class="btn-menu">Notas</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="text-center" style="margin-top: 30px;">
        <a href="<?= site_url('logout') ?>" class="link-voltar">Sair</a>
      </div>

    </div>
  </div>

</body>
</html>