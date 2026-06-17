<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario_nome'] ?? '') ?></h1>
      <p>Painel do professor</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">

      <div class="row mt-4">

        <div class="col-md-4 mb-3">
          <div class="card text-center h-100">
            <div class="card-body">
              <div class="card-numero"><?= (int) $quantidadeTurmas ?></div>
              <div class="text-muted">Turmas</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card text-center h-100">
            <div class="card-body">
              <div class="card-numero"><?= (int) $quantidadeAtividades ?></div>
              <div class="text-muted">Atividades</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card text-center h-100">
            <div class="card-body">
              <div class="card-numero"><?= (int) $quantidadeMateriais ?></div>
              <div class="text-muted">Materiais</div>
            </div>
          </div>
        </div>

      </div>

      <!-- MENU DE NAVEGAÇÃO -->
      <div class="row mt-3">

        <div class="col-md-3 mb-3">
          <a href="<?= base_url('professor/turmas') ?>" class="btn btn-outline-success w-100 py-3">
            Minhas turmas
          </a>
        </div>

        <div class="col-md-3 mb-3">
          <a href="<?= base_url('professor/materiais') ?>" class="btn btn-outline-success w-100 py-3">
            Materiais
          </a>
        </div>

        <div class="col-md-3 mb-3">
          <a href="<?= base_url('professor/atividades') ?>" class="btn btn-outline-success w-100 py-3">
            Atividades
          </a>
        </div>

        <div class="col-md-3 mb-3">
          <a href="<?= base_url('professor/notas') ?>" class="btn btn-outline-success w-100 py-3">
            Notas
          </a>
        </div>

      </div>

      <div class="text-center mt-4">
        <a href="<?= base_url('logout') ?>" class="link-voltar">Sair</a>
      </div>

    </div>
  </div>

</body>
</html>