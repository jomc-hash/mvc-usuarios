<div class="panel panel-primary col-md-8 col-md-offset-2">
    <div class="panel-heading">
        Crear Usuarios
    </div>
    <?php
    while ($user = $resultUser->fetch_object()) :
    ?>

        <div class="panel-body">

            <form action="index.php?controller=UsuarioController&action=guardarModificaciones" method="POST" class="form-horizontal">

                <label for="txtNombre" class="control-label">Nombre</label>
                <input class="form-control" type="text" name="txtNombre" value="<?= $user->nombre ?>">


                <label for="txtApellido" class="control-label">Apellido</label>
                <input class="form-control" type="text" name="txtApellido" value="<?= $user->apellido ?>">

                <label for="email" class="control-label">Email</label>
                <input class="form-control" type="text" name="txtEmail" value="<?= $user->email ?>" readonly="readonly">
                <br>
                <button class=" btn btn-warning" type="submit">Guardar</button>
            </form>
        </div>
    <?php endwhile; ?>
</div>