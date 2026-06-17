<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">

        <h2>Turmas</h2>

        <a href="<?= site_url('admin/turmas/create') ?>"
           class="btn btn-primary">

            Nova Turma
        </a>

    </div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Curso</th>
                <th>Semestre</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($turmas as $turma): ?>

            <tr>

                <td><?= $turma['id'] ?></td>

                <td><?= esc($turma['codigo']) ?></td>

                <td><?= esc($turma['curso']) ?></td>

                <td><?= esc($turma['semestre']) ?></td>

                <td><?= esc($turma['status']) ?></td>

                <td>

                    <a href="<?= site_url('admin/turmas/edit/'.$turma['id']) ?>"
                       class="btn btn-warning btn-sm">

                        Editar
                    </a>

                    <a href="<?= site_url('admin/turmas/delete/'.$turma['id']) ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Deseja excluir esta turma?')">

                        Excluir
                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

        <a href="<?= site_url('admin/dashboard') ?>">Voltar</a>

</div>