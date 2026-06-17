<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            Editar Professor
        </div>

        <div class="card-body">

            <form action="<?= site_url('admin/professores/update/'.$professor['id']) ?>"
                  method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label">Nome</label>

                    <input type="text"
                           name="nome"
                           class="form-control"
                           value="<?= esc($professor['nome']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           value="<?= esc($professor['email']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone</label>

                    <input type="text"
                           name="telefone"
                           class="form-control"
                           value="<?= esc($professor['telefone']) ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Nova Senha
                    </label>

                    <input type="password"
                           name="senha"
                           class="form-control">

                    <small class="text-muted">
                        Deixe em branco para manter a senha atual.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Status
                    </label>

                    <select name="ativo"
                            class="form-control">

                        <option value="1"
                            <?= $professor['ativo'] ? 'selected' : '' ?>>
                            Ativo
                        </option>

                        <option value="0"
                            <?= !$professor['ativo'] ? 'selected' : '' ?>>
                            Inativo
                        </option>

                    </select>
                </div>

                <button type="submit"
                        class="btn btn-success">

                    Salvar Alterações
                </button>

                <a href="<?= site_url('admin/professores') ?>"
                   class="btn btn-secondary">

                    Cancelar
                </a>

            </form>

        </div>

    </div>

</div>