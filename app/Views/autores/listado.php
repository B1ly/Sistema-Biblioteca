<div class="container p-2">

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Informacion de autores</h3>
            <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Pais</th>
                <th scope="col">Fecha de registro</th>
                <th scope="col">Cantidad de libros en el sistema</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $dato): ?>
            <tr>
                <th scope="row"><?php echo $dato['nombre']; ?></th>
                <td><?php echo $dato['apellido']; ?></td>
                <td><?php echo $dato['pais']; ?></td>
                <td><?php echo $dato['fechaR']; ?></td>
                <td><?php echo $dato['cantidadL']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

        </div>
    </div>
   
</div>