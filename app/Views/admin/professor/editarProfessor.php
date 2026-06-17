<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Editar Professor</title>
</head>

<body class="background-lab">

    <div class="container mt-4">

        <div class="card">

            <div class="card-header">
                Editar professor
            </div>

            <div class="card-body">

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($erro) ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/professores/update/' . $professor['id']) ?>" method="post">

                    <?= csrf_field() ?>

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>

                        <input type="text" id="nome" name="nome" class="form-control"
                            value="<?= htmlspecialchars($professor['nome']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>

                        <input type="email" id="email" name="email" class="form-control"
                            value="<?= htmlspecialchars($professor['email']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>

                        <input type="text" id="telefone" name="telefone" class="form-control"
                            value="<?= htmlspecialchars($professor['telefone'] ?? '') ?>">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">
                            Nova senha
                        </label>

                        <input type="password" id="senha" name="senha" class="form-control">

                        <small class="text-muted">
                            Deixe em branco para manter a senha atual.
                        </small>
                    </div>

                    <div class="mb-3">
                        <label for="ativo" class="form-label">
                            Status
                        </label>

                        <select id="ativo" name="ativo" class="form-select">

                            <option value="1" <?= $professor['ativo'] ? 'selected' : '' ?>>
                                Ativo
                            </option>

                            <option value="0" <?= !$professor['ativo'] ? 'selected' : '' ?>>
                                Inativo
                            </option>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">

                        Salvar alterações
                    </button>

                    <a href="<?= base_url('admin/professores') ?>" class="btn btn-secondary">

                        Cancelar
                    </a>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>