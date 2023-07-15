<?php
    function conectar(){
        $server = "finalbd.cmvwerakgrih.us-east-1.rds.amazonaws.com";
        $usuario = "root";
        $contraseña = "Hola2023*";
        $base = "diplomado";

        // Crear conexión
        $bd = new mysqli($server, $usuario, $contraseña, $base);
        return $bd;
        // Comprobar conexión
        if ($bd->connect_error) {
            die("Error de conexión: " . $bd->connect_error);
        }
    }
?>