<?php

  if ($_POST) {
    ?>
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
            <?php
            $sql = "SELECT * from VEstudiantes WHERE seccion = {$seccion} AND grado = {$grado}";
                
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }
        
                while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
                $nombre = $row['nom_ter']." ".$row['ape_est'];
                }
            ?>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td><input type="checkbox" id="check" name="check" onclick="play();"></td>
              <td ><div id="3d" name="fecha"></div></td>
            </tr>
          </tbody>

    <?php
    
  }
?>