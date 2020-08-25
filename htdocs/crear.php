<?php
require_once('../connection.php');
    if (isset($_POST['Guardar'])) {
        $asignatura = $_POST['Asignatura'];
        $asignatura = trim($asignatura);
        $grado = $_POST['Aula'];
        $seccion = $_POST['Seccion'];
        $codEst = "";

        $sql1 = "SELECT cod_est, mes from VNotas WHERE cod_asig = {$asignatura} AND grado = {$grado} AND seccion = {$seccion}";

        $stmtn = sqlsrv_query( $conn, $sql1 );
        if( $stmtn === false) {
            die( print_r( sqlsrv_errors(), true) );
        }
        //insertamos dependiendo el estudiante
            while( $rows = sqlsrv_fetch_array( $stmtn, SQLSRV_FETCH_ASSOC) ){
            $codEst = $rows['cod_est']; 
            $codEst = trim($codEst);
            $valor = $rows['mes'];
            $valor ++;
            //buscamos el max id
            $max = 0;
            $sql = "SELECT cod_not FROM Notas";
            $result = sqlsrv_query($conn, $sql);
            while($row = sqlsrv_fetch_array($result)){
                $max = $row["cod_not"];
                $max ++;
            }
            $notasRecibidas = $codEst.$asignatura;
                $nota = $_POST[$notasRecibidas];
                
                $sqli = "exec SpAgregarNota @codigo = {$max}, @notas = {$nota}, @mes={$valor}, @estatus = 1 , @materia = {$asignatura}, @estudiante = {$codEst}";
                if(sqlsrv_query($conn, $sqli)){
                    echo "Se ha guardado correctamente";
                }else{
                var_dump(sqlsrv_errors());
                echo "Ha ocurrido un error";
                }
                

        }
        header("Location: notas.php");
    }
    header("Location: notas.php");
    ?>