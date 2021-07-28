<?php
    
    $nombre=$_POST['nombre'];
    $apellidopaterno=$_POST['apellidopaterno'];
    $apellidomaterno=$_POST['apellidomaterno'];
    $fechanacimiento=$_POST['fechanacimiento'];
    $nummatricula=$_POST['nummatricula'];
    $area=$_POST['area'];
    $sexo=$_POST['sexo'];
    
    
    include "conexion.php";
    $conexion=conexion();
    $sql ="INSERT INTO t_alumnos (nombre,apellidopaterno,
                                        apellidomaterno,
                                        fechanacimiento,
                                        nummatricula,area,
                                            sexo,miimagen) 
                                            VALUES ('$nombre',
                                                    '$apellidopaterno',
                                                    '$apellidomaterno',
                                                    '$fechanacimiento',
                                                    '$nummatricula',
                                                    '$area',
                                                    '$sexo','$miimagen')";
    $respuesta = mysqli_query($conexion, $sql);
    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar, no sé porque ";
    }



?>
    
    

?>