<?php
    if ($_POST) {
        $asignatura = $_POST['Asignatura'];
        $grado = $_POST['Aula'];
        $seccion = $_POST['Seccion'];
        $sql = "SELECT * from VEstudiantes WHERE seccion = {$seccion} AND grado = {$grado}";
                
        $stmt = sqlsrv_query( $conn, $sql );
        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ){
        $nombre = $row['nom_ter']." ".$row['ape_est'];
        //$mes = $row['notas'];
        $estCod = $row['cod_est'];
        $nombre = $row['nom_ter']
        ?>
        <tr>
            <th scope="row" name="<?php echo $nombre; ?>"> <?php echo $nombre; ?> </th>
            <?php
                
            $sql1 = "SELECT * from VNotas WHERE cod_asig = {$asignatura} AND grado = {$grado} AND seccion = {$seccion} AND cod_est = {$estCod}";
                
                    $stmtn = sqlsrv_query( $conn, $sql1 );
                    if( $stmtn === false) {
                        die( print_r( sqlsrv_errors(), true) );
                    }
                    while( $rows = sqlsrv_fetch_array( $stmtn, SQLSRV_FETCH_ASSOC) ){
                        $mes = $rows['mes'];
                        $codEst = $rows['cod_est'];
                        $nota = $rows['notas'];
                        if ( $nota > 0) {
                                ?>
                                <td><input type="number" name="<?php echo $estCod.$asignatura; ?>" value="<?php echo $rows['notas']; ?>" size="5" min="1" max="100" class="input-group" readonly></td>
                                
                                <?php
                        }                    
                    }
                   ?> <td><input type="number" name="<?php echo $estCod.$asignatura; ?>" size="5" min="0" max="100" class="input-group"></td> <?php
                }
        }
    ?>
    </tr>
