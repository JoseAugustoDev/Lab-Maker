<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Turma - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1><?= esc($turma['curso']) ?></h1>
      <p>Código: <?= esc($turma['codigo']) ?> &bull; <?= esc($turma['semestre']) ?></p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <div class="form-box">

            <div class="info-turma">
              <div class="info-linha">
                <span class="info-chave">Horário</span>
                <span class="info-valor"><?= esc($turma['horario']) ?></span>
              </div>
              <div class="info-linha">
                <span class="info-chave">Status</span>
                <span class="info-valor"><?= esc($turma['status']) ?></span>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-4">
                <a href="<?= site_url('professor/materiais') ?>" class="btn-menu">Materiais</a>
              </div>
              <div class="col-sm-4">
                <a href="<?= site_url('professor/atividades') ?>" class="btn-menu">Atividades</a>
              </div>
              <div class="col-sm-4">
                <a href="<?= site_url('professor/notas') ?>" class="btn-menu">Notas</a>
              </div>
            </div>

          </div>

          <a href="<?= site_url('professor/turmas') ?>" class="link-voltar">Voltar para Turmas</a>

        </div>
      </div>
    </div>
  </div>

</body>
</html>