<?php
// Crear la configuración de la bd
class database
{
    public static function conectar()
    {
        $conexion = new mysqli(
            "localhost",
            "root",
            "",
            "bdNombres"
        );
        $conexion->query("SET NAME 'utf8'");
        return $conexion;
    }
}
    