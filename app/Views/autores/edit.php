<div class="container p-2">

    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Editar autores</h3>
        </div>

        <?php if (session('mensaje')) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error</strong> <?= session('mensaje'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <form action="<?= base_url('/store') ?>" method="post">
            <div class="card-body">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" placeholder="" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">Pais</label>
                    <input type="text" class="form-control" placeholder="" name="pais">
                </div>
                <div class="mb-3">
                    <label for="fechaR" class="form-label">Fecha de registro</label>
                    <input type="date" class="form-control" placeholder="" name="fechaR">
                </div>

                <input type="submit" value="Guardar" class="btn btn-success">
                <a href="<?= base_url('/autores'); ?>" class="btn btn-danger">Cancelar</a>


        </form>



    </div>

</div>

</div>