<div class="col-md-8 col-md-offset-1">
    <table class="table table-hover">
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Correo</td>
            <td>Opciones</td>
        </tr>
        <?php
        while ($user = $resultUser->fetch_object()) :
        ?>
            <tr>
                <td><?= $user->nombre ?></td>
                <td><?= $user->apellido ?></td>
                <td><?= $user->email ?></td>
                <td>
                    <a href="index.php?controller=UsuarioController&action=Eliminar&email=<?= $user->email ?>" class="btn btn-sm btn-danger">Eliminar</a>
                    <a href="index.php?controller=UsuarioController&action=Modificar&email=<?= $user->email ?>" class="btn btn-sm btn-warning">Modificar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>