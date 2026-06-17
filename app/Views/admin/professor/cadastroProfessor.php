<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Cadastrar Professor</title>
</head>

<body class="background-lab">
    <div class="container mt-4">

        <div class="card">

            <div class="card-header">
                Cadastro de Professor
            </div>

            <div class="card-body">

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($erro) ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('admin/professores/store') ?>" method="post">

                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token ?? '') ?>">

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" id="telefone" name="telefone" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha inicial</label>
                        <input type="password" id="senha" name="senha" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Cadastrar professor
                    </button>

                </form>

            </div>

        </div>

        <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary mt-3">
            Voltar
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>