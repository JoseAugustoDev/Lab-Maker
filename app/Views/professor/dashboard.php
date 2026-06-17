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
      <div class="row">

        <div class="col-md-4 col-sm-4">
          <div class="card-resumo">
            <div class="card-numero"><?= $quantidadeTurmas ?></div>
            <div class="card-label">Turmas</div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4">
          <div class="card-resumo">
            <div class="card-numero"><?= $quantidadeAtividades ?></div>
            <div class="card-label">Atividades</div>
          </div>
        </div>

        <div class="col-md-4 col-sm-4">
          <div class="card-resumo">
            <div class="card-numero"><?= $quantidadeMateriais ?></div>
            <div class="card-label">Materiais</div>
          </div>
        </div>

      </div>

      <!-- MENU DE NAVEGAÇÃO -->
      <div class="row menu-dashboard">

        <div class="col-md-3 col-sm-6">
          <a href="<?= site_url('professor/turmas') ?>" class="btn-menu">Minhas Turmas</a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?= site_url('professor/materiais') ?>" class="btn-menu">Materiais</a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?= site_url('professor/atividades') ?>" class="btn-menu">Atividades</a>
        </div>

        <div class="col-md-3 col-sm-6">
          <a href="<?= site_url('professor/notas') ?>" class="btn-menu">Notas</a>
        </div>

      </div>

      <div class="text-center" style="margin-top: 30px;">
        <a href="<?= site_url('logout') ?>" class="link-voltar">Sair</a>
      </div>

    </div>
  </div>

</body>
</html>