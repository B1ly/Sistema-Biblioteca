<div class="container p-2">

    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Informacion de autores</h3>
        </div>

        <?php if (session('mensaje')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Agregado</strong> <?= session('mensaje'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Fecha de registro</th>
                        <th scope="col">Cantidad de libros en el sistema</th>
                        <th scope="col"></th>
    
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) : ?>
                        <tr>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['apellido']; ?></td>
                            <td><?php echo $dato['pais']; ?></td>
                            <td><?php echo $dato['fechaR']; ?></td>
                            <td><?php echo $dato['cantidadL']; ?></td>
                            <td><a href="<?= base_url('edit/' . $dato['id']) ?>">Editar</a></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= base_url('/add'); ?>" class="btn btn-success">Nuevo</a>

        </div>
    </div>

</div>