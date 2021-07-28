<?php
    session_start();

    include "funciones.php";
    $nombre=$_POST['nombre'];
    $apellidopaterno=$_POST['apellidopaterno'];
    $apellidomaterno=$_POST['apellidomaterno'];
    $fechanacimiento=$_POST['fechanacimiento'];
    $nummatricula=$_POST['nummatricula'];
    $area=$_POST['area'];
    $sexo=$_POST['sexo'];
    $miimagen=$_FILES['miimagen']['name'];
    $extension = explode(".", $miimagen);
    $extension = $extension[1];
    $rutaTemporal = $_FILES['miimagen']['tmp_name'];
    $rutaDeServidor = "../archivos/";

    if (move_uploaded_file($rutaTemporal, $rutaDeServidor . $miimagen)) {
        $insertarEnBD = agregarRegistro($nombre,
                                        $apellidopaterno,
                                        $apellidomaterno,
                                        $fechanacimiento,
                                        $nummatricula,
                                        $area,
                                        $sexo,
                                        $miimagen,$extension);
        if ($insertarEnBD) {
            $_SESSION['operacion'] = "insert";
        } else {
            $_SESSION['operacion'] = "error";
        }
    } else {
        $_SESSION['operacion'] = "error";
    }

    header("location:../index.php");

?>
    
    
