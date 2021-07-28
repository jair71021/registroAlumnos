<?php include "header.php" ?>
<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>


<div class="container" >
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Registros de alumnos</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-12">
                      <form action="servidor/agregarRegistro.php"  enctype="multipart/form-data" method="POST">
                        <div class="form-row">
                          <div class="col">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control"  required>
                          </div>
                          <div class="col">
                            <label for="apellidopaterno">Apellidos Paterno</label>
                            <input type="text" name="apellidopaterno" class="form-control"  required>
                          </div>
                          <div class="col">
                            <label for="apellidomaterno">Apellidos Materno</label>
                            <input type="text" name="apellidomaterno" class="form-control"  required>
                          </div>
                        </div>
                        <br>
                        <div class="form-row">
                          <div class="col">
                            <label for="nummatricula">Matricula</label>
                            <input type="text" name="nummatricula" class="form-control"  required>
                          </div>
                          <div class="col">
                            <label for="fechanacimiento">Fecha de nacimiento</label>
                            <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control" class="datepicker" required>
                          </div>
                          <div class="col">
                            <label for="area">Especialidad</label>
                            <input type="text" name="area" class="form-control"  required>
                          </div>
                        </div>
                        <br>
                        <div class="form-row">
                          <div class="col">
                            <label for="sexo">Sexo</label>
                            <select name="sexo" class="form-control" required >
                              <option value=""></option>
                              <option value="Hombre" >Hombre</option>
                              <option value="Mujer">Mujer</option>
                            </select>
                          </div>
                          <div class="col">
                            <label for="miimagen">Imagen de perfil</label>
                            <input type="file" name="miimagen" id="miimagen" class="form-control"required  >
                          </div>
                        </div>
                        <br>
                        <button class="btn btn-outline-success btn-lg btn-block">Guardar</button>
                      </form>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla de registro de alumnos</h3>
                        <?php include "tablaAlumnos.php";  ?>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>

<?php include "footer.php" ?>