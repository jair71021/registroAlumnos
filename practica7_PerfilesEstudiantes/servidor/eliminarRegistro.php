<?php

$idAlumnos = $_POST['idAlumnos'];

include "conexion.php";
$conexion = conexion();

$sql = "DELETE FROM t_alumnos WHERE id_alumnos= '$idAlumnos'";

$respuesta = mysqli_query($conexion, $sql);

if ($respuesta) {
    header("location:../index.php");
} else {
    echo "No se pudo eliminar,";
}
?>