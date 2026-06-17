<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Cadastro de Curso</title>
</head>

<body class="background-lab">

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">

                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Cadastro de Curso</h5>
                        <span class="badge bg-primary">LabMaker</span>
                    </div>

                    <div class="card-body">
                        <form action="<?= site_url('admin/cursos/store') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título do curso</label>
                                <input type="text" id="titulo" name="titulo" class="form-control"
                                    placeholder="Ex.: Introdução à Impressão 3D" required>
                            </div>

                            <div class="mb-3">
                                <label for="area" class="form-label">Área</label>
                                <select id="area" name="area" class="form-select" required>
                                    <option value="" selected disabled>Selecione a área</option>
                                    <option value="Impressão 3D">Impressão 3D</option>
                                    <option value="Arduino">Arduino</option>
                                    <option value="Robótica">Robótica</option>
                                    <option value="CNC">CNC</option>
                                    <option value="Programação">Programação</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nivel" class="form-label">Nível</label>
                                <select id="nivel" name="nivel" class="form-select" required>
                                    <option value="" selected disabled>Selecione o nível</option>
                                    <option value="Basico">Básico</option>
                                    <option value="Intermediario">Intermediário</option>
                                    <option value="Avancado">Avançado</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="carga_horaria" class="form-label">Carga horária (em horas)</label>
                                <input type="number" id="carga_horaria" name="carga_horaria" class="form-control"
                                    min="1" step="1" placeholder="Ex.: 20">
                                <div class="form-text">Informe apenas números inteiros.</div>
                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea id="descricao" name="descricao" rows="4" class="form-control"
                                    placeholder="Descreva brevemente o conteúdo e os objetivos do curso..."></textarea>
                            </div>

                            <div class="d-flex justify-content-between gap-2 mt-4">
                                <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-outline-secondary">
                                    Voltar
                                </a>
                                <button type="submit" class="btn btn-success">
                                    Salvar Curso
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>