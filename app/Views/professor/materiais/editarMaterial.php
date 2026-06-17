<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Material - LabMaker</title>
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="hero">
    <div class="container">
      <h1>Editar Material</h1>
      <p>Atualize as informações do material.</p>
    </div>
  </div>

  <div class="pagina">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="form-box">
            <form action="<?= site_url('professor/materiais/store') ?>" method="post">

              <?= csrf_field() ?>

              <div class="form-group">
                <label for="turma_id">Turma</label>
                <select id="turma_id" name="turma_id" class="form-control" required>
                  <?php foreach ($turmas as $turma): ?>
                    <option value="<?= $turma['id'] ?>"><?= esc($turma['codigo']) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="<?= esc($material['titulo']) ?>" required>
              </div>

              <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" rows="4" class="form-control"><?= esc($material['descricao']) ?></textarea>
              </div>

              <div class="form-group">
                <label for="arquivo_url">Arquivo ou URL</label>
                <input type="text" id="arquivo_url" name="arquivo_url" class="form-control" value="<?= esc($material['arquivo_url']) ?>">
              </div>

              <button type="submit" class="btn-salvar">Salvar Alterações</button>

              <a href="<?= site_url('professor/materiais') ?>" class="link-voltar">Cancelar</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>