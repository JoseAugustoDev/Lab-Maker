<table class="table table-striped">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($professores as $professor): ?>

        <tr>

            <td><?= $professor['id'] ?></td>

            <td><?= esc($professor['nome']) ?></td>

            <td><?= esc($professor['email']) ?></td>

            <td><?= esc($professor['telefone']) ?></td>

            <td>

                <a href="<?= site_url('admin/professores/edit/'.$professor['id']) ?>"
                class="btn btn-warning btn-sm">

                    Editar
                </a>

                <a href="<?= site_url('admin/professores/delete/'.$professor['id']) ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Deseja excluir este professor?')">

                    Excluir
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

<a href="<?= base_url('admin/dashboard') ?>">Voltar</a>