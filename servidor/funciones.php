<?php
include "conexion.php";

    function agregarRegistro($nombre,
                              $apellidopaterno,
                              $apellidomaterno,
                              $fechanacimiento,
                              $nummatricula,
                              $area,
                              $sexo,
                              $miimagen,
                              $extension){

      $conexion=conexion();
      $sql ="INSERT INTO t_alumnos (nombre,apellidopaterno,
                                          apellidomaterno,
                                          fechanacimiento,
                                          nummatricula,area,
                                              sexo,miimagen,extension) 
                                              VALUES ('$nombre',
                                                      '$apellidopaterno',
                                                      '$apellidomaterno',
                                                      '$fechanacimiento',
                                                      '$nummatricula',
                                                      '$area',
                                                      '$sexo','$miimagen','$extension')";
      $respuesta = mysqli_query($conexion, $sql);
      return $respuesta;
    }
      ?>