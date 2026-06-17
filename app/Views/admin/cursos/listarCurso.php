<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">

        <h2>Cursos</h2>

        <a href="<?= site_url('admin/cursos/create') ?>"
           class="btn btn-primary">

            Novo Curso
        </a>

    </div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Área</th>
                <th>Nível</th>
                <th>Carga Horária</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($cursos as $curso): ?>

            <tr>

                <td><?= $curso['id'] ?></td>

                <td><?= esc($curso['titulo']) ?></td>

                <td><?= esc($curso['area']) ?></td>

                <td><?= esc($curso['nivel']) ?></td>

                <td><?= esc($curso['carga_horaria']) ?>h</td>

                <td>

                    <a href="<?= site_url('admin/cursos/edit/'.$curso['id']) ?>"
                       class="btn btn-warning btn-sm">

                        Editar
                    </a>

                    <a href="<?= site_url('admin/cursos/delete/'.$curso['id']) ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Deseja excluir este curso?')">

                        Excluir
                    </a>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-secondary">
        Voltar
    </a>

</div>