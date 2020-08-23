<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Agregar header -->
    <?php require('../layouts/head.html'); require_once('../connection.php');?>
    <title>Calificaciones</title>
  </head>
  <body>
    <!-- agregar el menu -->
    <?php include('../layouts/navigation.html'); ?>
    <div class="container">
      <!-- Escribir todo aqui -->
      <table class="table table-bordered table-striped">
      <form class="form" role="form" method="post" autocomplete="off">
        <div class="dropdown">
          <label class="col-lg-1 col-form-label form-control-label">Asignatura</label>          
            <select name ="Asignatura" require class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <option value="">Seleccione</option>
            <?php
                $sql = "SELECT descripcion FROM Asignatura WHERE estado = 1 ORDER BY cod_asig";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $asignatura = $row['descripcion'];
                echo "<option value='{$asignatura}'>$asignatura";
            }
            ?>
            </select>
            <label class="col-lg-1 col-form-label form-control-label">Aula</label>
            <select name ="Curso" require class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <option value="">Seleccione</option>
            <?php
                $sql = "SELECT grado from Grado ORDER BY grado";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $grado = $row['grado'];
                echo "<option value='{$grado}'>$grado";
            }
            ?>
            </select>
            <label class="col-lg-1 col-form-label form-control-label">Seccion</label>          
            <select name ="Asignatura" require class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <option value="">Seleccione</option>
            <?php
                $sql = "SELECT descripcion FROM Asignatura WHERE estado = 1 ORDER BY cod_asig";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $asignatura = $row['descripcion'];
                echo "<option value='{$asignatura}'>$asignatura";
            }
            ?>
            </select>
            <label class="col-lg-0"></label>
        <input name="Buscar" value="Buscar" type="submit" class="btn btn-primary">
        </div>
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Enero</th>
              <th scope="col">Febrero</th>
              <th scope="col">Marzo</th>
              <th scope="col">Abril</th>
              <th scope="col">Mayo</th>
              <th scope="col">Junio</th>
              <th scope="col">Julio</th>
              <th scope="col">Agosto</th>
              <th scope="col">Septiembre</th>
              <th scope="col">Octubre</th>
              <th scope="col">Noviembre</th>
              <th scope="col">Diciembre</th>
            </tr>
          </thead>
          <tbody>
              <?php include('../assets/js/notas.php');?>
          </tbody>
        </table>
      </form>
    </div>
    <?php include('../layouts/footer.html'); ?>
  </body>
</html>
