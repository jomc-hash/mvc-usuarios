<!DOCTYPE html>
<html>

<head>
    <title>Pagina con MVC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    user-scalable=no,initial-scale=1.0, maximum-scale=1.0, maximun-scale=1.0">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap\js\bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap\js\bootstrap.js">
</head>

<body>
    <h1>Sitio web con MVC</h1>
    <div class="container">
        <div class="nav nav-tabs">
            <li class="active">
                <a href="index.php?controller=UsuarioController&action=mostrarTodos">Home</a>
            </li>
            <li class="active">
                <a href="index.php?controller=UsuarioController&action=crear">Crear</a>
            </li>
            <li class="active">
                <a href="index.php?controller=UsuarioController&action=Eliminar">Eliminar</a>
            </li>
            <li class="active">
                <a href="index.php?controller=UsuarioController&action=Modificar">Modificar</a>
            </li>
        </div>
    </div>
    <?php
    require_once 'controllers/UsuarioController.php';

    if (isset($_GET['controller'])) {
        $nombrecontrolador = $_GET['controller'];
        $controlador = new $nombrecontrolador();

        if (isset($_GET['action'])) {
            $action = $_GET['action'];

            $controlador->$action();
        }
    }
    ?>
</body>

</html>