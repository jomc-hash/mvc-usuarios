<?php
//crear  el modelo de la conexión al usuario

require_once 'config/database.php';

class ModeloBase
{
    public $db;

    public function __construct()
    {
        $this->db = database::conectar();
    }

    // consultas generales
    public  function MostrarTodos($tabla)
    {
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }

    // eliminar registro
    public  function Eliminar($tabla, $campo_pk, $valor_pk)
    {
        $query = $this->db->query("DELETE  FROM $tabla WHERE $campo_pk='$valor_pk' ");
        return $query;
    }
    // editar registro
    public  function Editar($tabla, $valores, $campo_pk, $valor_pk)
    {

        $cadena_valores = "";
        foreach ($valores as $clave => $valor) {
            $cadena_valores .= " $clave='$valor' ,";
        }
        $cadena_valores = substr($cadena_valores, 0, -1);

        $query = $this->db->query("UPDATE  $tabla SET $cadena_valores WHERE $campo_pk='$valor_pk'");
        return $query;
    }

    public  function Mostrar($tabla, $campo_pk, $valor_pk)
    {
        $query = $this->db->query("SELECT * FROM $tabla WHERE $campo_pk='$valor_pk'");
        return $query;
    }
}
