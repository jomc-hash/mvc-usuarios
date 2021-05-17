<?php
//crear el controlador UsuarioController dentro de la carpeta controllers
class  UsuarioController
{

    public function crear()
    {
        require_once 'views/usuarios/crear.php';
    }

    public function guardar()
    {
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $user->setNombre($_POST['txtNombre']);
        $user->setApellido($_POST['txtApellido']);
        $user->setEmail($_POST['txtEmail']);
        $guardar = $user->Create();
        $this->mostrarTodos();
    }

    public function mostrarTodos()
    {
        require_once 'models/Usuario.php';
        $user = new Usuario();
        $resultUser = $user->MostrarTodos('usuarios');
        require_once 'views/usuarios/mostrar.php';
    }


    public function mostrar()
    {
    }


    public function buscar()
    {
    }

    public function eliminar()
    {
        if (!isset($_GET['email'])) {
            $mensaje = "Esta función está disponible desde las opciones de la tabla en HOME";
            return require_once 'views/usuarios/alerta.php';
        }

        require_once 'models/Usuario.php';
        $user = new Usuario();
        $email = $_GET['email'];
        $user->Eliminar('usuarios', 'email', $email);
        require_once 'views/usuarios/elemento_eliminado.php';
    }

    public function modificar()
    {
        if (!isset($_GET['email'])) {
            $mensaje = "Esta función está disponible desde las opciones de la tabla en HOME";
            return require_once 'views/usuarios/alerta.php';
        }

        require_once 'models/Usuario.php';
        $user = new Usuario();
        $email = $_GET['email'];
        $resultUser = $user->Mostrar(
            'usuarios', //tabla
            'email', // campo_pk:    
            $email //valor_pk
        );
        require_once 'views/usuarios/editar.php';
    }

    public function guardarModificaciones()
    {

        require_once 'models/Usuario.php';
        $user = new Usuario();
        $email = $_POST['txtEmail'];
        $valores = [];
        $valores['nombre'] = $_POST['txtNombre'];
        $valores['apellido'] = $_POST['txtApellido'];
        $user->Editar(
            'usuarios' //tabla
            ,
            $valores // valores
            ,
            'email'  //campo_pk
            ,
            $email //valor_pk
        );
        $this->mostrarTodos();
    }
}
