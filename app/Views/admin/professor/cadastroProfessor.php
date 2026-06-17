<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            Cadastro de Professor
        </div>

        <div class="card-body">

            <form
                action="<?= site_url('admin/professores/store') ?>"
                method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label>Nome</label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Telefone</label>

                    <input
                        type="text"
                        name="telefone"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label>Senha Inicial</label>

                    <input
                        type="password"
                        name="senha"
                        class="form-control"
                        required>
                </div>

                <button
                    type="submit"
                    class="btn btn-primary">

                    Cadastrar Professor
                </button>

            </form>

        </div>

    </div>

</div>