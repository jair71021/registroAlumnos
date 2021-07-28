<?php
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_alumnos,
                    nombre,
                    apellidopaterno, 
                    apellidomaterno,
                    fechanacimiento,
                    nummatricula,
                    area,
                    sexo,
                    miimagen ,extension
            FROM t_alumnos";
            
    $respuesta = mysqli_query($conexion, $sql);
?>
    <table id="tablaObjetivo" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Apellido paterno   </th>
                <th>Apellido materno   </th>
                <th>Nombre             </th>
                <th>Fecha de nacimiento</th>
                <th>Matricula</th>
                <th>Sexo               </th>
                <th>Especialidad</th>
                <th>Imagen de perfil</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while($ver = mysqli_fetch_array($respuesta)) {  
            ?>
            <tr>
                <td><?php echo $ver['id_alumnos'];?>     </td>
                <td><?php echo $ver['apellidopaterno']; ?></td>
                <td><?php echo $ver['apellidomaterno']; ?></td>
                <td><?php echo $ver['nombre'];?>          </td>
                <td>
                    <?php $fechas= new  DateTime($ver['fechanacimiento']) ; 
                    $hoy = new DateTime();
                    $edad = $hoy->diff($fechas);
                    echo $edad->y;
                    echo " años";
                ?></td>
                <td><?php echo $ver['nummatricula']; ?></td>
                <td><?php echo $ver['sexo'];?></td>
                <td><?php echo $ver['area']; ?></td>
                <td><?php 
                    $ext = $ver['extension'];
                    $imagen = '';
                    
                    if ($ext == "jpg" || $ext == "JPG") {
                        $cadenaImagen = '<img src=' . 'archivos/' . $ver['miimagen'] . ' width="50px" height="50px">';
                        echo '<a href="visualizar.php?nombre=' . $ver['miimagen'] . '" target="_blank"> ' . $cadenaImagen . ' </a>';
                    }
                    ?>
                </td>
                
                <td>
                    <form action="servidor/eliminarRegistro.php" method="POST">
                        <input type="text" hidden name="idAlumnos" value="<?php echo $ver['id_alumnos']?>">
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>



        <tfoot>
            <tr>
                <th>id</th>
                <th>Apellido paterno   </th>
                <th>Apellido materno   </th>
                <th>Nombre             </th>
                <th>Fecha de nacimiento</th>
                <th>Matricula</th>
                <th>Sexo               </th>
                <th>Especialidad</th>
                <th>Imagen de perfil</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
    </table>