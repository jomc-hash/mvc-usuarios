<div class="alert alert-info" role="alert">
    <?php
    $mensaje = $mensaje ?? "ocurrió un error, por favor revise la petición";
    echo $mensaje;
    ?>
    <a class="btn btn-sm btn-primary" href="index.php?controller=UsuarioController&action=mostrarTodos" class="alert-link">Aceptar</a>
</div>