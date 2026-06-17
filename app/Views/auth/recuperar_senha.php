<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>
        Recuperar Senha
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card">

                <div class="card-header">

                    Recuperação de Senha

                </div>

                <div class="card-body">

                    <?php if(session()->getFlashdata('erro')): ?>

                        <div class="alert alert-danger">

                            <?= session()->getFlashdata('erro') ?>

                        </div>

                    <?php endif; ?>

                    <form
                        method="post"
                        action="<?= site_url('/recuperar-senha') ?>">

                        <?= csrf_field() ?>

                        <div class="mb-3">

                            <label>
                                E-mail
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>
                                Nova Senha
                            </label>

                            <input
                                type="password"
                                name="senha"
                                class="form-control"
                                required>

                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary">

                            Alterar Senha

                        </button>

                        <a
                            href="<?= site_url('/login') ?>"
                            class="btn btn-secondary">

                            Voltar

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>