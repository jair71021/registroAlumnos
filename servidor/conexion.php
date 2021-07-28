<?php

function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "registroalumnos";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    return $conexion;
}