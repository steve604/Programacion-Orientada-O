<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Agregar header -->
    <?php require('../layouts/head.html'); require_once('../connection.php');?>
    <title>Asistencia</title>
  </head>
  <body>
    <!-- agregar el menu -->
    <?php include('../layouts/navigation.html'); ?>
    <div class="container">
      <!-- Escribir todo aqui -->
      <table class="table">
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
            <label class="col-lg-1"></label>
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
                $sql = "SELECT nombre FROM Seccion ORDER BY nombre";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }

            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $asignatura = $row['nombre'];
                echo "<option value='{$asignatura}'>$asignatura";
            }
            ?>
            </select>
        </div>

          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Aula</th>
              <th scope="col">Asistencia</th>
              <th scope="col">fecha</th>
            </tr>
          </thead>
          <tbody>
              <form action="" method="post">
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td><input type="checkbox" id="check" name="check" onclick="play();"></td>
              <td ><div id="3d" name="fecha"></div></td>
        </form>
            </tr>
          </tbody>
        </table>
    </div>

    <script>
    function play(){
        //selecciona la fecha actual para guardarla en la base de datos
      let check = document.getElementById('check').value;
      let objFecha = new Date();
      let mes =  objFecha.getMonth() + 1;

      if(check = true){
          document.getElementById('3d').innerHTML=' '+(objFecha.getDate() + "/" + mes + "/" + objFecha.getFullYear());
      }

     }
    </script>
    <?php include('../layouts/footer.html');?>
  </body>
</html>
