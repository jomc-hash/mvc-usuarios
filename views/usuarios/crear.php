<div class="panel panel-primary col-md-8 col-md-offset-2">
    <div class="panel-heading">
        Crear Usuarios
    </div>
    <div class="panel-body">
        <form action="index.php?controller=UsuarioController&action=guardar" method="POST" class="form-horizontal">

            <label for="txtNombre" class="control-label">Nombre</label>
            <input class="form-control" type="text" name="txtNombre">


            <label for="txtApellido" class="control-label">Apellido</label>
            <input class="form-control" type="text" name="txtApellido">

            <label for="email" class="control-label">Email</label>
            <input class="form-control" type="text" name="txtEmail">
            <br>
            <button class="btn btn-warning" type="submit">Guardar</button>
        </form>
    </div>
</div>